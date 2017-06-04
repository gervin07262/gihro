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
                <div class="featured-box featured-box-primary align-left mt-xlg">
                  <div class="box-content">
                  	<h4 class="heading-primary text-uppercase mb-md">I'm a Returning Customer</h4>
                  	{{ Form::open(array('route' => 'panel.auth.login', 'method' => 'POST', 'id'=>'frmSignIn')) }}
                      <div class="row">
                  			<div class="form-group">
                  				<div class="col-md-12">
                            {{ Form::label('email','Email*') }}
                            {{ Form::text('email',null,['class'=>'form-control input-lg', 'maxlength'=>'100', 'required' => 'required']) }}
                  				</div>
                  			</div>
                  		</div>
                  		<div class="row">
                  			<div class="form-group">
                  				<div class="col-md-12">
                  					<a class="pull-right" href="#">(Lost Password?)</a>
                            {{ Form::label('password','Contraseña') }}
                            {{ Form::password('password',['class'=>'form-control input-lg', 'maxlength'=>'100', 'required' => 'required']) }}
                  				</div>
                  			</div>
                  		</div>
                  		<div class="row">
                  			<div class="col-md-6">
                  				<span class="remember-box checkbox">
                  					<label for="rememberme">
                  						<input type="checkbox" id="rememberme" name="rememberme">Remember Me
                  					</label>
                  				</span>
                  			</div>
                  			<div class="col-md-6">
                          {{ Form::submit('Login',['class' => 'btn btn-primary pull-right mb-xl', 'data-loading-text' => 'Loading...']) }}
                        </div>
                  		</div>
                  	{{ Form::close() }}
                  </div>
								</div>
                <br>
                <p>SI eres director del centro y aun no estás registardo hazlo desde aqui</p>
                <a class="btn btn-lg btn-primary" href="{{ URL::to('registerCenters') }}">Formualario Registro para el centro</a>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
