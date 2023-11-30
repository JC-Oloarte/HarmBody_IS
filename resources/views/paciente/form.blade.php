

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre del paciente.') }}</label>
    <div>
        {{ Form::text('Nombre', $paciente->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el nombre del paciente. Ej <b>Fernando</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Apellido paterno del paciente.') }}</label>
    <div>
        {{ Form::text('Ap_Paterno', $paciente->Ap_Paterno, ['class' => 'form-control' .
        ($errors->has('Ap_Paterno') ? ' is-invalid' : ''), 'placeholder' => 'Ap Paterno']) }}
        {!! $errors->first('Ap_Paterno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el apellido paterno del paciente. Ej <b>Alonso</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Apellido materno del paciente.') }}</label>
    <div>
        {{ Form::text('Ap_Materno', $paciente->Ap_Materno, ['class' => 'form-control' .
        ($errors->has('Ap_Materno') ? ' is-invalid' : ''), 'placeholder' => 'Ap Materno']) }}
        {!! $errors->first('Ap_Materno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el apellido materno del paciente. Ej <b>Díaz</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Domicilio del paciente.') }}</label>
    <div>
        {{ Form::text('Domicilio', $paciente->Domicilio, ['class' => 'form-control' .
        ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
        {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el domicilio del paciente. Ej <b>Av. Ferrocarril #7</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Teléfono del paciente.') }}</label>
    <div>
        {{ Form::text('Telefono', $paciente->Telefono, ['class' => 'form-control' .
        ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el teléfono del paciente. Ej <b>7226680566</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo Electrónico del paciente.') }}</label>
    <div>
        {{ Form::text('Correo_Electronico', $paciente->Correo_Electronico, ['class' => 'form-control' .
        ($errors->has('Correo_Electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
        {!! $errors->first('Correo_Electronico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el correo electrónico del paciente. Ej <b>FernandoA@example.es</b>.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fecha de nacimiento del paciente (Año-Mes-Dia).') }}</label>
    <div>
        {{ Form::date('Fecha_Nac', $paciente->Fecha_Nac, ['class' => 'form-control' .
        ($errors->has('Fecha_Nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
        {!! $errors->first('Fecha_Nac', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa la fecha de nacimiento del paciente. Ej <b>1998-06-29</b>.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('pacientes.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
