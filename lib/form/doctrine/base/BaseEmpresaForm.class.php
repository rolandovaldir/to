<?php

/**
 * Empresa form base class.
 *
 * @method Empresa getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpresaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'razon_social'                 => new sfWidgetFormTextarea(),
      'sigla'                        => new sfWidgetFormInputText(),
      'tipo_constitucion_empresa_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TipoConstitucionEmpresa'), 'add_empty' => false)),
      'fecha_constitucion'           => new sfWidgetFormDate(),
      'fecha_inicio_actividades'     => new sfWidgetFormDate(),
      'numero_doc_constitucion'      => new sfWidgetFormInputText(),
      'fecha_doc_constitucion'       => new sfWidgetFormDate(),
      'actividad_economica_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ActividadEconomica'), 'add_empty' => false)),
      'nit'                          => new sfWidgetFormInputText(),
      'tipo_dependencia'             => new sfWidgetFormChoice(array('choices' => array('OFICINA PRINCIPAL' => 'OFICINA PRINCIPAL', 'SUCURSAL' => 'SUCURSAL'))),
      'web'                          => new sfWidgetFormInputText(),
      'is_active'                    => new sfWidgetFormInputCheckbox(),
      'user_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => false)),
      'created_at'                   => new sfWidgetFormDateTime(),
      'updated_at'                   => new sfWidgetFormDateTime(),
      'created_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
      'empresas_list'                => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Empresa')),
      'sucursales_list'              => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Empresa')),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'razon_social'                 => new sfValidatorString(array('max_length' => 500)),
      'sigla'                        => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'tipo_constitucion_empresa_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TipoConstitucionEmpresa'))),
      'fecha_constitucion'           => new sfValidatorDate(array('required' => false)),
      'fecha_inicio_actividades'     => new sfValidatorDate(array('required' => false)),
      'numero_doc_constitucion'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha_doc_constitucion'       => new sfValidatorDate(array('required' => false)),
      'actividad_economica_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ActividadEconomica'))),
      'nit'                          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tipo_dependencia'             => new sfValidatorChoice(array('choices' => array(0 => 'OFICINA PRINCIPAL', 1 => 'SUCURSAL'))),
      'web'                          => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'is_active'                    => new sfValidatorBoolean(array('required' => false)),
      'user_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'))),
      'created_at'                   => new sfValidatorDateTime(),
      'updated_at'                   => new sfValidatorDateTime(),
      'created_by'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
      'empresas_list'                => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Empresa', 'required' => false)),
      'sucursales_list'              => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Empresa', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresa[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empresa';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['empresas_list']))
    {
      $this->setDefault('empresas_list', $this->object->Empresas->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['sucursales_list']))
    {
      $this->setDefault('sucursales_list', $this->object->Sucursales->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveEmpresasList($con);
    $this->saveSucursalesList($con);

    parent::doSave($con);
  }

  public function saveEmpresasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['empresas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Empresas->getPrimaryKeys();
    $values = $this->getValue('empresas_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Empresas', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Empresas', array_values($link));
    }
  }

  public function saveSucursalesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sucursales_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Sucursales->getPrimaryKeys();
    $values = $this->getValue('sucursales_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Sucursales', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Sucursales', array_values($link));
    }
  }

}
