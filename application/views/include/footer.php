<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
    	<div class="row">	
    	<div class="col-md-4">
    		<p class="m-0 text-center text-white"><?php echo url_img('logo.ico','Logo','w100') ?> </p>
    		<br>	
        <p align="center"><a class="text-white" href="<?php echo base_url().('Accueil/ml'); ?>">Mentions légales -  <?php echo date('Y'); ?></a></p>
    	</div>
    	<div class="col-md-4">
    		<!-- <h3>Lien rapides</h3>
    		<ul>
    			<li><a href="">test</a></li>
    			<li><a href="">test</a></li>
    			<li><a href="">test</a></li>
    			<li><a href="">test</a></li>
    		</ul> -->
    	</div>
    	<div class="col-md-4"></div>
        </div>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->


<?php echo url_js('popper/popper.min'); ?>
<?php echo url_js('jsboots/bootstrap.min'); ?>

    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.2.3/typeit.min.js"></script>
  
<?php echo url_js('general');
//echo url_js('jquery.indyFadeBox');
//echo url_js('jquery.indyMasonry');
//echo url_css('indyFadeBox');
?>
</body>

</html>