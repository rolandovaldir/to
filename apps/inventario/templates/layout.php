<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php if (!include_slot('title')): ?>
          TakeOff - Inventario
        <?php endif ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_stylesheets() ?>
        <link rel="stylesheet" href="/css/bootstrap.css" />
        <link rel="stylesheet" href="/css/sticky-footer-navbar.css" />
    <?php include_javascripts() ?>
  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo url_for('@homepage') ?>">
              <img alt="TakeOff" src="...">
            </a>

            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Rolando Cadima</a></p>
            <button type="button" class="btn btn-default navbar-btn">Sign in</button>

          </div>
        </div>
      </nav>
    </header>
    
    <div class="container">
      <div class="col-md-11 panel-central">
        <?php echo $sf_content ?>
      </div>
    </div>
    <div class="footer">
      <div class="container">
        <p class="text-muted">TakeOff - Soluciones Tecnológicas.</p>
      </div>
    </div>
  </body>
</html>