<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre del ejercicio') }}</label>
    <div>
        {{ Form::text('Nombre', $ejercicio->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa el nombre del ejercicio. Ej <b>Estiramiento de Espalda Baja</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Descripcion') }}</label>
    <div>
        {{ Form::text('Descripcion', $ejercicio->Descripcion, ['class' => 'form-control' .
        ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingresa la descripción del ejercicio. Ej <b>Este ejercicio está diseñado para...</b></small>
    </div>
</div>

<div class="form-group mb-3">
    <label class="form-label">{{ Form::label('Estatus', 'Estatus') }}</label>
    <div>
        {{ Form::select('Estatus', ['1' => 'Activo', '0' => 'Inactivo'], $ejercicio->Estatus, ['class' => 'form-control' . ($errors->has('Estatus') ? ' is-invalid' : '')]) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Elige el estatus del ejercicio (<b>Activo</b> o <b>Inactivo</b>).</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('ejercicios.index') }}" class="btn btn-danger">Cancelar</a>
                
                <button type="submit" class="btn btn-success ms-auto ajax-submit">Añadir</button>
            </div>
        </div>
    </div>
