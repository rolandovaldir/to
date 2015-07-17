<?php

/**
 * Factura filter form base class.
 *
 * @package    takeoff
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFacturaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'razon_social'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nit'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_autorizacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'importe_total'       => new sfWidgetFormFilterInput(),
      'codigo_control'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'razon_social'        => new sfValidatorPass(array('required' => false)),
      'nit'                 => new sfValidatorPass(array('required' => false)),
      'numero'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'numero_autorizacion' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'importe_total'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'codigo_control'      => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('factura_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'razon_social'        => 'Text',
      'nit'                 => 'Text',
      'numero'              => 'Number',
      'numero_autorizacion' => 'Number',
      'fecha'               => 'Date',
      'importe_total'       => 'Number',
      'codigo_control'      => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
