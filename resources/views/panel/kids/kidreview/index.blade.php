@extends('layouts.panel')
@section('csss')
  <!-- Specific Page Vendor CSS -->
  {{ Html::style('assets-panel/vendor/select2/select2.css') }}
  {{ Html::style('assets-panel/vendor/jquery-datatables-bs3/assets/css/datatables.csss') }}
@endsection
@section('sidebarLeft')
  @include('panel.partials.sidebar-left-kids')
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
  				@include('panel.tabs.kids')
  				<div class="tab-content">
  					<div class="list-items"  class="tab-pane active">
  						<form class="form-horizontal"  method="post">
  							<h2 class="panel-title">Agenda de Niño Fulanito</h2>
  							<div class="mb-md">
                  {{ link_to('panelKids/kids/'.Request::segment(3).'/reviews/'.
                  $lastReviewId, $title = 'Ver Agenda de Hoy',
                  $attributes = ['class' => 'modal-with-form btn btn-default btn btn-success',
                  'style' => 'margin: 11px 0 0 0'],
                  $secure = null) }}
                </div>
  							<table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
  									<thead>
  										<tr>
  											<th>Fecha</th>
  											<th>Observaciones</th>
  											<th>Acciones</th>
  										</tr>
  									</thead>
  									<tbody>
  										@foreach ($reviews as $review)
  											<tr class="gradeX">
  												<td>15/02/2014</td>
  												<td>{{ $review->observations }}</td>
                          <td>
                            <a href="/panelKids/kids/{{ Request::segment(3) }}/reviews/{{ $review->id }}" class="on-default edit-row"><i class="fa fa-file-o"></i></a>
                          </td>
  											</tr>
  										 @endforeach
  									</tbody>
  								</table>
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
    {{ Html::script('assets-panel/vendor/select2/select2.js') }}
    {{ Html::script('assets-panel/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}
    {{ Html::script('assets-panel/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}
    {{ Html::script('assets-panel/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}
@endsection
@section('examples')
  <!-- Examples  for data table in list dairy-->
  {{ Html::script('assets-panel/javascripts/tables/examples.datatables.default.js') }}
  {{ Html::script('assets-panel/javascripts/tables/examples.datatables.row.with.details.js') }}
  {{ Html::script('assets-panel/javascripts/tables/examples.datatables.tabletools.js') }}
@endsection
