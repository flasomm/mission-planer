<?php

/**
 * JobCompany form base class.
 *
 * @method JobCompany getObject() Returns the current form's model object
 *
 * @package    Physalix_Backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJobCompanyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'company_id' => new sfWidgetFormInputHidden(),
      'job_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'company_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('company_id')), 'empty_value' => $this->getObject()->get('company_id'), 'required' => false)),
      'job_id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('job_id')), 'empty_value' => $this->getObject()->get('job_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('job_company[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobCompany';
  }

}
