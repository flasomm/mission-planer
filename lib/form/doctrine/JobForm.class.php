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
	
  }
}
