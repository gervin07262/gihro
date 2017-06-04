@extends('layouts.panel')
@section('csss')
  <!-- Specific Page Vendor CSS -->
  {{ Html::style('assets-panel/vendor/pnotify/pnotify.custom.css') }}
  <!-- Specific Page Vendor CSS for input file -->
  {{ Html::style('assets-panel/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-directors')
@endsection
@section('content')
    <section role="main" class="content-body">
      <header class="page-header">
        <h2>Perfil</h2>
          <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
              <li>
                <a href="index.html">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li><span>Pages</span></li>
              <li><span>User Profile</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
          </div>
        </header>
        <!-- start: page -->
        <div class="row">
            @include('panel.partials.user-about')
            <div class="col-md-9 col-lg-9">
                <div class="tabs">
                    @include('panel.tabs.directors')
                    <div class="tab-content">
                        <div class="list-items" class="tab-pane active">
                          {{ Form::open(['route' => ['panelDirectors.classrooms.teachers.store', Request::segment(3)]
                          , 'method' => 'POST', 'class' => 'form-horizontal', 'novalidate' => 'novalidate']) }}
                          <section class="panel form-wizard" id="w1">
                            <header class="panel-heading">
                              <div class="panel-actions">
                                <a href="#" class="fa fa-caret-down"></a>
                                <a href="#" class="fa fa-times"></a>
                              </div>
                              <h2 class="panel-title">Añadir Clase</h2>
                            </header>
                            <div class="panel-body panel-body-nopadding">
                              <div class="wizard-tabs">
                                <ul class="wizard-steps">
                                  <li>
                                    <a href="#w1-account" data-toggle="tab" class="text-center">
                                      <span class="badge hidden-xs">1</span>
                                      Información
                                    </a>
                                  </li>
                                  <li class="active">
                                    <a href="#w1-confirm" data-toggle="tab" class="text-center">
                                      <span class="badge hidden-xs">2</span>
                                      Añadir Profesor
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#w1-confirm" data-toggle="tab" class="text-center">
                                      <span class="badge hidden-xs">3</span>
                                      Añadir Niño / (a,os,as)
                                    </a>
                                  </li>
                                </ul>
                              </div>
                                <div class="tab-content">
                                  <div id="w1-account" class="tab-pane active">
                                    <div class="form-group">
                                      {{ Form::label('name','Nombre', ['class' => 'col-sm-3 control-label']) }}
                                      <div class="col-sm-9">
                                          {{ Form::text('name',null,['class'=>'form-control input-sm', 'maxlength'=>'100' ,
                                          'required' => 'required']) }}
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      {{ Form::label('surnames','Apellidos', ['class' => 'col-sm-3 control-label']) }}
                                      <div class="col-sm-9">
                                          {{ Form::text('surnames',null,['class'=>'form-control input-sm', 'maxlength'=>'100' ,
                                          'required' => 'required']) }}
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      {{ Form::label('email','Email', ['class' => 'col-sm-3 control-label']) }}
                                      <div class="col-sm-9">
                                          {{ Form::email('email',null,['class'=>'form-control input-sm', 'maxlength'=>'100' ,
                                          'required' => 'required']) }}
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-sm-3 control-label">Subir Foto</label>
                                      <div class="col-sm-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                          <div class="input-append">
                                            <div class="uneditable-input" style="display: none">
                                              <i class="fa fa-file fileupload-exists"></i>
                                              <span class="fileupload-preview"></span>
                                            </div>
                                            <span class="btn btn-default btn-file" style="margin: 0">
                                              <span class="fileupload-new">Seleccionar</span>
                                              <input type="file" />
                                            </span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <div class="panel-footer">
                            <ul class="pager">
                              <li class="previous disabled">
                                <a><i class="fa fa-angle-left"></i> Anterior</a>
                              </li>
                              <li class="next">
                                <a><button type="submit" class="fa fa-angle-right">Siguiente</button></a>
                              </li>
                            </ul>
                          </div>
                        </section>
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
@section('javascripts')
    {{ Html::script('assets-panel/vendor/jquery-validation/jquery.validate.js') }}
    {{ Html::script('assets-panel/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') }}
    {{ Html::script('assets-panel/vendor/pnotify/pnotify.custom.js') }}
@endsection
@section('examples')
  <!-- Examples -->
  {{ Html::script('assets-panel/javascripts/forms/examples.wizard.js') }}
@endsection
