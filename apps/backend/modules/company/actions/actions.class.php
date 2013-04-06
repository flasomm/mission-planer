<?php

/**
 * company actions.
 *
 * @package    Physalix_Backend
 * @subpackage company
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class companyActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	$query = Doctrine_Core::getTable('Company')->createQuery('a')->orderBy('a.nom ASC');	
	//sfContext::getInstance()->getLogger()->debug(sfConfig::get('app_max_page_on_homepage'));
	$this->pager = new sfDoctrinePager('Company', sfConfig::get('app_max_page_on_homepage'));
	$this->pager->setQuery($query);
	$this->pager->setPage($request->getParameter('page', 1));
	$this->pager->init();	

	  // $this->companys = Doctrine_Core::getTable('Company')
	  // ->createQuery('a')
	  // ->orderBy('a.nom ASC')
	  // ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {	
	$this->contacts = Doctrine_Core::getTable('Contact')->getContactsByCompanyId($request->getParameter('id'));
    $this->company = Doctrine_Core::getTable('Company')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->company);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CompanyForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CompanyForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($company = Doctrine_Core::getTable('Company')->find(array($request->getParameter('id'))), sprintf('Object company does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompanyForm($company);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($company = Doctrine_Core::getTable('Company')->find(array($request->getParameter('id'))), sprintf('Object company does not exist (%s).', $request->getParameter('id')));
    $this->form = new CompanyForm($company);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($company = Doctrine_Core::getTable('Company')->find(array($request->getParameter('id'))), sprintf('Object company does not exist (%s).', $request->getParameter('id')));
    $company->delete();

    $this->redirect('company/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      	$company = $form->save();

      $this->redirect('company/show?id='.$company->getId());
    }
  }
}
