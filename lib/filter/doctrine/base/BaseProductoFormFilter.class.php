<?php

/**
 * Producto filter form base class.
 *
 * @package    takeoff
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nota_venta_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NotaVenta'), 'add_empty' => true)),
      'codigo'               => new sfWidgetFormFilterInput(),
      'nombre'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'modelo'               => new sfWidgetFormFilterInput(),
      'marca'                => new sfWidgetFormFilterInput(),
      'detalle'              => new sfWidgetFormFilterInput(),
      'costo'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clasificacion_id'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sub_clasificacion_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nota_venta_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('NotaVenta'), 'column' => 'id')),
      'codigo'               => new sfValidatorPass(array('required' => false)),
      'nombre'               => new sfValidatorPass(array('required' => false)),
      'modelo'               => new sfValidatorPass(array('required' => false)),
      'marca'                => new sfValidatorPass(array('required' => false)),
      'detalle'              => new sfValidatorPass(array('required' => false)),
      'costo'                => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'clasificacion_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sub_clasificacion_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Creator'), 'column' => 'id')),
      'updated_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Updator'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('producto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'nota_venta_id'        => 'ForeignKey',
      'codigo'               => 'Text',
      'nombre'               => 'Text',
      'modelo'               => 'Text',
      'marca'                => 'Text',
      'detalle'              => 'Text',
      'costo'                => 'Number',
      'clasificacion_id'     => 'Number',
      'sub_clasificacion_id' => 'Number',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'created_by'           => 'ForeignKey',
      'updated_by'           => 'ForeignKey',
    );
  }
}
