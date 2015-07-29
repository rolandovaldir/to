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
    
    $this->widgetSchema['foto'] = new sfWidgetFormInputFileEditable(
        array('label'       => 'Foto producto',
             'is_image'     => true,
             'edit_mode'    => !$this->isNew(),
             'delete_label' => 'Borrar foto actual',
             'with_delete'  => false,
             'file_src'     => '/uploads/fotos_productos/'.$this->getObject()->getFoto(),
            ));
    $this->widgetSchema->setHelp('foto', 'El Tamaño maximo de la imagen debe ser de 2MB ');
    
    $this->validatorSchema['foto'] = new sfValidatorFile(
        array('required'         => true,
             'max_size'         => '2000000',
             'mime_types'       => 'web_images',
             'path'             => sfConfig::get('sf_upload_dir').'/fotos_productos',
             'validated_file_class' => 'sfValidatedFileCustom'),
             array('invalid'    => 'Archivo Invalido.',
                   'required'   => 'Seleccione un archivo para cargar.',
                   'mime_types' => 'El archivo debe ser una imagen en formato JPEG, PNG o GIF.'));
    
    $this->validatorSchema['foto_delete'] = new sfValidatorBoolean();
    $this->validatorSchema['foto']->setOption('required', true);
  }
}
