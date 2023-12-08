<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre de Usuario') }}</label>
    <div>
        {{ Form::text('NomUsuario', $usuario->NomUsuario, ['class' => 'form-control' .
        ($errors->has('NomUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Juan','maxlength' => 25,]) }}
        {!! $errors->first('NomUsuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese nombre de usuario. Ej <b>JuanOL</b>.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo del Usuario') }}</label>
    <div>
        {{ Form::text('CorrUsuario', $usuario->email, ['class' => 'form-control' .
        ($errors->has('CorrUsuario') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Juan','maxlength' => 30,'type' => 'email',]) }}
        {!! $errors->first('CorrUsuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese el correo del usuario. Ej <b>JuanOL_23@outlook.es</b>.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Contraseña de Usuario') }}</label>
    <div>
        {{ Form::text('Passw', $usuario->Passw, ['class' => 'form-control' .
        ($errors->has('Passw') ? ' is-invalid' : ''), 'placeholder' => 'Ej. Juan12','maxlength' => 25,]) }}
        {!! $errors->first('Passw', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese contraseña. Ej <b>Juan12</b>.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Rol de Usuario') }}</label>
    <div>
        {{ Form::select('id_rol', $roles->pluck('Nombre', 'id_rol'), $usuario->id_rol, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : '')]) }}
        {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Seleccione el rol del usuario.</small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::select('Estatus', ['1' => 'Activo', '0' => 'Inactivo'], $usuario->Estatus, ['class' => 'form-control' . ($errors->has('Estatus') ? ' is-invalid' : '')]) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Selecciona el estatus del usuario.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/usuarios" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
