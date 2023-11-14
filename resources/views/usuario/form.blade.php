
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_usuario') }}</label>
    <div>
        {{ Form::text('id_usuario', $usuario->id_usuario, ['class' => 'form-control' .
        ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('NomUsuario') }}</label>
    <div>
        {{ Form::text('NomUsuario', $usuario->NomUsuario, ['class' => 'form-control' .
        ($errors->has('NomUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Nomusuario']) }}
        {!! $errors->first('NomUsuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>NomUsuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Passw') }}</label>
    <div>
        {{ Form::text('Passw', $usuario->Passw, ['class' => 'form-control' .
        ($errors->has('Passw') ? ' is-invalid' : ''), 'placeholder' => 'Passw']) }}
        {!! $errors->first('Passw', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>Passw</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rol') }}</label>
    <div>
        {{ Form::text('id_rol', $usuario->id_rol, ['class' => 'form-control' .
        ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
        {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>id_rol</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::text('Estatus', $usuario->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">usuario <b>Estatus</b> instruction.</small>
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
