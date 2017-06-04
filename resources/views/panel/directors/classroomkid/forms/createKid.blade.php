<div class="form-group mt-lg">
    {{ Form::label('name', 'Nombre', ['class' => 'col-sm-3 control-label']) }}
    <div class="col-sm-9">
        {{ Form::text('name',null,['class' => 'form-control', 'required' => 'required']) }}
    </div>
</div>
<div class="form-group mt-lg">
    {{ Form::label('surnames','Apellidos', ['class' => 'col-sm-3 control-label']) }}
    <div class="col-sm-9">
        {{ Form::text('surnames', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group mt-lg">
    {{ Form::label('email','Email', ['class' => 'col-sm-3 control-label']) }}
    <div class="col-sm-9">
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="form-group mt-lg">
    <div class="form-group">
        <label class="col-md-3 control-label">Subir Foto</label>
        <div class="col-md-6">
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
