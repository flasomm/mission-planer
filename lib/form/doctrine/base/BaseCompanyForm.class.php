<?php

/**
 * Company form base class.
 *
 * @method Company getObject() Returns the current form's model object
 *
 * @package    Physalix_Backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCompanyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nom'         => new sfWidgetFormInputText(),
      'logo'        => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
      'telephone'   => new sfWidgetFormInputText(),
      'adresse'     => new sfWidgetFormInputText(),
      'code_postal' => new sfWidgetFormInputText(),
      'ville'       => new sfWidgetFormInputText(),
      'commentaire' => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nom'         => new sfValidatorString(array('max_length' => 150)),
      'logo'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'url'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telephone'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'adresse'     => new sfValidatorString(array('max_length' => 255)),
      'code_postal' => new sfValidatorString(array('max_length' => 10)),
      'ville'       => new sfValidatorString(array('max_length' => 120)),
      'commentaire' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('company[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Company';
  }

}
