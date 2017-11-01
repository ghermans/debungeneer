@extends('layouts.site')

@section('content')
<section id="main">
<div class="container">
    <div class="row">
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label for="fname" class="col-sm-2 control-label">Evenement</label>
          <div class="col-sm-5">
          <input type="text" class="form-control" id="fname">
          </div>
        </div>

        <div class="form-group">
          <label for="lname" class="col-sm-2 control-label">Van</label>
          <div class="col-sm-5">
          <input type="text" class="form-control" id="start" value="{{ Request::get('id') }}">
          </div>
        </div>

        <div class="form-group">
          <label for="lname" class="col-sm-2 control-label">tot</label>
          <div class="col-sm-5">
          <input type="text" class="form-control" id="end">
          </div>
        </div>

        <hr>

      <div class="form-group">
        <label for="vereniging" class="col-sm-2 control-label">Naam van de vereniging</label>
        <div class="col-sm-5">
      	<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <label for="fname" class="col-sm-2 control-label">Naam</label>
        <div class="col-sm-5">
      	<input type="email" class="form-control" id="fname">
        </div>
      </div>

      <div class="form-group">
        <label for="lname" class="col-sm-2 control-label">Voornaam</label>
        <div class="col-sm-5">
      	<input type="email" class="form-control" id="lname">
        </div>
      </div>

      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
      	<input type="email" class="form-control" id="email">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Telefoon</label>
        <div class="col-sm-5">
      	<input type="email" class="form-control" id="inputEmail3">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
      	<label class="checkbox">
      	  <input type="checkbox"> Remember me
      	</label>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
      	<button type="submit" class="btn btn-default">Bevestigen</button>
        </div>
      </div>
      </form>
    </div>
  </div>
@endsection
