@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
  <div class="panel panel-default">
   <div class="panel-heading">Nieuwe gebruiker</div>
    <div class="panel-body">
      @if (session('status'))
     <div class="alert alert-success">
        {{ session('status') }}
     </div>
      @endif

<form class="form-horizontal">
  <div class="form-group">
    <label for="naam" class="col-sm-2 control-label">Naam</label>
    <div class="col-sm-10">
      <input type="text" id="naam" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" id="email" name="email" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-sm btn-success">Registreren</button>
      <button type="reset" class="btn btn-sm btn-danger">Annuleren</button>
    </div>
  </div>
</form>
  </div>
</div>
</div>
</div>
@endsection