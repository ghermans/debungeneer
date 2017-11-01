@extends('layouts.site')
@section('content')
<section id="main">
<div class="container">
  <div class="row">
    <article class="content pull-right col-sm-12 col-md-9">
      @if (session('status'))
     <div class="alert alert-success">
        {{ session('status') }}
     </div>
      @endif

    <table class="table">
      <thead>
        <th>Contact persoon</th>
        <th>Email</th>
        <th>Datum</th>
      </thead>
      <tbody>
       @foreach($users as $user)
        <tr>
         <td>{{ $user->name }}</td>
         <td>{{ $user->email }}</td>
         <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
       </tbody>
     </table>
    </article><!-- .content -->

    <div id="sidebar" class="sidebar col-sm-12 col-md-3">
  <aside class="widget menu">
    <header>
    <h3 class="title">Administratie</h3>
    </header>
    <nav>
    <ul>
      <li><a href="#">Gebruikers</a></li>
      <li><a href="#">Reservaties</a></li>
      <li><a href="#">Donec faucibus fringilla</a></li>
    </ul>
    </nav>
  </aside><!-- .menu-->
  </div><!-- .sidebar -->
  </div>
</div><!-- .container -->
</section><!-- #main -->
@endsection
