@extends('template/index')

@section('Title')

<title>Testo da inserire</title>@stop

@section('MetaDescription')

<meta name="description" content="aaa"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="aaa, aaa, aaa"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/prog.css') }}" type="text/css"/>@stop

@section('content')
@include('public/home/_partial2_nav')


<div class="site-wrapper">
  <div class="site-body">@include('public/prog1/_partial')


  </div>@include('public/home/_partial10_footer')


</div>@stop

@section('jsPagina')

<script src="{{ asset('js/prog.min.js')}}" type="text/javascript"></script>@stop

