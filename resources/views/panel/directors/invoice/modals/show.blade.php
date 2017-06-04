<!-- Modal Invoie-->
<div id="modal-invoice-show" class="modal-block modal-block-full mfp-hide">
  <section class="panel">
    <header class="panel-heading">
        <h2 class="panel-title">Fecha Factura: 15/12/2017</h2>
    </header>
    <div class="panel-body">
      @include('panel.directors.invoice.templates.invoice')
    </div>
    <footer class="panel-footer">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="/panelDirectors/invoices/4/printInvoice" target="_blank" class="btn btn-primary ml-sm"><i class="fa fa-print"></i> Imprimir</a>
                {{ Form::button('Cerrar', ['class' => 'btn btn-default modal-dismiss']) }}
            </div>
        </div>
    </footer>
  </section>
</div>
<!-- End Modal Invoie-->
