<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>De Bungeneer</title>

        <link href="<?php echo e(url('css/bootstrap.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>

<body id="boxed-bg" class="boxed fixed-header">
<div class="page-box">
<div class="page-box-content">

<?php echo $__env->make('layouts.partials.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="clearfix">&nbsp;</div>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12 col-md-12">
		<div class="row">
		  <div class="col-sm-6 col-md-6">
			<div class="box-404 bg">
			  <h1>404</h1>
			  <h2>De pagina kan niet gevonden worden.</h2>
			</div>
		  </div>
		  <div class="col-sm-6 col-md-6">
			<h3>Whoops, our bad...</h3>
			<p>De door u gevraagde pagina is niet gevonden, controleer onderstaande stappen</p>
			<ul>
			  <li>Als u de URL direct typt, zorg er dan voor dat de spelling correct is.</li>
			  <li>Als u op een link klikt om hier te komen, is de link verouderd.</li>
			</ul>
	  </div>
		</div>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- #main -->

</div><!-- .page-box-content -->
</div><!-- .page-box -->

<footer id="footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="copyright col-xs-12 col-sm-12 col-md-12">
          <p class="text-right">Copyright © Glenn Hermans, 2017</p>
        </div>

      </div>
    </div>
  </div><!-- .footer-bottom -->
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </body>
</html>
