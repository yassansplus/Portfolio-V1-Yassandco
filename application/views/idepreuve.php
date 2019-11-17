
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Le projet <?php echo $realisation[0]->titre; ?>

    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active"> <?php echo $realisation[0]->titre; ?></li>
    </ol>

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Preview Image -->
            <?php echo url_img('epreuve/'.$realisation[0]->image,'','w100'); ?>


            <hr>

            <!-- Date/Time -->
            <p>Posté le <?php echo date('d/m/Y à H:i',strtotime($realisation[0]->date )); ?> </p>

            <hr>

            <!-- Post Content -->
            <?php echo $realisation[0]->texte; ?>

            <hr>

            <!-- Comments Form -->

            <!-- Comment with nested comments -->

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->


            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="">Web Design</a>
                                </li>
                                <li>
                                    <a href="">HTML</a>
                                </li>
                                <li>
                                    <a href="">Developpement</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
