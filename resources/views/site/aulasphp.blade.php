@extends('site.Master.layoutMaster')

@section('contentMaster')

<div class="logo">
  <i class="fa fa-arrow-right" aria-hidden="true">
    <span>Bem vindo: {{session('nome')}}</span></i>
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
        <a href="{{ route('site.cursos')}}">Voltar para Cursos</a>
      </li>
      <li class="sidebar-nav-item">
        <a href="{{ route('site.logout')}}">Logout</a>
        </li>
    </ul>
  </nav>

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Curso PHP</h2>
      <p>Aprenda as principais forma de programas com essa linguagem, e muito mais!</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8">
          <img src="{{url('img/php-logo-w.png')}}" class="img-fluid" alt="">
          <h3>O que é Liguagem de programação</h3>
          <p>
            É uma linguagem formal que, através de uma série de instruções, permite que um programador escreva um conjunto de ordens, ações consecutivas, dados e algoritmos para criar programas que controlam o comportamento físico e lógico de uma máquina.
          </p>
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Instrutor</h5>
            <p><a href="#">Thiago Mendes</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Linguagem</h5>
            <p>PHP</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Tempo do curso</h5>
            <p>30h</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Valor</h5>
            <p>Gratis</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">Fundamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2">Tipo de dados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3">Estrutura de repetição</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4">Orientação Objetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-5">Projeto</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Fundamentos</h3>
                  <img src="{{url('img/Video You-2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Tipo de Dados</h3>
                  <img src="{{url('img/Video You-2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-2.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Estrutura de repetição</h3>
                  <img src="{{url('img/Video You-2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Orientação Objetos</h3>
                  <img src="{{url('img/Video You-2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Projeto</h3>
                  <img src="{{url('img/Video You-2.png')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Cource Details Tabs Section -->
@endsection