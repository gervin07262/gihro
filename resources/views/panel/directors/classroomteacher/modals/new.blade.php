<!-- Modal Form NEW-->
<div id="modal-form-new" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Añadir Nuevo Profesor</h2>
        </header>
        <div class="panel-body">
            <div id="msg-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Profesor Agregado Correctamente</strong>
            </div>
            <div id="msg-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong id="txt-error"></strong>
            </div>
            {{ Form::open(['class' => 'form-horizontal mb-lg', 'id' => 'form-new-teacher']) }}
                @include('panel.directors.teachers.forms.newTeacher')
            {{ Form::close() }}
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    {{ Form::button('Guardar', ['class' => 'btn btn-primary', 'id' => 'save-new-teacher']) }}
                    {{ Form::button('Cancelar', ['class' => 'btn btn-default modal-dismiss', 'id' => 'cancel-new']) }}
                    {{ Form::button('Cerrar', ['class' => 'btn btn-default modal-dismiss', 'id' => 'close-new']) }}
                </div>
            </div>
        </footer>
    </section>
</div>
<!-- END  Modal Form New -->
