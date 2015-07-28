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
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/css/sticky-footer-navbar.css" />
    <?php include_javascripts() ?>
  </head>
  
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="...">
            </a>

            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Rolando Cadima</a></p>
            <button type="button" class="btn btn-default navbar-btn">Sign in</button>

          </div>
        </div>
      </nav>
    </header>
      
      <?php if ($sf_user->hasFlash('notice')): ?>
        <div class="flash_notice">
          <?php echo $sf_user->getFlash('notice') ?>
        </div>
      <?php endif; ?>

      <?php if ($sf_user->hasFlash('error')): ?>
        <div class="flash_error">
          <?php echo $sf_user->getFlash('error') ?>
        </div>
      <?php endif; ?>
      
      <h1>Hello, world!</h1>
    
      <?php echo $sf_content ?>
    
    <footer>
      <div class="footer">
        <div class="container">
          <p class="text-muted">Place sticky footer content here.</p>
        </div>
      </div>
    </footer>
  </body>
</html>