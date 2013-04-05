<?php

/**
 * ContactTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ContactTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ContactTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Contact');
    }

    /**
     * Returns a list of jobs by contact id.
     *
     * @return object JobTable
     */
	public function getContactsByCompanyId($companyId) 
	{
		$q = $this->createQuery('j')
			->where('j.company_id = ?', $companyId)
			->orderBy('j.nom DESC');

		return $q->execute();
	}
	
	
	// static public function getLuceneIndex()
	// {
	//   ProjectConfiguration::registerZend();
	// 
	//   if (file_exists($index = self::getLuceneIndexFile()))
	//   {
	//     return Zend_Search_Lucene::open($index);
	//   }
	// 
	//   return Zend_Search_Lucene::create($index);
	// }
	// 
	// static public function getLuceneIndexFile()
	// {
	//   return sfConfig::get('sf_data_dir').'/contact.'.sfConfig::get('sf_environment').'.index';
	// }	
	// 
	// 
	// public function getForLuceneQuery($query)
	// {
	//   $hits = self::getLuceneIndex()->find($query);
	// 
	//   $pks = array();
	//   foreach ($hits as $hit)
	//   {
	//     $pks[] = $hit->pk;
	//   }
	// 
	//   if (empty($pks))
	//   {
	//     return array();
	//   }
	// 
	//   $q = $this->createQuery('j')
	//     ->whereIn('j.id', $pks)
	//     ->limit(20);
	// 
	//   return $q->execute();
	// }	

}