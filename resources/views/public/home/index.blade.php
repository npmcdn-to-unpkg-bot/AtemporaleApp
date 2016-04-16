@extends('template/index')

@section('Title')

<title>Atemporale Design - Estratégias Criativas de Comunicação e Design </title>@stop

@section('MetaDescription')

<meta name="description" content="Você sabe o que fazer para sair da crise? Nós sim! Investir em Design com a estratégia de comunicação personalizada para a sua empresa é o caminho para construir oportunidades e gerar valor, mesmo em tempos difíceis. Vamos conversar!?"/>@stop

@section('MetaKeywords')

<meta name="keywords" content="site, atemporal, atemporale design, design e comunicação visiva, identidade visual, construção de logos, branding, websites, escritorios de comunicação, logotipo BH"/>@stop

@section('cssPagina')

<link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css"/>@stop

@section('content')
@include('public/home/_partial1_intro')

@include('public/home/_partial2_nav')


<div class="site-wrapper">
  <div class="site-body">@include('public/home/_partial3_whoweare')

@include('public/home/_partial5_testimonialandservices')

@include('public/home/_partial6_blog')

@include('public/home/_partial7_work')

@include('public/home/_partial8_plans')

@include('public/home/_partial9_contact')


  </div>@include('public/home/_partial10_footer')


</div>@stop

@section('jsPagina')

<script src="{{ asset('js/home.min.js')}}" type="text/javascript"></script>@stop

