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

	$this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
	  'label' => 'Logo',
	));	
	
	$this->validatorSchema['logo'] = new sfValidatorFile(array(
	  'required'   => false,
	  'path'       => sfConfig::get('sf_upload_dir').'/companys',
	  'mime_types' => 'web_images',
	  'validated_file_class' => 'sfValidatedFileCustom'
	));	
  }

}
