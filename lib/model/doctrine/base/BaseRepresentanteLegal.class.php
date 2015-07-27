<?php

/**
 * BaseRepresentanteLegal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $persona_id
 * @property integer $empresa_id
 * @property string $num_testimonio_poder
 * @property date $fecha_testimonio_poder
 * @property boolean $is_active
 * @property Persona $Persona
 * @property Empresa $Empresa
 * 
 * @method integer            getPersonaId()              Returns the current record's "persona_id" value
 * @method integer            getEmpresaId()              Returns the current record's "empresa_id" value
 * @method string             getNumTestimonioPoder()     Returns the current record's "num_testimonio_poder" value
 * @method date               getFechaTestimonioPoder()   Returns the current record's "fecha_testimonio_poder" value
 * @method boolean            getIsActive()               Returns the current record's "is_active" value
 * @method Persona            getPersona()                Returns the current record's "Persona" value
 * @method Empresa            getEmpresa()                Returns the current record's "Empresa" value
 * @method RepresentanteLegal setPersonaId()              Sets the current record's "persona_id" value
 * @method RepresentanteLegal setEmpresaId()              Sets the current record's "empresa_id" value
 * @method RepresentanteLegal setNumTestimonioPoder()     Sets the current record's "num_testimonio_poder" value
 * @method RepresentanteLegal setFechaTestimonioPoder()   Sets the current record's "fecha_testimonio_poder" value
 * @method RepresentanteLegal setIsActive()               Sets the current record's "is_active" value
 * @method RepresentanteLegal setPersona()                Sets the current record's "Persona" value
 * @method RepresentanteLegal setEmpresa()                Sets the current record's "Empresa" value
 * 
 * @package    takeoff
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRepresentanteLegal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('representante_legal');
        $this->hasColumn('persona_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('empresa_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('num_testimonio_poder', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('fecha_testimonio_poder', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Persona', array(
             'local' => 'persona_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Empresa', array(
             'local' => 'empresa_id',
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