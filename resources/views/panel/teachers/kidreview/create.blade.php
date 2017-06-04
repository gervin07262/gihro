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
  						{{ Form::open(['route' => ['panelTeachers.kids.reviews.store',
                Request::segment(3)], 'method' => 'POST', 'class' => 'form-horizontal'])}}
  							<div class="form-group">
                  <h2 class="panel-title form">Agenda Fecha 10/12/2015</h2>
  								<label class="col-sm-2 control-label" for="inputDefault">Desayuno:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/full-cup.png', '', ['id' => 'breakfast-full-cup']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/medium-cup.png', '', ['id' => 'breakfast-medium-cup']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/empty-cup.png', '', ['id' => 'breakfast-empty-cup']) }}

                    {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'separate_icon',
                    'id' => 'breakfast-face-happy']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '',
                    ['id' => 'breakfast-face-regular']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['id' => 'breakfast-face-sad']) }}
  									<span class="equal_sign_diary">=</span>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/full-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-full-cup']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/medium-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-medium-cup']) }}
    									{{ HTML::image('assets-panel/images/diary-icons/empty-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-empty-cup']) }}
                      {{ Form::hidden('resultBreakfastCup', '' , ['id' => 'result-breakfast-cup']) }}
                    </div>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-face-happy']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-face-regular']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['class' => 'hidden',
                      'id' => 'result-breakfast-face-sad']) }}
                      {{ Form::hidden('resultBreakfastFace', '', ['id' => 'result-breakfast-face']) }}
                    </div>
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Comida:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/full-dish.png', '', ['id' => 'lunch-full-dish']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/medium-dish.png', '', ['id' => 'lunch-medium-dish']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/empty-dish.png', '', ['id' => 'lunch-empty-dish']) }}

                    {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'separate_icon',
                    'id' => 'lunch-face-happy']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '', ['id' => 'lunch-face-regular']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['id' => 'lunch-face-sad']) }}
  									<span class="equal_sign_diary">=</span>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/full-dish.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-full-dish']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/medium-dish.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-medium-dish']) }}
    									{{ HTML::image('assets-panel/images/diary-icons/empty-dish.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-empty-dish']) }}
                      {{ Form::hidden('resultLunchDish', '', ['id' => 'result-lunch-dish']) }}
                    </div>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-face-happy']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-face-regular']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['class' => 'hidden',
                      'id' => 'result-lunch-face-sad']) }}
                      {{ Form::hidden('resultLunchFace', '', ['id' => 'result-lunch-face']) }}
                    </div>
  								</div>
  							</div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Merienda:</label>
  								<div class="col-sm-10">
                    {{ HTML::image('assets-panel/images/diary-icons/full-cup.png', '', ['id' => 'snack-full-cup']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/medium-cup.png', '', ['id' => 'snack-medium-cup']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/empty-cup.png', '', ['id' => 'snack-empty-cup']) }}

                    {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'separate_icon',
                    'id' => 'snack-face-happy']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '', ['id' => 'snack-face-regular']) }}
                    {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['id' => 'snack-face-sad']) }}
  									<span class="equal_sign_diary">=</span>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/full-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-full-cup']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/medium-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-medium-cup']) }}
    									{{ HTML::image('assets-panel/images/diary-icons/empty-cup.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-empty-cup']) }}
                      {{ Form::hidden('resultSnackCup', '', ['id' => 'result-snack-cup']) }}
                    </div>
                    <div class="content-result">
                      {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-face-happy']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-regular.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-face-regular']) }}
                      {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['class' => 'hidden',
                      'id' => 'result-snack-face-sad']) }}
                      {{ Form::hidden('resultSnackFace', '', ['id' => 'result-snack-face']) }}
                    </diV>
  								</div>
  							</div>
                <div class="row">
                  <h2 class="panel-title form">Control de Esfinter:</h3>
                  <div class="col-sm-3">
                    <div class="form-group reset-form-horizontal">
        							<label class="control-label" for="inputDefault">Deposiciones:</label>
                      {{ Form::select('bowl_movement',
                        ['1' => '1',
                         '2' => '2',
                         '3' => '3',
                         '4' => '4',
                         '5' => '5'
                        ],null, ['class' => 'form-control input-sm mb-md'])
                      }}
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group reset-form-horizontal">
      								<label class="control-label" for="inputDefault">Micciones:</label>
                      {{ Form::select('urination',
                        ['1' => '1',
                         '2' => '2',
                         '3' => '3',
                         '4' => '4',
                         '5' => '5'
                        ],null, ['class' => 'form-control input-sm mb-md'])
                      }}
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group reset-form-horizontal">
      								<label class="control-label" for="inputDefault">Escapes:</label>
                      {{ Form::select('escapes',
                        ['1' => 'Si',
                         '0' => 'No'
                        ],null, ['class' => 'form-control input-sm mb-md'])
                      }}
                    </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="form-group reset-form-horizontal">
        								<label class="control-label" for="inputDefault">Actividades:</label>
                        {{ Form::select('activities',
                          ['Juego Simbólico' => 'Juego Simbólico',
                           'Pintar' => 'Pintar'
                          ],null, ['class' => 'form-control input-sm mb-md'])
                        }}
                      </diV>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
      							<div class="form-group">
      								<label class="col-sm-2 control-label" for="inputDefault">Siesta:</label>
      								<div class="col-sm-10">
                        {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['id' => 'nap-face-happy']) }}
                        {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['id' => 'nap-face-sad']) }}
      									<span class="equal_sign_diary">=</span>
                        <div class="content-result">
                          {{ HTML::image('assets-panel/images/diary-icons/face-happy.png', '', ['class' => 'hidden',
                          'id' => 'result-nap-face-happy']) }}
                          {{ HTML::image('assets-panel/images/diary-icons/face-sad.png', '', ['class' => 'hidden',
                          'id' => 'result-nap-face-sad']) }}
                          {{ Form::hidden('resultNapFace', '', ['id' => 'result-nap-face']) }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Tiempo:</label>
                      <div class="col-sm-10">
                        {{ Form::select('nap_time',
                          ['5 Minutos' => '5 Minutos',
                          '10 Minutos' => '10 Minutos',
                          '15 Minutos' => '15 Minutos',
                          '20 Minutos' => '20 Minutos',
                          '25 Minutos' => '25 Minutos',
                          '30 Minutos' => '30 Minutos',
                          '35 Minutos' => '35 Minutos',
                          '40 Minutos' => '40 Minutos'],null, ['class' => 'form-control input-sm mb-md'])
                        }}
                      </div>
                    </div>
						      </div>
                </div>
  							<div class="form-group">
  								<label class="col-sm-2 control-label" for="inputDefault">Observaciones:</label>
  								<div class="col-sm-10">
  									<textarea name="observations" class="form-control" rows="3" id="textareaAutosize" data-plugin-textarea-autosize></textarea>
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
  						{{ Form::close() }}
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
