<?php

/**
 * Persona filter form base class.
 *
 * @package    takeoff
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'foto'                     => new sfWidgetFormFilterInput(),
      'nombres'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ap_paterno'               => new sfWidgetFormFilterInput(),
      'ap_materno'               => new sfWidgetFormFilterInput(),
      'pais_origen_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Pais'), 'add_empty' => true)),
      'num_documento_identidad'  => new sfWidgetFormFilterInput(),
      'expedido_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Expedido'), 'add_empty' => true)),
      'tipo_documento_identidad' => new sfWidgetFormChoice(array('choices' => array('' => '', 'CI' => 'CI', 'DNI' => 'DNI', 'PASAPORTE' => 'PASAPORTE'))),
      'fecha_nacimiento'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_fallecimiento'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'lugar_nacimiento_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LugarNacimiento'), 'add_empty' => true)),
      'sexo'                     => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'direccion_localidad_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DireccionLocalidad'), 'add_empty' => true)),
      'zona'                     => new sfWidgetFormFilterInput(),
      'direccion'                => new sfWidgetFormFilterInput(),
      'direccion_numero'         => new sfWidgetFormFilterInput(),
      'email'                    => new sfWidgetFormFilterInput(),
      'telefono'                 => new sfWidgetFormFilterInput(),
      'celular'                  => new sfWidgetFormFilterInput(),
      'fallecido'                => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'foto'                     => new sfValidatorPass(array('required' => false)),
      'nombres'                  => new sfValidatorPass(array('required' => false)),
      'ap_paterno'               => new sfValidatorPass(array('required' => false)),
      'ap_materno'               => new sfValidatorPass(array('required' => false)),
      'pais_origen_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Pais'), 'column' => 'id')),
      'num_documento_identidad'  => new sfValidatorPass(array('required' => false)),
      'expedido_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Expedido'), 'column' => 'id')),
      'tipo_documento_identidad' => new sfValidatorChoice(array('required' => false, 'choices' => array('CI' => 'CI', 'DNI' => 'DNI', 'PASAPORTE' => 'PASAPORTE'))),
      'fecha_nacimiento'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_fallecimiento'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'lugar_nacimiento_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LugarNacimiento'), 'column' => 'id')),
      'sexo'                     => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'direccion_localidad_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('DireccionLocalidad'), 'column' => 'id')),
      'zona'                     => new sfValidatorPass(array('required' => false)),
      'direccion'                => new sfValidatorPass(array('required' => false)),
      'direccion_numero'         => new sfValidatorPass(array('required' => false)),
      'email'                    => new sfValidatorPass(array('required' => false)),
      'telefono'                 => new sfValidatorPass(array('required' => false)),
      'celular'                  => new sfValidatorPass(array('required' => false)),
      'fallecido'                => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'foto'                     => 'Text',
      'nombres'                  => 'Text',
      'ap_paterno'               => 'Text',
      'ap_materno'               => 'Text',
      'pais_origen_id'           => 'ForeignKey',
      'num_documento_identidad'  => 'Text',
      'expedido_id'              => 'ForeignKey',
      'tipo_documento_identidad' => 'Enum',
      'fecha_nacimiento'         => 'Date',
      'fecha_fallecimiento'      => 'Date',
      'lugar_nacimiento_id'      => 'ForeignKey',
      'sexo'                     => 'Enum',
      'direccion_localidad_id'   => 'ForeignKey',
      'zona'                     => 'Text',
      'direccion'                => 'Text',
      'direccion_numero'         => 'Text',
      'email'                    => 'Text',
      'telefono'                 => 'Text',
      'celular'                  => 'Text',
      'fallecido'                => 'Boolean',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
      'created_by'               => 'ForeignKey',
      'updated_by'               => 'ForeignKey',
    );
  }
}
