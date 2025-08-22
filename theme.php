<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title><?php echo $Wcms->page('title'); ?> - <?php echo $Wcms->get('config', 'siteTitle'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bulma CSS z CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="<?php echo $Wcms->asset('themes/bulma/style.css'); ?>">
    <?php echo $Wcms->css(); ?>
</head>
<body>
    <section class="section">
        <div class="container">
            <header class="has-text-centered">
                <h1 class="title"><?php echo $Wcms->get('config', 'siteTitle'); ?></h1>
                <nav class="navbar is-centered" role="navigation">
                    <div class="navbar-menu is-active">
                        <div class="navbar-start">
                            <?php echo $Wcms->menu(); ?>
                        </div>
                    </div>
                </nav>
            </header>

            <main class="box mt-5">
                <?php echo $Wcms->page('content'); ?>
            </main>

            <footer class="footer has-text-centered mt-5">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $Wcms->get('config', 'siteTitle'); ?></p>
            </footer>
        </div>
    </section>
    <?php echo $Wcms->js(); ?>
</body>
</html>

