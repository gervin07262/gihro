@extends('layouts.front')
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
							<li><a href="#">Home</a></li>
							<li class="active">Pages</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h1>Login</h1>
					</div>
				</div>
			</div>
		</section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="featured-boxes">
            <div class="row">
              <div class="content-form-login">
                @include('alerts.success')
                <div class="featured-box featured-box-primary align-left mt-xlg">
                  <div class="box-content">
                  	<h4 class="heading-primary text-uppercase mb-md">Registrate con tu dirección de correo electrónico</h4>
                    {{ Form::open(array('route' => 'panel.auth.registerParents', 'method' => 'POST', 'id'=>'frmSignIn')) }}
              				<div class="row">
              					<div class="form-group">
              						<div class="col-md-12">
                            {{ Form::label('name','Nombre del Niño') }}
                            {{ Form::text('name',null,['class'=>'form-control', 'maxlength'=>'100']) }}
              						</div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-12">
                            {{ Form::label('email','Email*') }}
                            {{ Form::text('email',null,['class'=>'form-control', 'maxlength'=>'100', 'required' => 'required']) }}
              						</div>
                        </div>
                        <div class="form-group">
              						<div class="col-md-12">
                            {{ Form::label('password','Contraseña*') }}
                            {{ Form::password('password',['class'=>'form-control', 'maxlength'=>'100', 'required' => 'required']) }}
                          </div>
                        </div>
                        <div class="form-group">
              						<div class="col-md-12">
                            {{ Form::label('repeat_password','Repite Contraseña*') }}
                            {{ Form::password('repeat_password',['class'=>'form-control', 'maxlength'=>'100', 'required' => 'required']) }}
              						</div>
              					</div>
              				</div>
              				<div class="row">
              					<div class="col-md-12">
                          {{ Form::submit('Contratar',['class' => 'btn btn-primary pull-right mb-xl', 'data-loading-text' => 'Loading...']) }}
              					</div>
              				</div>
              			{{ Form::close() }}
                  </div>
								</div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
