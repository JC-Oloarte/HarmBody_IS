
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_permiso') }}</label>
    <div>
        {{ Form::text('id_permiso', $permisoCat->id_permiso, ['class' => 'form-control' .
        ($errors->has('id_permiso') ? ' is-invalid' : ''), 'placeholder' => 'Id Permiso']) }}
        {!! $errors->first('id_permiso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">permisoCat <b>id_permiso</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $permisoCat->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">permisoCat <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fecha_de_alta') }}</label>
    <div>
        {{ Form::text('Fecha_de_alta', $permisoCat->Fecha_de_alta, ['class' => 'form-control' .
        ($errors->has('Fecha_de_alta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha De Alta']) }}
        {!! $errors->first('Fecha_de_alta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">permisoCat <b>Fecha_de_alta</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::text('Estatus', $permisoCat->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">permisoCat <b>Estatus</b> instruction.</small>
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
