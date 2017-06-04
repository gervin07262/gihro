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
                                  <h4 class="box-title">Eventos</h4>
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
                                  <h3 class="box-title">Crear evento</h3>
                                </div>
                                <div class="box-body">
                                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                    <ul class="fc-color-picker" id="color-chooser">
                                      <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                                      <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                                      <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                                      <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                                    </ul>
                                  </div>
                                  <!-- /btn-group -->
                                  <div class="input-group">
                                    <input id="new-event" type="text" class="form-control" placeholder="Titulo de evento">
                                    <div class="input-group-btn" id="content-btn-add-event">
                                      <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Agregar</button>
                                    </div>
                                    <!-- /btn-group -->
                                  </div><br/><br/>
                                  <!-- /input-group -->
                                  {{ Form::open(['route' => ['panelDirectors.calendar.store'], 'method' => 'POST', 'id' =>'form-calendario']) }}
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
    {{ Html::script('assets-panel/javascripts/theme-custom/directors/calendar.js') }}
@endsection
