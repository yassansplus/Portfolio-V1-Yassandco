<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Veille Juridiques
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Veille juridiques</li>
    </ol>

    <div class="row">

        <?php foreach ( $juridiques as $juridique) {


        ?>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="minh">
                    <?php echo url_img('veille/'.$juridique->image,'image icone', 'w100'); ?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $juridique->titre; ?>
                        </h4>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">
                        <?php echo substr(strip_tags($juridique->texte), 0,140); ?>...
                            <br>
                            <strong>Lisez la suite en cliquant juste en dessous!</strong>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo base_url().'Veille/idjury/'.$juridique->id; ?>">LIRE LA SUITE</a>
                    </div>
                </div>
            </div>




<?php } ?>
    </div>


</div>