@extends('layouts.site')
@section('content')
<section id="main">
  <div class="container">
    <div class="alert alert-success alert-dismissable">
      <div class="fa fa-info-circle alert-icon"></div>
      Hier kan u controleren of de door u gewenste datum beschikbaar is, indien u een geschikte datum gevonden heeft klikt u op de datum om deze reserveren.

    </div>

    <div class="clearfix">&nbsp;</div>
    <div id='calendar'></div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
      <div class="modal-body">
      Deze datum is helaas niet meer beschikbaar
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sluiten</button>
      </div>
    </div>
  </div>
</div>

@endsection
