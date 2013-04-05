<?php

class CleanupTask extends sfBaseTask
{
  protected function configure()
  {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'Doctrine'),
      // add your own options here
    ));

    $this->namespace        = '';
    $this->name             = 'Cleanup';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [Cleanup|INFO] task does things.
Call it with:

  [php symfony Cleanup|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $connection = $databaseManager->getDatabase($options['connection'])->getConnection();

	// cleanup Lucene index
	$index = JobTable::getLuceneIndex();

	$q = Doctrine_Query::create()
		->from('Job j');

	$jobs = $q->execute();
	foreach ($jobs as $job)
	{
		if ($hit = $index->find('pk:'.$job->getId()))
		{
			$index->delete($hit->id);
		}
	}

	$index->optimize();
	$this->logSection('lucene', 'Cleaned up and optimized the job index');

	// Remove stale jobs
	$nb = Doctrine_Core::getTable('Job')->cleanup($options['days']);
	$this->logSection('doctrine', sprintf('Removed %d stale jobs', $nb));

  }
}
