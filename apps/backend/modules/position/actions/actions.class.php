<?php

/**
 * position actions.
 *
 * @package    Physalix_Backend
 * @subpackage position
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class positionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->positions = Doctrine_Core::getTable('Position')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->position = Doctrine_Core::getTable('Position')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->position);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PositionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PositionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($position = Doctrine_Core::getTable('Position')->find(array($request->getParameter('id'))), sprintf('Object position does not exist (%s).', $request->getParameter('id')));
    $this->form = new PositionForm($position);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($position = Doctrine_Core::getTable('Position')->find(array($request->getParameter('id'))), sprintf('Object position does not exist (%s).', $request->getParameter('id')));
    $this->form = new PositionForm($position);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($position = Doctrine_Core::getTable('Position')->find(array($request->getParameter('id'))), sprintf('Object position does not exist (%s).', $request->getParameter('id')));
    $position->delete();

    $this->redirect('position/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $position = $form->save();

      $this->redirect('position/edit?id='.$position->getId());
    }
  }
}
