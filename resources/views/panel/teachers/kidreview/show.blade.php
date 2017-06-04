@extends('layouts.panel')
@section('csss')
  <!-- Specific Page Vendor CSS -->
  {{ Html::style('assets-panelpanel/vendor/select2/select2.css') }}
  {{ Html::style('assets-panelpanel/vendor/jquery-datatables-bs3/assets-panel/css/datatables.csss') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-teachers')
@endsection
@section('content')
  <section role="main" class="content-body">
  	<header class="page-header">
  		<h2>Agenda</h2>
  		<div class="right-wrapper pull-right">
  			<ol class="breadcrumbs">
  				<li>
  					<a href="index.html">
  						<i class="fa fa-home"></i>
  					</a>
  				</li>
  				<li><span>Agenda</span></li>
  			</ol>
  		</div>
  	</header>
  	<!-- start: page -->
  	<div class="row">
  		@include('panel.partials.user-about')
  		<div class="col-md-9 col-lg-9">
  			<div class="tabs">
  				@include('panel.tabs.teachers')
  				<div class="tab-content">
            <div id="add-review" class="tab-pane active list-items">
              @include('alerts.success')
  						{{ Form::open(['class' => 'form-horizontal'])}}
  							<div class="form-group">
                  <h2 class="panel-title form">Agenda Fecha 10/12/2015</h2>
  								<label class="col-sm-2 control-label" for="inputDefault">Desayuno:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/'.$cupBreakFast.'.png', '',[]) }}
                    {{ HTML::image('assets-panel/images/diary-icons/'.$faceBreakFast.'.png', '',[]) }}
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Comida:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/'.$dishLunch.'.png', '',[]) }}
                    {{ HTML::image('assets-panel/images/diary-icons/'.$faceLunch.'.png', '',[]) }}
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Merienda:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/'.$cupSnack.'.png', '',[]) }}
                    {{ HTML::image('assets-panel/images/diary-icons/'.$faceSnack.'.png', '',[]) }}
  								</div>
  							</div>
                <div class="form-group">
                  <h2 class="panel-title form">Control de Esfinter:</h2>
  								<label class="col-sm-2 control-label" for="inputDefault">Deposiciones:</label>
  								<div class="col-sm-10">
                    {{ $review->bowl_movement }}
  								</div>
  							</div>
                <div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Micciones:</label>
  								<div class="col-sm-10">
                    {{ $review->urination }}
  								</div>
  							</div>
                <div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Escapes:</label>
  								<div class="col-sm-10">
                    {{ $review->escapes=='1' ? 'Si' : 'No' }}
  								</div>
  							</div>
                <div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Actividades:</label>
  								<div class="col-sm-10">
                    {{ $review->activities }}
  								</div>
  							</div>
                <div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Siesta:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/'.$faceNap.'.png', '', []) }}
                    Tiempo: {{ $review->nap_time }}
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Observaciones:</label>
  								<div class="col-sm-10">
  									{{ $review->observations }}
  								</div>
  							</div>
  							<div class="panel-footer">
  								<div class="row">
  									<div class="col-md-9 col-md-offset-3">
                      {{ Form::submit('Guardar',['class' => 'btn btn-primary']) }}
                      {{ Form::reset('Cancelar',['class' => 'btn btn-default']) }}
  									</div>
  								</div>
  							</div>
  						</form>
					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<!-- end: page -->
  </section>
@endsection
@section('initialJquery')
  {{ Html::script('assets-panel/vendor/jquery/jquery.min.js') }}
@endsection
@section('javascriptsCustom')
  {{ Html::script('assets-panel/javascripts/theme-custom/teachers/kid-review.js') }}
@endsection
