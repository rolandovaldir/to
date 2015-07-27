<?php

/**
 * BaseFacturaVenta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $numero
 * @property integer $numero_autorizacion
 * @property date $fecha
 * @property Empresa $Empresa
 * @property Doctrine_Collection $Item
 * 
 * @method integer             getNumero()              Returns the current record's "numero" value
 * @method integer             getNumeroAutorizacion()  Returns the current record's "numero_autorizacion" value
 * @method date                getFecha()               Returns the current record's "fecha" value
 * @method Empresa             getEmpresa()             Returns the current record's "Empresa" value
 * @method Doctrine_Collection getItem()                Returns the current record's "Item" collection
 * @method FacturaVenta        setNumero()              Sets the current record's "numero" value
 * @method FacturaVenta        setNumeroAutorizacion()  Sets the current record's "numero_autorizacion" value
 * @method FacturaVenta        setFecha()               Sets the current record's "fecha" value
 * @method FacturaVenta        setEmpresa()             Sets the current record's "Empresa" value
 * @method FacturaVenta        setItem()                Sets the current record's "Item" collection
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFacturaVenta extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('factura_venta');
        $this->hasColumn('numero', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('numero_autorizacion', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('fecha', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresa', array(
             'local' => 'id',
             'foreign' => 'empresa_id'));

        $this->hasMany('Item', array(
             'local' => 'id',
             'foreign' => 'factura_venta_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}