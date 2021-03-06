<?php

/**
 * BasePersona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $foto
 * @property string $nombres
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property integer $pais_origen_id
 * @property string $num_documento_identidad
 * @property integer $expedido_id
 * @property enum $tipo_documento_identidad
 * @property date $fecha_nacimiento
 * @property date $fecha_fallecimiento
 * @property integer $lugar_nacimiento_id
 * @property enum $sexo
 * @property integer $direccion_localidad_id
 * @property string $zona
 * @property string $direccion
 * @property string $direccion_numero
 * @property string $email
 * @property string $telefono
 * @property string $celular
 * @property boolean $fallecido
 * @property Pais $Pais
 * @property Departamento $Expedido
 * @property Localidad $LugarNacimiento
 * @property Localidad $DireccionLocalidad
 * @property Doctrine_Collection $RepresentanteLegal
 * 
 * @method string              getFoto()                     Returns the current record's "foto" value
 * @method string              getNombres()                  Returns the current record's "nombres" value
 * @method string              getApPaterno()                Returns the current record's "ap_paterno" value
 * @method string              getApMaterno()                Returns the current record's "ap_materno" value
 * @method integer             getPaisOrigenId()             Returns the current record's "pais_origen_id" value
 * @method string              getNumDocumentoIdentidad()    Returns the current record's "num_documento_identidad" value
 * @method integer             getExpedidoId()               Returns the current record's "expedido_id" value
 * @method enum                getTipoDocumentoIdentidad()   Returns the current record's "tipo_documento_identidad" value
 * @method date                getFechaNacimiento()          Returns the current record's "fecha_nacimiento" value
 * @method date                getFechaFallecimiento()       Returns the current record's "fecha_fallecimiento" value
 * @method integer             getLugarNacimientoId()        Returns the current record's "lugar_nacimiento_id" value
 * @method enum                getSexo()                     Returns the current record's "sexo" value
 * @method integer             getDireccionLocalidadId()     Returns the current record's "direccion_localidad_id" value
 * @method string              getZona()                     Returns the current record's "zona" value
 * @method string              getDireccion()                Returns the current record's "direccion" value
 * @method string              getDireccionNumero()          Returns the current record's "direccion_numero" value
 * @method string              getEmail()                    Returns the current record's "email" value
 * @method string              getTelefono()                 Returns the current record's "telefono" value
 * @method string              getCelular()                  Returns the current record's "celular" value
 * @method boolean             getFallecido()                Returns the current record's "fallecido" value
 * @method Pais                getPais()                     Returns the current record's "Pais" value
 * @method Departamento        getExpedido()                 Returns the current record's "Expedido" value
 * @method Localidad           getLugarNacimiento()          Returns the current record's "LugarNacimiento" value
 * @method Localidad           getDireccionLocalidad()       Returns the current record's "DireccionLocalidad" value
 * @method Doctrine_Collection getRepresentanteLegal()       Returns the current record's "RepresentanteLegal" collection
 * @method Persona             setFoto()                     Sets the current record's "foto" value
 * @method Persona             setNombres()                  Sets the current record's "nombres" value
 * @method Persona             setApPaterno()                Sets the current record's "ap_paterno" value
 * @method Persona             setApMaterno()                Sets the current record's "ap_materno" value
 * @method Persona             setPaisOrigenId()             Sets the current record's "pais_origen_id" value
 * @method Persona             setNumDocumentoIdentidad()    Sets the current record's "num_documento_identidad" value
 * @method Persona             setExpedidoId()               Sets the current record's "expedido_id" value
 * @method Persona             setTipoDocumentoIdentidad()   Sets the current record's "tipo_documento_identidad" value
 * @method Persona             setFechaNacimiento()          Sets the current record's "fecha_nacimiento" value
 * @method Persona             setFechaFallecimiento()       Sets the current record's "fecha_fallecimiento" value
 * @method Persona             setLugarNacimientoId()        Sets the current record's "lugar_nacimiento_id" value
 * @method Persona             setSexo()                     Sets the current record's "sexo" value
 * @method Persona             setDireccionLocalidadId()     Sets the current record's "direccion_localidad_id" value
 * @method Persona             setZona()                     Sets the current record's "zona" value
 * @method Persona             setDireccion()                Sets the current record's "direccion" value
 * @method Persona             setDireccionNumero()          Sets the current record's "direccion_numero" value
 * @method Persona             setEmail()                    Sets the current record's "email" value
 * @method Persona             setTelefono()                 Sets the current record's "telefono" value
 * @method Persona             setCelular()                  Sets the current record's "celular" value
 * @method Persona             setFallecido()                Sets the current record's "fallecido" value
 * @method Persona             setPais()                     Sets the current record's "Pais" value
 * @method Persona             setExpedido()                 Sets the current record's "Expedido" value
 * @method Persona             setLugarNacimiento()          Sets the current record's "LugarNacimiento" value
 * @method Persona             setDireccionLocalidad()       Sets the current record's "DireccionLocalidad" value
 * @method Persona             setRepresentanteLegal()       Sets the current record's "RepresentanteLegal" collection
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePersona extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('persona');
        $this->hasColumn('foto', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('nombres', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('ap_paterno', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('ap_materno', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('pais_origen_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('num_documento_identidad', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('expedido_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('tipo_documento_identidad', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'CI',
              1 => 'DNI',
              2 => 'PASAPORTE',
             ),
             'notnull' => false,
             ));
        $this->hasColumn('fecha_nacimiento', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('fecha_fallecimiento', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('lugar_nacimiento_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sexo', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'M',
              1 => 'F',
             ),
             ));
        $this->hasColumn('direccion_localidad_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('zona', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('direccion', 'string', 250, array(
             'type' => 'string',
             'length' => 250,
             ));
        $this->hasColumn('direccion_numero', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('telefono', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('celular', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('fallecido', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Pais', array(
             'local' => 'pais_origen_id',
             'foreign' => 'id'));

        $this->hasOne('Departamento as Expedido', array(
             'local' => 'expedido_id',
             'foreign' => 'id'));

        $this->hasOne('Localidad as LugarNacimiento', array(
             'local' => 'lugar_nacimiento_id',
             'foreign' => 'id'));

        $this->hasOne('Localidad as DireccionLocalidad', array(
             'local' => 'direccion_localidad_id',
             'foreign' => 'id'));

        $this->hasMany('RepresentanteLegal', array(
             'local' => 'id',
             'foreign' => 'persona_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($signable0);
    }
}