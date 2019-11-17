<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Epreuve E6
        <small>Réalisation</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Portfolio 1</li>
        <li class=" pull-right">
        <?php if (!isset($_SESSION['prof'])): ?>
           <a href=""  data-toggle="modal" data-target=".bd-example-modal-md" class="text-danger"> Connectez vous ici.<i class="fa fa-sign-in" aria-hidden="true"></i></a>
        <?php endif ?>
        /
          <a href=""  data-toggle="modal" data-target=".bd-example-modal-md2"> Tableau E6</a>

        </li>
    </ol>


    <?php foreach ($realisations as $realisation){ ?>
        <!-- Project Two -->
        <div class="row">
            <div class="col-md-4">
                <a href="#">
                    <?php echo url_img('epreuve/'.$realisation->image,'image du projet','w100'); ?>

                </a>
            </div>
            <div class="col-md-7">
                <h3><?php echo $realisation->titre; ?></h3>
                <p><?php echo strip_tags(substr($realisation->texte,0,400)); ?>...</p>
                <a class="btn btn-primary" href="<?php echo base_url().'Epreuve/idE6/'.$realisation->id; ?>">Découvrir
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <?php if (isset($_SESSION['prof']) && isset($realisation->liendoc)): ?>
                   <a target="_blank" class="btn btn-danger" href="<?php echo $realisation->liendoc; ?>">Télécharger la doc associé
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a> 
                <?php endif ?>



            </div>
            <div class=" text-muted col-md-12 mt10">
                Posté le <?php echo date('d/m/Y à H:i',strtotime($realisation->date )); ?>
            </div>
        </div>

        <!-- /.row -->

        <hr>
    <?php } ?>




</div>