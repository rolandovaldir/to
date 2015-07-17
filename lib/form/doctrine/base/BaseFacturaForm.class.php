<?php

/**
 * Factura form base class.
 *
 * @method Factura getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFacturaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'razon_social'        => new sfWidgetFormInputText(),
      'nit'                 => new sfWidgetFormInputText(),
      'numero'              => new sfWidgetFormInputText(),
      'numero_autorizacion' => new sfWidgetFormInputText(),
      'fecha'               => new sfWidgetFormDate(),
      'importe_total'       => new sfWidgetFormInputText(),
      'codigo_control'      => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'razon_social'        => new sfValidatorString(array('max_length' => 250)),
      'nit'                 => new sfValidatorString(array('max_length' => 12)),
      'numero'              => new sfValidatorInteger(),
      'numero_autorizacion' => new sfValidatorInteger(),
      'fecha'               => new sfValidatorDate(),
      'importe_total'       => new sfValidatorInteger(array('required' => false)),
      'codigo_control'      => new sfValidatorString(array('max_length' => 250)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('factura[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }

}
