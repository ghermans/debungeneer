<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>De Bungeneer</title>

        <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('css/fullcalendar.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="css/skippr.css" rel="stylesheet" type="text/css">
    </head>

    <body id="boxed-bg" class="boxed fixed-header">
      <div class="page-box">
        <div class="page-box-content">
