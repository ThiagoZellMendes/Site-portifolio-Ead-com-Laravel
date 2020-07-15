@extends('site.Master.layoutMaster')

@section('contentMaster')

<div class="logo">
  <i class="fa fa-arrow-right" aria-hidden="true">
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
      <h2>Curso Segurança da Informação</h2>
      <p>Nesse curso você apredenderar as principais tecnicas para manter seus dandos em seguraça</p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8">
          <img src="{{url('img/seguranca.jpg')}}" class="img-fluid" alt="">
          <h3>O que é Segurança da Informação</h3>
          <p>
            Trata-se de tudo aquilo que envolve a proteção de sistemas e dados de um determinado indivíduo ou empresa, sendo que o nível de segurança é estabelecido de acordo com o valor das informações e os potenciais prejuízos causados por seu uso indevido
          </p>
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Instrutor</h5>
            <p><a href="#">Thiago Mendes</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Tipo</h5>
            <p>Segurança de dados</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Tempo do curso</h5>
            <p>20h</p>
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
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">Fundamentos da Segurança de Dados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-2">Inteligência contra Ameaças</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-3">Governança em Segurança Cibernética para Lideranças</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab-4">Driblando as ameaças cibernéticas às...</a>
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