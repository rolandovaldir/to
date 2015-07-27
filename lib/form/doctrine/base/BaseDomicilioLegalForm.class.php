<?php

/**
 * DomicilioLegal form base class.
 *
 * @method DomicilioLegal getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDomicilioLegalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'empresa_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'), 'add_empty' => false)),
      'localidad_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'), 'add_empty' => false)),
      'direccion'    => new sfWidgetFormInputText(),
      'numero'       => new sfWidgetFormInputText(),
      'edificio'     => new sfWidgetFormInputText(),
      'telefono'     => new sfWidgetFormInputText(),
      'fax'          => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'created_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'empresa_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Empresa'))),
      'localidad_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Localidad'))),
      'direccion'    => new sfValidatorString(array('max_length' => 250)),
      'numero'       => new sfValidatorString(array('max_length' => 10)),
      'edificio'     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'telefono'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'fax'          => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'created_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('domicilio_legal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DomicilioLegal';
  }

}
