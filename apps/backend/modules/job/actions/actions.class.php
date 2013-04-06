<?php

/**
 * job actions.
 *
 * @package    Physalix_Backend
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	
	$query = Doctrine_Core::getTable('Job')->createQuery('a')->orderBy('a.created_at DESC');
	$this->pager = new sfDoctrinePager('Job', sfConfig::get('app_max_page_on_homepage'));
	$this->pager->setQuery($query);
	$this->pager->setPage($request->getParameter('page', 1));
	$this->pager->init();	
	
	  //     $this->jobs = Doctrine_Core::getTable('Job')
	  //       ->createQuery('a')
	  // ->orderBy('a.created_at DESC')
	  //       ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->job = Doctrine_Core::getTable('Job')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobForm();

    $this->processForm($request, $this->form);

    $this->redirect('job/index');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($job = Doctrine_Core::getTable('Job')->find(array($request->getParameter('id'))), sprintf('Object job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobForm($job);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($job = Doctrine_Core::getTable('Job')->find(array($request->getParameter('id'))), sprintf('Object job does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobForm($job);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($job = Doctrine_Core::getTable('Job')->find(array($request->getParameter('id'))), sprintf('Object job does not exist (%s).', $request->getParameter('id')));
    $job->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      	$job = $form->save();
		
      $this->redirect('job/show?id='.$job->getId());
    }
  }

	// public function executeSearch(sfWebRequest $request)
	//   	{
	// 	$this->logMessage('info', $request->getParameter('query'));
	//     	$this->forwardUnless($query = $request->getParameter('query'), 'job', 'index');
	//     	$this->jobs = Doctrine_Core::getTable('Job')->getForLuceneQuery($query);
    	//$contacts = Doctrine_Core::getTable('Contact')->getForLuceneQuery($query);
    	//$companys = Doctrine_Core::getTable('Company')->getForLuceneQuery($query);

		//$this->results = array_merge($jobs, $contacts, $companys);
		//sfContext::getInstance()->getLogger()->debug($this->results);
  	// }
}
