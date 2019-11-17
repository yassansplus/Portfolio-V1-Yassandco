<html>
<head>
    <?php echo url_js('jquery/jquery.min'); ?>
    <?php echo url_js('popper/popper.min'); ?>
    <?php echo url_js('jsboots/bootstrap.min'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>





    <!-- Include external CSS. -->


    <!-- Include Editor style. --><!-- 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.6/css/froala_style.min.css" rel="stylesheet" type="text/css" />
   -->
 




<!-- Include JS file. -->





</head>
<body class="container">
    <div>
     <div class="col-lg-4 col-xs-6 articleonglet">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Article</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
        <div class="col-lg-4 col-xs-6 epreuveonglet">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Epreuve</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
         <div class="col-lg-4 col-xs-6 veilleonglet">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Veille</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            
          </div>
        </div>
    </div>
    <br>    <br>    
    <div class="row">
        <div class="col-md-12 article">
            <div class="box box-primary">
                <div class="box-header with-border" data-toggle="collapse" data-target="#collapseExample">
                    <h3 class="box-title">Ajouter un article realisation - Bienvenu <strong class="text-capitalize"> <?php echo $username; ?></strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('Gestion/ajouterRea'); ?>
                    <div class="box-body"  id="collapseExample" >
                        <div class="form-group">

                            <input type="text" name="titre"  class="form-control" id="titre" placeholder="TITRE">
                        </div>
                        <div class="form-group">

                            <textarea name="content" id="content" class="form-control textareaArticle thistextex"></textarea>
                        </div>
                        <div class="form-group">

                            <input type="file" name="cover" id="exampleInputFile">
                            </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer" >
                        <button type="submit" name="userSubmit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>




        <div class="col-md-12 veille">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Ajouter une veille <strong class="text-capitalize"> <?php echo $username; ?></strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('Gestion/ajouterVeille'); ?>
                <div class="box-body">
                    <div class="form-group">

                        <input type="text" name="titreveille"  class="form-control" id="titre" placeholder="TITRE">
                    </div>
                    <div class="form-group">

                        <select name="veille" class="form-control">
                            <option value="juridique">juridique</option>
                            <option value="technologique">technologique</option>
                            <option value="electronique">electronique</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <textarea name="contentveille" id="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="file" name="coverveille" id="exampleInputFile">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" name="userSubmit" class="btn btn-primary">Envoyer</button>
                </div>
                </form>
            </div>
        </div>


        <div class="col-md-12 epreuve">
            <div class="box box-primary">
                <div class="box-header with-border" >
                    <h3 class="box-title">Ajouter un article epreuve - Bienvenu <strong class="text-capitalize"> <?php echo $username; ?></strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('Gestion/ajouterEpreuve'); ?>
                <div class="box-body"   >
                    <div class="form-group">

                        <input type="text" name="titreepreuve"  class="form-control" id="titre" placeholder="TITRE">
                    </div>

                     <div class="form-group">

                        <input type="text" name="link"  class="form-control" id="titre" placeholder="lien de la doc">
                    </div>
                    <div class="form-group">
                        <select name="epreuve" class="form-control">
                            <option value="epreuvee6">Epreuve e6</option>
                            <option value="epreuvee4">Epreuve e4</option>
                        </select>

                    </div>
                    <div class="form-group">

                        <textarea name="contentepreuve" id="contentepreuve" class="form-control"></textarea>
                    </div>

                    <div class="form-group">

                        <input type="file" name="coverepreuve" id="exampleInputFile">
                    </div>

                </div>
                <!-- /.box-body -->

                <div class="box-footer" >
                    <button type="submit" name="userSubmit" class="btn btn-primary">Envoyer</button>
                </div>
                </form>
            </div>
        </div>


    </div>

<!--

    <div class="row">


        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Article souhaiter</h3>
                </div>


                <form action="">
                <div class="box-body">

                    <div class="form-group">

                        <select name="veille" class="form-control">
                            <option value="juridique">juridique</option>
                            <option value="technologique">technologique</option>
                            <option value="realisation">realisation</option>
                        </select>
                    </div>



                </div>


                <div class="box-footer">
                    <button type="submit" name="userSubmit" class="btn btn-primary">Envoyer</button>
                </div>
                </form>
            </div>
        </div>
    -->

    </div>
    <?php



    foreach ($realisations as $realisation){


        ?>
    <div class="row" >
        <div class="timeline-item box col-lg-12">
            <span class="time"><i class="fa fa-clock-o"></i><?php echo date('d/m/Y à H:i',strtotime($realisation->date ));?></span>

            <h3 class="timeline-header "><a href="#"><?php echo $realisation->titre; ?></a> </h3>
            <div class="row">
            <div class="timeline-body col-md-7 ">
                <?php
                echo $realisation->texte;
                ?>
            </div>
                <div class="col-md-4">
                    <?php echo url_img('realisation/'.$realisation->image,'test','img-responsive') ?>
                </div>
            </div>
            <div class="timeline-footer">
                <br>
                <!-- <a class="btn btn-primary btn-xs">Read more</a> -->
                <a class="btn btn-danger btn-xs deletebutton" data-idrea="<?php echo $realisation->id ?>">Delete</a>
                <br><br>
            </div>
        </div>
    </div>
<?php } ?>

<!--     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script> -->
 
    <!-- Include Editor JS files. -->

      <?php echo url_js('ckeditor/ckeditor'); ?>
                <script>
                
CKEDITOR.replace( 'content', {
    language: 'fr',
    uiColor: '#9AB8F3',
    extraPlugins: 'colorbutton'
});
CKEDITOR.replace( 'contentepreuve', {
    language: 'fr',
    uiColor: '#9AB8F3',
    extraPlugins: 'colorbutton'
});


CKEDITOR.replace( 'contentveille', {
    language: 'fr',
    uiColor: '#9AB8F3',
    extraPlugins: 'colorbutton'
});

        </script>
    <?php echo url_js("onglet"); ?>
    

    <!-- Initialize the editor. -->

<style>
    .fr-wrapper>div>a{
        display:none!important;
        
    }
    textarea {
        min-height: 80px;
    }
    .fr-box.fr-basic .fr-element {
    color: #000;
    padding: 16px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    overflow-x: auto;
    min-height: 141px;
}
</style>
</body>
</html>
