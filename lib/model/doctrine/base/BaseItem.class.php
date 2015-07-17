<?php

/**
 * BaseItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $factura_id
 * @property string $detalle
 * @property integer $precio_unitario
 * @property integer $cantidad
 * @property Factura $Factura
 * 
 * @method integer getFacturaId()       Returns the current record's "factura_id" value
 * @method string  getDetalle()         Returns the current record's "detalle" value
 * @method integer getPrecioUnitario()  Returns the current record's "precio_unitario" value
 * @method integer getCantidad()        Returns the current record's "cantidad" value
 * @method Factura getFactura()         Returns the current record's "Factura" value
 * @method Item    setFacturaId()       Sets the current record's "factura_id" value
 * @method Item    setDetalle()         Sets the current record's "detalle" value
 * @method Item    setPrecioUnitario()  Sets the current record's "precio_unitario" value
 * @method Item    setCantidad()        Sets the current record's "cantidad" value
 * @method Item    setFactura()         Sets the current record's "Factura" value
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('item');
        $this->hasColumn('factura_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('detalle', 'string', 250, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 250,
             ));
        $this->hasColumn('precio_unitario', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('cantidad', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Factura', array(
             'local' => 'factura_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}