<?php

/**
 * Company form.
 *
 * @package    Physalix_Backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CompanyForm extends BaseCompanyForm
{
  public function configure()
  {
	unset(
		$this['created_at'], $this['updated_at']
	);	
	
	$this->widgetSchema['adresse'] = new sfWidgetFormTextarea();	
	$this->widgetSchema['commentaire'] = new sfWidgetFormTextarea();
	
  }
}
