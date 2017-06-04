@extends('layouts.panel')
@section('csss')
  {{ Html::style('assets-panel/vendor/jquery-ui/jquery-ui.css') }}
  {{ Html::style('assets-panel/vendor/jquery-ui/jquery-ui.theme.css') }}
  {{ Html::style('assets-panel/vendor/fullcalendar/fullcalendar.min.css') }}
  <?php /*{{ Html::style('assets-panel/vendor/fullcalendar/fullcalendar.print.css') }} */ ?>
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
                        <div class="tab-pane active">
                          <div class="row">
                            <div class="col-md-3">
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h4 class="box-title">Menus Clase ....</h4>
                                </div>
                                <div class="box-body">
                                  <!-- the events -->
                                  <div id="external-events">
                                    <div class="checkbox">
                                      <label for="drop-remove">
                                        <input type="checkbox" id="drop-remove">
                                        Eliminar al asignar
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /. box -->
                              <div class="box box-solid">
                                <div class="box-header with-border">
                                  <h3 class="box-title">Crear Menú</h3>
                                </div>
                                <div class="box-body">
                                  <!-- /btn-group -->
                                  <div class="input-group">
                                    <textarea id="new-event" class="form-control" placeholder="Descripción de menú"></textarea>
                                    <div class="input-group-btn" id="content-btn-add-event">
                                      <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
                                    </div>
                                    <!-- /btn-group -->
                                  </div><br/><br/>
                                  <!-- /input-group -->
                                  {{ Form::open(['route' => ['panelDirectors.classrooms.menus.store', Request::segment(3)], 'method' => 'POST', 'id' =>'form-calendario']) }}
                                  {{ Form::close() }}
                                </div>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                              <div class="box box-primary">
                                <div class="box-body no-padding">
                                  <!-- THE CALENDAR -->
                                  <div id="calendar"></div>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /. box -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
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
    {{ Html::script('assets-panel/vendor/jquery-ui/jquery-ui.js') }}
    {{ Html::script('assets-panel/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}
    {{ Html::script('assets-panel/vendor/moment/moment.min.js') }}
    {{ Html::script('assets-panel/vendor/fullcalendar/fullcalendar.min.js') }}
    {{ Html::script('assets-panel/javascripts/theme-custom/directors/classroom-menu.js') }}
@endsection
