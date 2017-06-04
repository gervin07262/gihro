<div class="row">
  <h2 class="panel-title form">Datos Personales</h2>
  <div class="col-sm-4">
      <div class="form-group">
        {{ Form::label('name','Nombre') }}
        {{ Form::text('name',null,['class'=>'form-control', 'maxlength'=>'100']) }}
      </div>
  </div>
  <div class="col-sm-4">
      <div class="form-group">
        {{ Form::label('surnames','Apellidos') }}
        {{ Form::text('surnames',null,['class'=>'form-control','maxlength'=>'100']) }}
      </div>
  </div>
  <div class="col-sm-4">
      <div class="form-group">
        <label>Cambiar Foto</label><br>
        <div class="col-md-6">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input">
                        <i class="fa fa-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
                    <span class="btn btn-default btn-file">
                        <span class="fileupload-new">Seleccionar</span>
                        <input type="file" name="path" />
                    </span>
                </div>
            </div>
        </div>
      </div>
  </div>
</div>
<div class="row">
    <h2 class="panel-title form">Datos de Acceso</h2>
    <div class="col-sm-4">
        <div class="form-group">
          {{ Form::label('email','Email') }}
          {{ Form::email('email',null,['class'=>'form-control', 'maxlength'=>'100']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
          {{ Form::label('password','Contraseña') }}
          {{ Form::password('password',['class'=>'form-control', 'maxlength'=>'100']) }}
        </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        {{ Form::label('repeat_password','Repetir Contraseña') }}
        {{ Form::password('repeat_password',['class'=>'form-control', 'maxlength'=>'100']) }}
      </div>
    </div>
</div>
