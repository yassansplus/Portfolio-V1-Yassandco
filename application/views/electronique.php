<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Veille electronique
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Veille electronique</li>
    </ol>

    <div class="row">

        <?php foreach ( $electroniques as $electronique) {


            ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="minh">
                    <?php echo url_img('veille/'.$electronique->image,'image miniature','w100'); ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $electronique->titre; ?>

                        </h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">
                            <?php echo substr(strip_tags($electronique->texte), 0,140); ?>
                            <br>
                            <strong>Lisez la suite en cliquant juste en dessous!</strong>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url().'Veille/idelectronique/'.$electronique->id ?>">LIRE LA SUITE</a>
                    </div>
                </div>
            </div>




        <?php } ?>
    </div>


</div>
