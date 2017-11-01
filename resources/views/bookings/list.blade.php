@extends('layouts.site')

@section('content')
<section id="main">
<div class="container">
    <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Reservaties</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                     <thead>
                       <th>Event</th>
                       <th>Contact persoon</th>
                       <th>Van</th>
                       <th>Tot</th>
                       <th>Status</th>
                       </thead>
                       <tbody>
                       <tr>
                           <td class="text-left">Boeren bal</td>
                           <td>Tony Vanluyten</td>
                           <td>27/9/17 09:00</td>
                           <td>27/9/17 23:00</td>
                           <td class="text-success">Betaald</td>

                       </tr>
                       <tr>
                           <td class="text-left">Mosselsouper - De Moedige Pedaaltrappers Leenhaag Vzw</td>
                           <td>Tony Vanluyten</td>
                           <td>27/9/17 09:00</td>
                           <td>27/9/17 23:00</td>
                           <td class="text-warning">Overboeking!</td>
                       </tr>
                       <tr>
                           <td class="text-left">Boeren bal</td>
                           <td>Tony Vanluyten</td>
                           <td>27/9/17 09:00</td>
                           <td>27/9/17 23:00</td>
                           <td class="text-danger">Betaling is nog niet voldaan</td>
                       </tr>
                       </tbody>
                     </table>

                </div>
            </div>
        </div>
    </div>
@endsection
