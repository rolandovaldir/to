<?php

/**
 * Producto form.
 *
 * @package    takeoff
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoForm extends BaseProductoForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    unset($this['created_by'], $this['updated_by']);
    unset($this['nota_venta_id']);
    
    $this->widgetSchema['cantidad'] = new sfWidgetFormInput();
    $this->validatorSchema['cantidad'] = new sfValidatorInteger();
    
    $this->widgetSchema['foto'] = new sfWidgetFormInputFileEditable(
        array('label'       => 'Foto del producto',
             'is_image'     => true,
             'edit_mode'    => !$this->isNew(),
             'delete_label' => 'Borrar foto actual',
             'with_delete'  => false,
             'file_src'     => '/uploads/fotos_productos/'.$this->getObject()->getFoto(),
            ));
    $this->widgetSchema->setHelp('foto', 'El Tamaño maximo de la imagen debe ser de 2MB ');
    
      $this->validatorSchema['foto'] = new sfValidatorFile(
          array('required'         => false,
               'max_size'         => '2000000',
               'mime_types'       => 'web_images',
               'path'             => sfConfig::get('sf_upload_dir').'/fotos_productos',
               'validated_file_class' => 'sfValidatedFileCustom'),
               array('invalid'    => 'Archivo Invalido.',
                     'required'   => 'Seleccione un archivo para cargar.',
                     'mime_types' => 'El archivo debe ser una imagen en formato JPEG, PNG o GIF.'));
    
    $this->validatorSchema['foto_delete'] = new sfValidatorBoolean();

    $this->widgetSchema['clasificacion_id'] = new sfWidgetFormDoctrineChoice(
        array('model'     => 'Clasificacion',
              'add_empty' => '-- Seleccione una clasificación --',
              'order_by'  => array('nombre', 'asc')));
    
    $this->validatorSchema['clasificacion_id'] = new sfValidatorDoctrineChoice(
        array('model' => 'Clasificacion', 'required' => true));
    
    $this->widgetSchema['sub_clasificacion_id'] = new sfWidgetFormDoctrineDependentSelect(
        array('model'     => 'SubClasificacion',
              'depends'   => 'Clasificacion',
              'add_empty' => '-- Seleccione una subclasificación --'));
    
    $this->validatorSchema['sub_clasificacion_id'] = new sfValidatorDoctrineChoice(
        array('model' => 'SubClasificacion', 'required' => true));
        
    $this->validatorSchema->setPostValidator(new sfValidatorCallback(
        array('callback' => array($this, 'checkFotoProducto'))));
  }
  
  public function doSave($con = null)
  {
    // Si hay un nuevo archivo por subir y ya mi registro tiene una imagen asociado entonces elimino la actual
    if($this->getObject()->getFoto() != Null) 
    {
      $filename = $this->getObject()->getFoto();
      $filesystem = new sfFilesystem();
      $filesystem->remove($filename);     
    }
    return parent::doSave($con);
  }
  
  public function checkFotoProducto($validator, $values)
  {
    if ($this->isNew() && $values['foto'] == NULL)
    {
      $error = new sfValidatorError($validator, 'El producto debe tener una foto. ');
      throw new sfValidatorErrorSchema($validator, array('foto' => $error));
    }
    
    return $values;
  }
}
