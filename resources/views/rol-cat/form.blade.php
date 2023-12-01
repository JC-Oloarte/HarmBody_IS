
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $rolCat->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el nombre del rol. Ej <b>Fisioterapeuta</b>.</small>
    </div>
</div>
<div class="form-group mb-3">


    <label class="form-label">{{ Form::label('Estatus', 'Estatus') }}</label>
    <div>
        {{ Form::select('Estatus', ['1' => 'Activo', '0' => 'Inactivo'], $rolCat->Estatus, ['class' => 'form-control' . ($errors->has('Estatus') ? ' is-invalid' : '')]) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Elige el estatus del rol (<b>Activo</b> o <b>Inactivo</b>).</small>
    </div>


</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="/rol-cats" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success ms-auto ajax-submit">Agregar</button>
            </div>
        </div>
    </div>
