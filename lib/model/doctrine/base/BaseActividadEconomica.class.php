<?php

/**
 * BaseActividadEconomica
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nombre
 * @property string $codigo
 * @property Doctrine_Collection $Empresas
 * 
 * @method string              getNombre()   Returns the current record's "nombre" value
 * @method string              getCodigo()   Returns the current record's "codigo" value
 * @method Doctrine_Collection getEmpresas() Returns the current record's "Empresas" collection
 * @method ActividadEconomica  setNombre()   Sets the current record's "nombre" value
 * @method ActividadEconomica  setCodigo()   Sets the current record's "codigo" value
 * @method ActividadEconomica  setEmpresas() Sets the current record's "Empresas" collection
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseActividadEconomica extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('actividad_economica');
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('codigo', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Empresa as Empresas', array(
             'local' => 'id',
             'foreign' => 'actividad_economica_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}