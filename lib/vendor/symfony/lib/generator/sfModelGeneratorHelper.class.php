<?php

/**
 * Model generator helper.
 *
 * @package    symfony
 * @subpackage generator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfModelGeneratorHelper.class.php 22914 2009-10-10 12:24:29Z Kris.Wallsmith $
 */
abstract class sfModelGeneratorHelper
{
  abstract public function getUrlForAction($action);

  public function linkToNew($params)
  {
    return '<li class="sf_admin_action_new">'.link_to('<i class="fa fa-plus"></i> ' . __($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), array('class' => 'btn btn-large btn-default')).'</li>';
  }

  public function linkToEdit($object, $params)
  {
    return '<li class="sf_admin_action_edit">'.link_to('<i class="fa fa-pencil fa-fw"></i> ' . __($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class' => 'btn btn-large btn-default')).'</li>';
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return '<li>'.link_to(__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'])).'</li>';
  }

  public function linkToList($params)
  {
    return '<li class="sf_admin_action_list">'.link_to('<i class="glyphicon glyphicon-circle-arrow-left"></i> ' .__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('list'), array('class' => 'btn btn-large btn-default')).'</li>';
  }

  /*public function linkToSave($object, $params)
  {
    return '<li class="sf_admin_action_save"><input class="btn btn-large btn-success" type="submit" value="'.__($params['label'], array(), 'sf_admin').'" /></li>';
  }*/
  
  public function linkToSave($object, $params)
  {
      return '<li class="sf_admin_action_save">
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-check"></i> Guardar
                </button>
              </li>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<li class="sf_admin_action_save_and_add"><input class="btn btn-success" type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" /></li>';
  }
}
