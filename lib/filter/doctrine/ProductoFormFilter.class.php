<?php

/**
 * Producto filter form.
 *
 * @package    takeoff
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoFormFilter extends BaseProductoFormFilter
{
  public function configure()
  {
    $this->widgetSchema['codigo'] = new sfWidgetFormFilterInput(
        array('with_empty' => false));
    $this->widgetSchema['modelo'] = new sfWidgetFormFilterInput(
        array('with_empty' => false));
    $this->widgetSchema['marca'] = new sfWidgetFormFilterInput(
        array('with_empty' => false));
  }
}
