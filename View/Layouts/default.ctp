<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo Configure::read('Site.title') . ' | ' .$title_for_layout ;?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $this->element('seo')?>
    <link href="<?php echo $this->Html->url('/icon/favicon.ico');?>" type="image/x-icon" rel="icon" />
    <link href="<?php echo $this->Html->url('/icon/favicon.ico');?>" type="image/x-icon" rel="shortcut icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->Html->url('/icon/apple-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->Html->url('/icon/apple-icon-60x60.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->Html->url('/icon/apple-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->Html->url('/icon/apple-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->Html->url('/icon/apple-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->Html->url('/icon/apple-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $this->Html->url('/icon/apple-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->Html->url('/icon/apple-icon-152x152.png');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->Html->url('/icon/apple-icon-180x180.png');?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $this->Html->url('/icon/android-icon-192x192.png');?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->Html->url('/icon/favicon-32x32.png');?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $this->Html->url('/icon/favicon-96x96.png');?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->Html->url('/icon/favicon-16x16.png');?>">
    <link rel="manifest" href="<?php echo $this->Html->url('/icon/manifest.json');?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $this->Html->url('/icon/ms-icon-144x144.png');?>">
    <meta name="theme-color" content="#ffffff">
    <?php
    echo $this->fetch('meta');
    echo $this->Html->css(array('bootstrap.min', 'jquery.smartmenus.bootstrap', 'bexinh.core'));
    echo $this->fetch('css');
    ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

    <script>
        var slide = "<?php echo $this->Html->url(
            array(
                'controller' => 'pages',
                'action' => 'promotes',
            )
        );?>";
    </script>
</head>

<body>
<?php echo $this->element('facebook');?>
<header>
    <?php echo $this->element('header') ?>
</header>
<div class="container" id="main">
<!--    <div class="container" id="sub-main">-->
<!--        <div class="row women-in">-->
<!--            <div class="col-md-9">-->
    <div class="row">
                <?php echo $this->element('slide'); ?>
    </div>
    <div class="row">
        <?php echo $this->fetch('content') ?>
    </div>

<!--            </div>-->
<!--            <div class="col-md-3">-->
                <?php //echo $this->element('sidebar')?>
<!--            </div>-->
<!--        </div>-->

<!--    </div>-->
</div>
<footer>
 <?php echo $this->element('footer');?>
</footer>
<script>
    var cartUrl = '<?php echo $this->Html->url(array(
        'controller' => 'pages',
        'action' => 'cart'
    ))?>';
</script>
<?php
echo $this->Html->script(array('jquery-2.1.1.min', 'bootstrap', 'jquery.smartmenus', 'jquery.smartmenus.bootstrap', 'action'));
echo $this->fetch('script');
?>
</body>
</html>
