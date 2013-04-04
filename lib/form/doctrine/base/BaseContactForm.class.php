<?php

/**
 * Contact form base class.
 *
 * @method Contact getObject() Returns the current form's model object
 *
 * @package    Physalix_Backend
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContactForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nom'         => new sfWidgetFormInputText(),
      'prenom'      => new sfWidgetFormInputText(),
      'position_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Position'), 'add_empty' => false)),
      'email'       => new sfWidgetFormInputText(),
      'company_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => false)),
      'telephone'   => new sfWidgetFormInputText(),
      'mobile'      => new sfWidgetFormInputText(),
      'commentaire' => new sfWidgetFormInputText(),
      'rappel'      => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nom'         => new sfValidatorString(array('max_length' => 150)),
      'prenom'      => new sfValidatorString(array('max_length' => 150)),
      'position_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Position'))),
      'email'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'company_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Company'))),
      'telephone'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'mobile'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'commentaire' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'rappel'      => new sfValidatorBoolean(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('contact[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contact';
  }

}
