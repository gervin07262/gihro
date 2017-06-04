@extends('layouts.panel')
@section('csss')
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
              <li><span>Director</span></li>
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
                        <div id="profile"  class="tab-pane active">
                            @include('alerts.success')
                            {{ Form::model($profile,['route' =>['panelDirectors.profile.update', $profile->id], 'method' => 'PUT', 'files' => true]) }}﻿
                                @include('panel.directors.profile.forms.profile')
                                {{Form::hidden('center_id', $profile->center_id) }}
                                {{Form::hidden('user_id', $profile->user_id) }}
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-9 col-md-offset-3">
                                            {{ Form::submit('Guardar',['class' => 'btn btn-primary']) }}
                                            {{ Form::reset('Cancelar',['class' => 'btn btn-default']) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close()}}
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
  {{ Html::script('assets-panel/javascripts/theme-custom/directors/profile.js') }}
@endsection
