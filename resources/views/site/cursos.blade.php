@extends('site.Master.layoutMaster')

@section('contentMaster')

<div class="logo">
<i class="fa fa-plane" aria-hidden="true">
  <span>Escolha o seu curso: {{session('nome')}}</span></i>
</div>
<a class="menu-toggle rounded" href="#">
  <i class="fa fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <li class="sidebar-brand">
      <a class="smooth-scroll" href="#Header"></a>
    </li>
    <li class="sidebar-nav-item">
    <a href="{{ route('site.home')}}">Home</a>
    <li class="sidebar-nav-item">
      <a href="{{ route('site.home')}}#About">Sobre</a>
    </li>
    <li class="sidebar-nav-item">
    <a href="{{ route('site.home')}}#Contact">Contato/Cadastrar</a>
    </li>
    <li class="sidebar-nav-item">
      <a href="{{ route('site.logout')}}">Logout</a>
      </li>
  </ul>
</nav>

<section id="Banner" class="content-section">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Liguagem PHP<span class="text-muted">Progração</span></h2>
        <p class="lead">Aprenda as principais forma de programas com essa linguagem, e muito mais!</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="http://localhost/laravel-tips/mini-site-09/public/img/php-logo-w.png" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
      </div>
    </div>
</section> 

    <hr class="featurette-divider">

<section id="Banner" class="content-section">
    <div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">POSTGRESS<span class="text-muted">Banco de dados.</span></h2>
        <p class="lead">Se tranforme em ninja e manipulação de banco de dados com essa ferramenta!.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
    </div>
</section> 

    <hr class="featurette-divider">

<section id="Banner" class="content-section">
    <div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Redes de computadores<span class="text-muted">Infraestrutura</span></h2>
        <p class="lead">Crie todos tipos de redes e aprenda como gerenciar todas as maquinas de sua rede.</p>
    </div>
    <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
    </div>
</section> 

@endsection