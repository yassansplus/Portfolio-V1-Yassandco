
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108423337-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108423337-1');
</script>

<link rel="icon" type="image/png" href="<?php   echo base_url(); ?>assets/images/logo.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php   echo  $metadescription; ?>">
    <meta name="author" content="Yassine Bousaidi">

    <title>Portfolio bts sio slam | Yassine <?php    echo $title; ?></title>

    <!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?php echo url_js('jquery/jquery.min'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php echo url_css('cssboots/bootstrap.min'); ?>
    <?php echo  url_css('modern-business'); 
          echo url_css('animate')
    ?>
    <?php echo url_css('general'); ?>

    <!-- Custom styles for this template -->


</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand type-it" href="<?php echo base_url(); ?>"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Présentation
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

                        <a class="dropdown-item" href="<?php echo base_url(); ?>">Apprenti</a>
                        <a class="dropdown-item" href="<?php echo base_url().'entreprise'; ?>">Entreprise</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url().'Realisation/' ?>">Réalisation</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url().'Epreuve/E6'; ?>">Épreuve E6</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url().'Epreuve/E4'; ?>">Épreuve E4</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Veille
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

                        <a class="dropdown-item" href="<?php echo base_url().'Veille/juridique';?>">Juridique</a>
                        <a class="dropdown-item" href="<?php echo base_url().'Veille/technologique';?>">Technologique</a>
                        <a class="dropdown-item" href="<?php echo base_url().'Veille/electronique';?>">Electronique</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo base_url().'Contact/'; ?>">Contact</a>
                </li>


            </ul>
        </div>
    </div>
</nav>