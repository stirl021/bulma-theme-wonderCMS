<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $Wcms->pageTitle(); ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <?php echo $Wcms->css(); ?>
</head>
<body>

  <section class="section">
    <div class="container">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-menu">
          <div class="navbar-start">
            <?php echo $Wcms->menu(); ?>
          </div>
        </div>
      </nav>

      <h1 class="title"><?php echo $Wcms->pageTitle(); ?></h1>
      <div class="content">
        <?php echo $Wcms->page(); ?>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="content has-text-centered">
      <?php echo $Wcms->footer(); ?>
    </div>
  </footer>

  <?php echo $Wcms->js(); ?>
</body>
</html>