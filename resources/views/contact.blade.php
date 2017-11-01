@extends('layouts.site')

@section('content')
<section id="main">
  <header class="page-header">
    <div class="container">
      <h2 class="title">Contacteer ons</h2>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="content col-sm-12 col-md-12">
		<div class="row">
		  <div class="col-sm-6 col-md-6 contact-info bottom-padding">
			<address>
			  <div class="title">Adres</div>
			  Pastorijstraat 4<br>
        3440 Budingen
			</address>
			<div class="row">
			  <address class="col-sm-6 col-md-6">
				<div class="title">Telefoon</div>
				<div> +32 (11) 1234</div>
			  </address>
			  <address class="col-sm-6 col-md-6">
				<div class="title">Email</div>
				<div><a href="mailto:info@debungeneer.be">info@debungeneer.be</a></div>
			  </address>
			</div>
			<hr>
			</div>
		  <div class="col-sm-6 col-md-6 bottom-padding">
			<form id="contactform" class="form-box register-form contact-form" method="POST">
			  <h3 class="title">Contact formulier</h3>
			  <div id="success"></div>
			  <label>Naam: <span class="required">*</span></label>
			  <input class="form-control" type="text" name="name">
			  <label>Email adres: <span class="required">*</span></label>
			  <input class="form-control" type="email" name="email">
			  <label>Telefoon:</label>
			  <input class="form-control" type="text" name="phone">
			  <label>Bericht:</label>
			  <textarea class="form-control" name="comment"></textarea>
			  <div class="clearfix"></div>
			  <div class="buttons-box clearfix">
				<button id="submit" class="btn btn-default">Verzenden</button>
			  </div><!-- .buttons-box -->
			</form>
		  </div>
		  <div class="map-box col-sm-12 col-md-12">
			<div
			  style="height: 276px;"
			  class="map-canvas"
			  data-zoom="6"
			  data-lat="40.5289085"
			  data-lng="-77.983526"
			  data-title="New York"
			  data-content="Support: +777 (100) 1234<br>
			  Sales manager: +777 (100) 4321<br>
			  Director: +777 (100) 1243"></div>
		  </div>
		</div>
      </div>
    </div>
  </div><!-- .container -->
</section><!-- #main -->

@endsection
