<?php

/**
 * Persona form base class.
 *
 * @method Persona getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'foto'                     => new sfWidgetFormInputText(),
      'nombres'                  => new sfWidgetFormInputText(),
      'ap_paterno'               => new sfWidgetFormInputText(),
      'ap_materno'               => new sfWidgetFormInputText(),
      'pais_origen_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'num_documento_identidad'  => new sfWidgetFormInputText(),
      'expedido_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expedido'), 'add_empty' => true)),
      'tipo_documento_identidad' => new sfWidgetFormChoice(array('choices' => array('CI' => 'CI', 'DNI' => 'DNI', 'PASAPORTE' => 'PASAPORTE'))),
      'fecha_nacimiento'         => new sfWidgetFormDate(),
      'fecha_fallecimiento'      => new sfWidgetFormDate(),
      'lugar_nacimiento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LugarNacimiento'), 'add_empty' => true)),
      'sexo'                     => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'direccion_localidad_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DireccionLocalidad'), 'add_empty' => true)),
      'zona'                     => new sfWidgetFormInputText(),
      'direccion'                => new sfWidgetFormInputText(),
      'direccion_numero'         => new sfWidgetFormInputText(),
      'email'                    => new sfWidgetFormInputText(),
      'telefono'                 => new sfWidgetFormInputText(),
      'celular'                  => new sfWidgetFormInputText(),
      'fallecido'                => new sfWidgetFormInputCheckbox(),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
      'created_by'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'foto'                     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'nombres'                  => new sfValidatorString(array('max_length' => 150)),
      'ap_paterno'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'ap_materno'               => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'pais_origen_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'required' => false)),
      'num_documento_identidad'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'expedido_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Expedido'), 'required' => false)),
      'tipo_documento_identidad' => new sfValidatorChoice(array('choices' => array(0 => 'CI', 1 => 'DNI', 2 => 'PASAPORTE'), 'required' => false)),
      'fecha_nacimiento'         => new sfValidatorDate(array('required' => false)),
      'fecha_fallecimiento'      => new sfValidatorDate(array('required' => false)),
      'lugar_nacimiento_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LugarNacimiento'), 'required' => false)),
      'sexo'                     => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'), 'required' => false)),
      'direccion_localidad_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DireccionLocalidad'), 'required' => false)),
      'zona'                     => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'direccion'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'direccion_numero'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'                    => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'telefono'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'celular'                  => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fallecido'                => new sfValidatorBoolean(array('required' => false)),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
      'created_by'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

}
