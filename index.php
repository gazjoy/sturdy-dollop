<?php require_once('inc/functions.php'); ?>
<?php $paths = explode("/", substr($_SERVER['REQUEST_URI'], 1));?>
<!DOCTYPE HTML>
<html>
<head>
<?php require_once('inc/meta.php'); ?>
<title>Chop Chop - Little user interface patterns to get us going</title>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-57x57.png'); ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-60x60.png'); ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-72x72.png'); ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-76x76.png'); ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-114x114.png'); ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-120x120.png'); ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-144x144.png'); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-152x152.png'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo getUrl('src/img/favicons/apple-touch-icon-180x180.png'); ?>">
<link rel="icon" type="image/png" href="<?php echo getUrl('src/img/favicons/favicon-32x32.png'); ?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo getUrl('src/img/favicons/favicon-194x194.png'); ?>" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo getUrl('src/img/favicons/favicon-96x96.png'); ?>" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo getUrl('src/img/favicons/android-chrome-192x192.png'); ?>" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo getUrl('src/img/favicons/favicon-16x16.png'); ?>" sizes="16x16">
<link rel="manifest" href="<?php echo getUrl('src/img/favicons/manifest.json'); ?>">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="<?php echo getUrl('src/img/favicons/mstile-144x144.png'); ?>">
<meta name="theme-color" content="#ffffff">
<?php include('inc/styles.php'); ?>
</head>
<body>

    <div class="site-wrapper">
        

        <nav class="site-navigation">
            <div class="block-content site-navigation__content">
                <?php include('inc/nav.php'); ?>
            </div>
            <a href="#" class="site-navigation__toggle js-toggle-nav">Toggle Nav</a>
        </nav>
        
        <!-- <main class="main site-main"> -->
        <main>
            <div class="site-content">

             <?php if(isIndex()) { ?>
                     index
                 <?php } else {
                     echo getBlock(getRequestPath());
                }?>


            </div>

        </main>

    </div><!--/#wrapper -->

    <?php include('inc/scripts.php'); ?>

</body>
</html>
