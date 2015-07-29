<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@producto') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>
    <div class="row">
      <div class="col-lg-3">
        <img src="/images/registrando.jpg" alt="Productos">
      </div>
      <div class="col-lg-6 jumbotron">
        <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
          <?php include_partial('productos/form_fieldset', array('producto' => $producto, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
        <?php endforeach; ?>
      </div>
      <div class="col-lg-3">
        <?php include_partial('productos/form_actions', array('producto' => $producto, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
      </div>
    </div>
  </form>
</div>
