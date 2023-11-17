
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_Paciente') }}</label>
    <div>
        {{ Form::text('id_Paciente', $paciente->id_Paciente, ['class' => 'form-control' .
        ($errors->has('id_Paciente') ? ' is-invalid' : ''), 'placeholder' => 'Id Paciente']) }}
        {!! $errors->first('id_Paciente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>id_Paciente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $paciente->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Ap_Paterno') }}</label>
    <div>
        {{ Form::text('Ap_Paterno', $paciente->Ap_Paterno, ['class' => 'form-control' .
        ($errors->has('Ap_Paterno') ? ' is-invalid' : ''), 'placeholder' => 'Ap Paterno']) }}
        {!! $errors->first('Ap_Paterno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Ap_Paterno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Ap_Materno') }}</label>
    <div>
        {{ Form::text('Ap_Materno', $paciente->Ap_Materno, ['class' => 'form-control' .
        ($errors->has('Ap_Materno') ? ' is-invalid' : ''), 'placeholder' => 'Ap Materno']) }}
        {!! $errors->first('Ap_Materno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Ap_Materno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Domicilio') }}</label>
    <div>
        {{ Form::text('Domicilio', $paciente->Domicilio, ['class' => 'form-control' .
        ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
        {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Domicilio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Telefono') }}</label>
    <div>
        {{ Form::text('Telefono', $paciente->Telefono, ['class' => 'form-control' .
        ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo_Electronico') }}</label>
    <div>
        {{ Form::text('Correo_Electronico', $paciente->Correo_Electronico, ['class' => 'form-control' .
        ($errors->has('Correo_Electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
        {!! $errors->first('Correo_Electronico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Correo_Electronico</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fecha_Nac') }}</label>
    <div>
        {{ Form::text('Fecha_Nac', $paciente->Fecha_Nac, ['class' => 'form-control' .
        ($errors->has('Fecha_Nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
        {!! $errors->first('Fecha_Nac', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">paciente <b>Fecha_Nac</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
