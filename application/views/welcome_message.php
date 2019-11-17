<?php echo url_css('index'); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('assets/images/worker.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>Comprendre</h3>
                <p>Comprendre ce que l'on nous demande.</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('assets/images/workteam.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>Chercher</h3>
                <p>Chercher la solution qui correspond à la demande.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('assets/images/worker2.jpg')">
            <div class="carousel-caption d-none d-md-block">
                <h3>Développer</h3>
                <p>Développer un code propre.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Page Content -->
<div class="container ">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Qui
        <small>suis-je?</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>

    </ol>

    <!-- Intro Content -->
    <div class="row animated fadeIn">
        <div class="col-lg-6">
            <?php echo url_img('devindex.jpg', 'image intro', 'img-fluid rounded mb-4'); ?>
        </div>
        <div class="col-lg-6">
            <h2>Yass'</h2>
            <p class="card-text">
                <!--   Je m’appelle Yassine Bousaidi, et je suis actuellement en BTS SIO option SLAM à l’IMC Randstad. Tout d’abord je vais vous expliquer ce qu’est ce BTS dans ses grandes lignes. Le BTS SIO SLAM, solution logiciel et application métier, a pour but de former des développeurs opérationnels en 2ans, seulement peu d’élèves arrivent au bout de ce cursus. On y apprend la logique de la programmation et les rudiments fondamentaux pour un bon développeur. Prenons par exemple ma formation, nous avons notamment vu le PHP (client léger) et le Java (client lourd).  Nous avons également étudié les syntaxes, la logique d’autres langages mais aussi les différentes manières de coder (procédurales, objet).
   -->

                Je m'appelle Yassine Bousaidi, développeur en alternance à l'IMC Randstad. Passioné d'informatique et
                d'éléctronique depuis toujours. J'ai choisis ce cursus pour développer mes compétences en développement
                informatique. En effet, le but du BTS SIO est de former des techniciens operationnel à la création de
                site et d'application.
            </p>

        </div>
        <div class="col-lg-12 mt20">

            <p class="card-text">
                Développeur en alternance dans une agence web, une startup, La <b> <a
                            href="<?php echo base_url() . 'entreprise'; ?>"> Fischer prod’</a> </b>J'ai vue mes
                compétences accroitre à travers le temps. Tout en mettant en pratique ma passion pour le développement.
            </p>

            <p>
                <b> <a href="http://yassandco.pe.hu/z/">Lien de l'ancien portfolio (attention ça pique les yeux)</a>
                </b><br>
            </p>
        </div>
    </div>
    <!-- /.row animated fadeIn -->
    <div class="row">
        <div class="col-md-12">	
				<h2> Mes compétences:</h2>
        </div>	
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 mt15">
                    <h5> css</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="95"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> html</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 99%" aria-valuenow="99"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> JavaScript</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> PHP</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> JAVA</h5>
                    <div class="progress">
                        <div class="progress-bar bg-summary" role="progressbar" style="width: 85%" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
              
            </div>

        </div>
        <div class="col-md-6">	
        	  <div class="col-md-12 mt15">
                    <h5> C#</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                 <div class="col-md-12 mt15">
                    <h5> Visual Basic & VBA</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> Android</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> Xamarin</h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt15">
                    <h5> Symfony</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                
                
                

        </div>

    </div>

    <div class="row mt65     mb65   " align='center'>

        <div class="col-md-6">
            <a href="<?php echo base_url() . 'uploads/CV.pdf' ?>"><span class="download">
        <i class="fa fa-code" aria-hidden="true"></i>
    </span></a>
            <br><br>
            <h2 class="titledownload">Curriculum vitae</h2>
        </div>
        <div class="col-md-6">
            <a href="https://fr.linkedin.com/in/yassine-bousaidi-912327116"><span class="linkedin"><i
                            class="fa fa-linkedin" aria-hidden="true"></i></span>
                <br><br></a>
            <h2 class="titledownload">LinkedIn</h2>
        </div>


    </div>

    <!-- Team Members -->
    <h2 class="mb30">Mes Réalisations </h2>

    <div class="row animated fadeIn">
        <?php foreach ($realisations as $realisation) { ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <?php echo url_img('realisation/' . $realisation->image, 'image realisation faites', 'card-img-top') ?>

                    <div class="card-body">
                        <h4 class="card-title"><?php echo $realisation->titre ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text"> <?php echo strip_tags(substr($realisation->texte, 0, 120)); ?>...
                            <br>
                            <strong>Lisez la suite en cliquant juste en dessous!</strong>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url() . 'Realisation/id/' . $realisation->id; ?>">LIRE LA SUITE</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- /.row animated fadeIn -->

    <!-- Our Customers -->
    <h2 class="mb30">Techno favorite</h2>
    <div class="row animated fadeIn ">
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('bootstrap.jpg', 'bootstrap logo', 'img-fluid') ?>

        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('sass.jpg', 'sass logo', 'img-fluid') ?>
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('symfony.png', 'symfony logo', 'img-fluid') ?>
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('codeigniter.png', 'bootstrap logo', 'img-fluid') ?>
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('cakephp.jpg', 'bootstrap logo', 'img-fluid') ?>
        </div>
        <div class="col-lg-2 col-sm-4 mb-4">
            <?php echo url_img('gitlab.png', 'bootstrap logo', 'img-fluid') ?>
        </div>
    </div>
    <!-- /.row animated fadeIn -->

</div>