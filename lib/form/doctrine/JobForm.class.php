<?php

/**
 * Job form.
 *
 * @package    Physalix_Backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobForm extends BaseJobForm
{
  public function configure()
  {
	unset(
		$this['created_at'], $this['updated_at']
	);	
	
	$this->widgetSchema['commentaire'] = new sfWidgetFormTextarea();
	$this->widgetSchema['date_presentation'] = new sfWidgetFormDateTime(array('date' =>array('format'=>'%day%/%month%/%year%')));
	$this->widgetSchema['fournisseur_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Fournisseur'), 'add_empty' => false, 'order_by' => array('nom', 'asc')));
	$this->widgetSchema['client_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => false, 'order_by' => array('nom', 'asc')));	
	$this->widgetSchema['contact_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Contact'), 'add_empty' => false, 'order_by' => array('nom', 'asc')));		
	$this->widgetSchema['position_id'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Position'), 'add_empty' => false, 'order_by' => array('titre', 'asc')));			
	
	

	
  }
}
