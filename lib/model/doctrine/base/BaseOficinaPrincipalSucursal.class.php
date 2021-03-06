<?php

/**
 * BaseOficinaPrincipalSucursal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $oficina_principal_id
 * @property integer $sucursal_id
 * @property Empresa $OficinaPrincipal
 * @property Empresa $Sucursal
 * 
 * @method integer                  getOficinaPrincipalId()   Returns the current record's "oficina_principal_id" value
 * @method integer                  getSucursalId()           Returns the current record's "sucursal_id" value
 * @method Empresa                  getOficinaPrincipal()     Returns the current record's "OficinaPrincipal" value
 * @method Empresa                  getSucursal()             Returns the current record's "Sucursal" value
 * @method OficinaPrincipalSucursal setOficinaPrincipalId()   Sets the current record's "oficina_principal_id" value
 * @method OficinaPrincipalSucursal setSucursalId()           Sets the current record's "sucursal_id" value
 * @method OficinaPrincipalSucursal setOficinaPrincipal()     Sets the current record's "OficinaPrincipal" value
 * @method OficinaPrincipalSucursal setSucursal()             Sets the current record's "Sucursal" value
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOficinaPrincipalSucursal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('oficina_principal_sucursal');
        $this->hasColumn('oficina_principal_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('sucursal_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Empresa as OficinaPrincipal', array(
             'local' => 'oficina_principal_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Empresa as Sucursal', array(
             'local' => 'sucursal_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}