<?php

require_once dirname(__FILE__).'/../lib/productosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/productosGeneratorHelper.class.php';

/**
 * productos actions.
 *
 * @package    takeoff
 * @subpackage productos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productosActions extends autoProductosActions
{
  public function executeMostrar(sfWebRequest $request)
  {
      $this->producto = $this->getRoute()->getObject();        
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
          $cantidad = $form->getValue('cantidad');
          $producto = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
            $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $producto)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@producto_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->getUser()->setFlash('paso_correcto', ' La acción fue realizada correctamente.');
        $this->redirect('productos/mostrar?id=' . $producto->getId());
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }
}
