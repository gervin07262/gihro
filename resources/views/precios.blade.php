@extends('layouts/front')
@section('csss')
    <!-- THIS LINE SHOULD IS NECCESARY BECUASE NOT WORKS TAG IMAGES IS REALLY NO IS LOGIC -->
    {{ Html::style('') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-directors')
@endsection
@section('content')
  <div role="main" class="main">
    <section class="page-header">
      <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      			<ul class="breadcrumb">
      				<li><a href="#">Inicio</a></li>
      			</ul>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12">
      			<h1>Precios</h1>
      		</div>
      	</div>
      </div>
		</section>
    <div class="container">
      <div class="row">
        <div class="col-md-10">
        	<p class="lead">
        		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
        	</p>
        </div>
        <div class="col-md-2">
        	<a href="#" class="btn btn-lg btn-primary mt-xl pull-right">Contact Us!</a>
        </div>
      </div>
      <hr>
      <div class="featured-boxes">
        <div class="row">
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-secondary featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/roja.png', '', []) }}
                <h4>Roja</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-primary featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/azul.png', '', []) }}
                <h4>Azul</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/verde.png', '', []) }}
                <h4>Verde</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/morada.png', '', []) }}
                <h4>Morada</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        </div>
			</div>
      <div class="featured-boxes">
        <div class="row">
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-yellow featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/amarilla.png', '', []) }}
                <h4>Amarilla</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-orange featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/naranja.png', '', []) }}
                <h4>Naranja</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-pink featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/rosa.png', '', []) }}
                <h4>Rosa</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        	<div class="col-md-3 col-sm-6">
        		<div class="featured-box featured-box-multicolor featured-box-effect-1 mt-xlg">
              <div class="box-content">
                {{ HTML::image('assets-front/img/prices/multicolor.png', '', []) }}
                <h4>Multicolor</h4>
                <ul>
                  <li><strong>3GB</strong> Disk Space</li>
                  <li><strong>25GB</strong> Monthly Bandwidth</li>
                  <li><strong>5</strong> Email Accounts</li>
                  <li><strong>Unlimited</strong> subdomains</li>
                </ul>
                <a class="btn btn-lg btn-primary" href="ES/registro-centro?variable1=1">Contratar</a>
              </div>
        		</div>
        	</div>
        </div>
			</div>
    </div>
  </div>
@endsection
