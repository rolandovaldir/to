<?php

/**
 * FacturaCompra form base class.
 *
 * @method FacturaCompra getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFacturaCompraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'razon_social'        => new sfWidgetFormInputText(),
      'nit'                 => new sfWidgetFormInputText(),
      'numero'              => new sfWidgetFormInputText(),
      'numero_autorizacion' => new sfWidgetFormInputText(),
      'codigo_control'      => new sfWidgetFormInputText(),
      'fecha'               => new sfWidgetFormDate(),
      'importe_total'       => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'created_by'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'razon_social'        => new sfValidatorString(array('max_length' => 250)),
      'nit'                 => new sfValidatorString(array('max_length' => 12)),
      'numero'              => new sfValidatorInteger(),
      'numero_autorizacion' => new sfValidatorInteger(),
      'codigo_control'      => new sfValidatorString(array('max_length' => 250)),
      'fecha'               => new sfValidatorDate(),
      'importe_total'       => new sfValidatorInteger(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
      'created_by'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('factura_compra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'FacturaCompra';
  }

}
