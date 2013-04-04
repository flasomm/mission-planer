<?php

/**
 * Contact filter form base class.
 *
 * @package    Physalix_Backend
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContactFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nom'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prenom'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'position_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Position'), 'add_empty' => true)),
      'email'       => new sfWidgetFormFilterInput(),
      'company_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => true)),
      'telephone'   => new sfWidgetFormFilterInput(),
      'mobile'      => new sfWidgetFormFilterInput(),
      'commentaire' => new sfWidgetFormFilterInput(),
      'rappel'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nom'         => new sfValidatorPass(array('required' => false)),
      'prenom'      => new sfValidatorPass(array('required' => false)),
      'position_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Position'), 'column' => 'id')),
      'email'       => new sfValidatorPass(array('required' => false)),
      'company_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Company'), 'column' => 'id')),
      'telephone'   => new sfValidatorPass(array('required' => false)),
      'mobile'      => new sfValidatorPass(array('required' => false)),
      'commentaire' => new sfValidatorPass(array('required' => false)),
      'rappel'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('contact_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contact';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nom'         => 'Text',
      'prenom'      => 'Text',
      'position_id' => 'ForeignKey',
      'email'       => 'Text',
      'company_id'  => 'ForeignKey',
      'telephone'   => 'Text',
      'mobile'      => 'Text',
      'commentaire' => 'Text',
      'rappel'      => 'Boolean',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
