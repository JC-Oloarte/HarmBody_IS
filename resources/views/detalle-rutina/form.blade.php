

<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Rutina') }}</label>
    <div>
        <select class="form-control" name="id_rutina" id="id_rutina">
            @foreach($rutina as $rutinas)
                <option value="{{ $rutinas->id_rutina }}" >{{ $rutinas->Nombre }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_rutina', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>id_rutina</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Ejercicio') }}</label>
    <div>
        <select class="form-control" name="id_ejercicio" id="id_ejercicio">
            @foreach($ejercicio as $ejercicios)
                <option value="{{ $ejercicios->id_ejercicio }}" >{{ $ejercicios->Nombre }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_ejercicio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>id_ejercicio</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Series') }}</label>
    <div>
        {{ Form::text('Series', $detalleRutina->Series, ['class' => 'form-control' .
        ($errors->has('Series') ? ' is-invalid' : ''), 'placeholder' => 'Series']) }}
        {!! $errors->first('Series', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>Series</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Repeticiones') }}</label>
    <div>
        {{ Form::text('Repeticiones', $detalleRutina->Repeticiones, ['class' => 'form-control' .
        ($errors->has('Repeticiones') ? ' is-invalid' : ''), 'placeholder' => 'Repeticiones']) }}
        {!! $errors->first('Repeticiones', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>Repeticiones</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::select('Estatus', ['1' => 'Activo', '0' => 'Inactivo'], $detalleRutina->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : '')]) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>Estatus</b> instruction.</small>
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
