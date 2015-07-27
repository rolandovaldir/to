<?php

/**
 * Empresa filter form base class.
 *
 * @package    takeoff
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmpresaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'razon_social'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sigla'                        => new sfWidgetFormFilterInput(),
      'tipo_constitucion_empresa_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoConstitucionEmpresa'), 'add_empty' => true)),
      'fecha_constitucion'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'fecha_inicio_actividades'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'numero_doc_constitucion'      => new sfWidgetFormFilterInput(),
      'fecha_doc_constitucion'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'actividad_economica_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ActividadEconomica'), 'add_empty' => true)),
      'nit'                          => new sfWidgetFormFilterInput(),
      'tipo_dependencia'             => new sfWidgetFormChoice(array('choices' => array('' => '', 'OFICINA PRINCIPAL' => 'OFICINA PRINCIPAL', 'SUCURSAL' => 'SUCURSAL'))),
      'web'                          => new sfWidgetFormFilterInput(),
      'is_active'                    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'user_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'created_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'empresas_list'                => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Empresa')),
      'sucursales_list'              => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Empresa')),
    ));

    $this->setValidators(array(
      'razon_social'                 => new sfValidatorPass(array('required' => false)),
      'sigla'                        => new sfValidatorPass(array('required' => false)),
      'tipo_constitucion_empresa_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TipoConstitucionEmpresa'), 'column' => 'id')),
      'fecha_constitucion'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'fecha_inicio_actividades'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'numero_doc_constitucion'      => new sfValidatorPass(array('required' => false)),
      'fecha_doc_constitucion'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'actividad_economica_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ActividadEconomica'), 'column' => 'id')),
      'nit'                          => new sfValidatorPass(array('required' => false)),
      'tipo_dependencia'             => new sfValidatorChoice(array('required' => false, 'choices' => array('OFICINA PRINCIPAL' => 'OFICINA PRINCIPAL', 'SUCURSAL' => 'SUCURSAL'))),
      'web'                          => new sfValidatorPass(array('required' => false)),
      'is_active'                    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'user_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'created_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
      'empresas_list'                => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Empresa', 'required' => false)),
      'sucursales_list'              => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Empresa', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresa_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addEmpresasListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.OficinaPrincipalSucursal OficinaPrincipalSucursal')
      ->andWhereIn('OficinaPrincipalSucursal.oficina_principal_id', $values)
    ;
  }

  public function addSucursalesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.OficinaPrincipalSucursal OficinaPrincipalSucursal')
      ->andWhereIn('OficinaPrincipalSucursal.sucursal_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'Empresa';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'razon_social'                 => 'Text',
      'sigla'                        => 'Text',
      'tipo_constitucion_empresa_id' => 'ForeignKey',
      'fecha_constitucion'           => 'Date',
      'fecha_inicio_actividades'     => 'Date',
      'numero_doc_constitucion'      => 'Text',
      'fecha_doc_constitucion'       => 'Date',
      'actividad_economica_id'       => 'ForeignKey',
      'nit'                          => 'Text',
      'tipo_dependencia'             => 'Enum',
      'web'                          => 'Text',
      'is_active'                    => 'Boolean',
      'user_id'                      => 'ForeignKey',
      'created_at'                   => 'Date',
      'updated_at'                   => 'Date',
      'created_by'                   => 'ForeignKey',
      'updated_by'                   => 'ForeignKey',
      'empresas_list'                => 'ManyKey',
      'sucursales_list'              => 'ManyKey',
    );
  }
}
