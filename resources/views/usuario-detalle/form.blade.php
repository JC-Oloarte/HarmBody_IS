
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $usuarioDetalle->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $usuarioDetalle->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ApPaterno') }}</label>
    <div>
        {{ Form::text('ApPaterno', $usuarioDetalle->ApPaterno, ['class' => 'form-control' .
        ($errors->has('ApPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Appaterno']) }}
        {!! $errors->first('ApPaterno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>ApPaterno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ApMaterno') }}</label>
    <div>
        {{ Form::text('ApMaterno', $usuarioDetalle->ApMaterno, ['class' => 'form-control' .
        ($errors->has('ApMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apmaterno']) }}
        {!! $errors->first('ApMaterno', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>ApMaterno</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Domicilio') }}</label>
    <div>
        {{ Form::text('Domicilio', $usuarioDetalle->Domicilio, ['class' => 'form-control' .
        ($errors->has('Domicilio') ? ' is-invalid' : ''), 'placeholder' => 'Domicilio']) }}
        {!! $errors->first('Domicilio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>Domicilio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Telefono') }}</label>
    <div>
        {{ Form::text('Telefono', $usuarioDetalle->Telefono, ['class' => 'form-control' .
        ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>Telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo') }}</label>
    <div>
        {{ Form::text('Correo', $usuarioDetalle->Correo, ['class' => 'form-control' .
        ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuarioDetalle <b>Correo</b> instruction.</small>
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
