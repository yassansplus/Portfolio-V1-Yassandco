<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php  echo base_url(); ?>">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-7 mb-4">
          <!-- Embedded Google Map -->
        <div class="col-lg-9 mb-4">
          <h3 class="basictitlefont">Contact</h3>
          <?php if (isset($success)){
            echo $success;

          }elseif (isset($error)) {
            echo $error;
          } 



          ?>
          
         <?php  echo form_open('Contact/index'); ?>
            <div class="control-group form-group">
              <div class="controls">
              
                <input type="text" placeholder="NOM" class="form-control"  name="nom" required>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
               
                <input type="texte" placeholder="PRENOM" class="form-control"  name="prenom" required>
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                
                <input type="email" placeholder="ADRESSE EMAIL" class="form-control" name="email" id="email" required >
              <div class="help-block"></div></div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                    
                <textarea rows="5" placeholder="MESSAGE" class="form-control mb5" name="message" maxlength="999" style="resize:none"></textarea>
                <div class="g-recaptcha" data-sitekey="6Lfyt2MUAAAAAGKjtzqBAfv-NLqu_njfbaiclz_k"></div>
              <div class="help-block"></div></div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <input type="submit"  value="ENVOYER">
        
          </form>
        </div>

        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-5 mb-4">
         <?php  echo url_img('contact.jpg','image de contact','w100') ?>
       </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        
      </div>
      <!-- /.row -->

    </div>
    <?php   echo url_css('contact'); ?>