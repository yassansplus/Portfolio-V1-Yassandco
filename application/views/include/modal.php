<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
           <?php echo form_open('Admin/isprof'); ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 mt10">
                    <h2>Connectez-vous</h2>
                    <hr>
                </div>
            </div>
            <div class="">
                <div class="col-md-12"></div>
                <div class="col-md-12">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="identifiant" class="form-control" id="email"
                                   placeholder="Votre identifiant" required autofocus>
                        </div>
                    </div>
                </div>
              <!--   <div class="col-md-12">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> Example error message
                        </span>
                    </div>
                </div> -->
            </div>
            <div class="">
                <div class="col-md-12"></div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="mdp" class="form-control" id="password"
                                   placeholder="mot de passe" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
  
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
            
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
