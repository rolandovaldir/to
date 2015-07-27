<?php

/**
 * OficinaPrincipalSucursal form base class.
 *
 * @method OficinaPrincipalSucursal getObject() Returns the current form's model object
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOficinaPrincipalSucursalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'oficina_principal_id' => new sfWidgetFormInputHidden(),
      'sucursal_id'          => new sfWidgetFormInputHidden(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'oficina_principal_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('oficina_principal_id')), 'empty_value' => $this->getObject()->get('oficina_principal_id'), 'required' => false)),
      'sucursal_id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('sucursal_id')), 'empty_value' => $this->getObject()->get('sucursal_id'), 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Creator'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Updator'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('oficina_principal_sucursal[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OficinaPrincipalSucursal';
  }

}
