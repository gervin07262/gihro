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
                            @include('panel.directors.teacher.modals.new')
                            @include('panel.directors.teacher.modals.edit')
                            <form class="form-horizontal"  method="post">
                                <table id="filters">
                                    <tr>
                                        <td>
                                            <label id="search"><input type="search" class="form-control" placeholder="Buscar" aria-controls="datatable-editable"></label>
                                        </td>
                                        <td>
                                            <div class="mb-md">
                                                <select class="form-control input-sm mb-md">
                                                    <option>5</option>
                                                    <option>10</option>
                                                    <option>20</option>
                                                    <option>50</option>
                                                    <option>Todos</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="mb-md">
                                                <a class="modal-with-form btn btn-default btn btn-success" href="#modal-form-new">Añadir <i class="fa fa-plus"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                @php ($j=1)
                                @foreach ($teachers as $teacher)
                                    @if ($j==1)
                                        <fieldset>
                                    @endif
                                            <section class="body-sign body-locked">
                                                <div class="panel panel-sign">
                                                    <div class="panel-body">
                                                        <div class="current-user text-center">
                                                          {{ HTML::image('assets-panel/images/!logged-user.jpg', 'Joseph Doe Junior',
                                                          ['class' => 'img-circle user-image']) }}
                                                            <h2 class="user-name text-dark m-none">{{ $teacher->name }} {{ $teacher->surnames }}</h2>
                                                            <p class="user-email m-none">Nombre Clase</p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-6 text-right">
                                                                <a  class="modal-with-form btn btn-primary btn-edit-teacher" href="#modal-form-edit" onclick="getDataTeacher({{ $teacher->id }})" >Editar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                    @if (fmod($j, 4) == 0 || $j==$num_rows)
                                        @php ($j=1)
                                        </fieldset>
                                    @else
                                        @php ($j++)
                                    @endif
                                @endforeach
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
@section('javascripts')
    <!-- Specific Page Vendor for teachers froms open form modal-->
    {{ Html::script('assets-panel/vendor/pnotify/pnotify.custom.js') }}
@endsection
@section('javascriptsCustom')
  {{ Html::script('assets-panel/javascripts/theme-custom/directors/teacher.js') }}
@endsection
@section('examples')
    <!-- Examples  for teachers froms open form moda -->
    {{ Html::script('assets-panel/javascripts/ui-elements/examples.modals.js') }}
@endsection
