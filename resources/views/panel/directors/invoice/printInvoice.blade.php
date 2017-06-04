@extends('layouts.panel-simple')
@section('csss')
  <!-- Invoice Print Style -->
  {{ Html::style('stylesheets/invoice-print.css') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-directors')
@endsection
@section('content')
  @include('panel.directors.invoice.templates.invoice')
@endsection
@section('javascripts')
  <script>
    window.print();
  </script>
@endsection
