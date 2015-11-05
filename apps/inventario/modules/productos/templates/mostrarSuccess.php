<?php use_helper('Date') ?>

<?php if ($sf_user->hasFlash('paso_correcto')): ?>
    <div role="alert" class="alert alert-success">
        <i class="fa fa-check"></i> <?php echo $sf_user->getFlash('paso_correcto') ?>
    </div>
<?php endif ?>