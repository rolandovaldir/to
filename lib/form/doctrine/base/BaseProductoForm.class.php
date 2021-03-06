<?php

/**
 * Producto form base class.
 *
 * @method Producto getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProductoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'nota_venta_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('NotaVenta'), 'add_empty' => true)),
      'codigo'               => new sfWidgetFormInputText(),
      'nombre'               => new sfWidgetFormInputText(),
      'modelo'               => new sfWidgetFormInputText(),
      'marca'                => new sfWidgetFormInputText(),
      'detalle'              => new sfWidgetFormInputText(),
      'costo'                => new sfWidgetFormInputText(),
      'clasificacion_id'     => new sfWidgetFormInputText(),
      'sub_clasificacion_id' => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nota_venta_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('NotaVenta'), 'required' => false)),
      'codigo'               => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'nombre'               => new sfValidatorString(array('max_length' => 250)),
      'modelo'               => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'marca'                => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'detalle'              => new sfValidatorString(array('max_length' => 250, 'required' => false)),
      'costo'                => new sfValidatorInteger(),
      'clasificacion_id'     => new sfValidatorInteger(),
      'sub_clasificacion_id' => new sfValidatorInteger(),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('producto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Producto';
  }

}
