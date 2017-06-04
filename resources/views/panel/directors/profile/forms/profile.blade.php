<div class="row">
  <h2 class="panel-title form">Datos Personales</h2>
  <div class="col-sm-3">
    <div class="form-group">
      {{ Form::label('name','Nombre') }}
      {{ Form::text('name',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      {{ Form::label('surnames','Apellidos') }}
      {{ Form::text('surnames',null,['class'=>'form-control','maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      {{ Form::label('dni','DNI') }}
      {{ Form::text('dni',null,['class'=>'form-control','maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-3">
      <label>Cambiar Foto</label><br>
      <div class="col-sm-6">
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
<div class="row">
  <h2 class="panel-title form">Datos del Centro</h2>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('name_center','Nombre Centro') }}
      {{ Form::text('name_center',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('code','Código Centro') }}
      {{ Form::text('code',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('address','Dirección') }}
      {{ Form::text('address',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('cp','CP') }}
      {{ Form::text('cp',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      {{ Form::label('phone','Teléfono') }}
      {{ Form::text('phone',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      {{ Form::label('province_id','Provincia') }}
      <?php $selectedProvince = ($profile->province_id) ? $profile->province_id : null; ?>
      {{ Form::select('province_id',$provinces,$selectedProvince,['class' => 'form-control provinces']) }}
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      {{ Form::label('location_id','Localidad') }}
      <?php $selectedLocation = ($profile->location_id) ? $profile->location_id : null; ?>
      {{ Form::select('location_id',$locations,$selectedLocation,['class' => 'form-control locations']) }}
    </div>
  </div>
</div>
<div class="row">
  <h2 class="panel-title form">Datos de Acceso</h2>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('email','Email') }}
      {{ Form::email('email',null,['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('password','Contraseña') }}
      {{ Form::password('password',['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      {{ Form::label('repeat_password','Repetir Contraseña') }}
      {{ Form::password('repeat_password',['class'=>'form-control', 'maxlength'=>'100']) }}
    </div>
  </div>
</div>
