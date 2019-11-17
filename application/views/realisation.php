<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Les réalisations</h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Réalisation</li>
    </ol>

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        <?php foreach ($articles as $article){
       ?>

            <!-- Blog Post -->
            <div class="card mb-4">
                <?php echo url_img('realisation/'.$article->image,'Images de l\'article','w100') ?>

                <div class="card-body">
                    <h2 class="card-title text-uppercase"><?php echo $article->titre; ?></h2>
                   <p> <?php echo substr($article->texte,0,140);?></p>
                    <a href="<?php echo base_url().'Realisation/id/'.$article->id ?>" class="btn btn-primary">
                        Voir Plus &rarr;
                    </a>
                </div>
                <div class="card-footer text-muted">
                    Posté le <?php echo date('d/m/Y à H:i',strtotime($article->date )); ?>
                </div>
            </div>
        <?php } ?>
            <!-- Pagination -->


        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">



            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Developpement</a>
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

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->