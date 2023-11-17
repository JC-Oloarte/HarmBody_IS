
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rutina_det') }}</label>
    <div>
        {{ Form::text('id_rutina_det', $detalleRutina->id_rutina_det, ['class' => 'form-control' .
        ($errors->has('id_rutina_det') ? ' is-invalid' : ''), 'placeholder' => 'Id Rutina Det']) }}
        {!! $errors->first('id_rutina_det', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>id_rutina_det</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rutina') }}</label>
    <div>
        {{ Form::text('id_rutina', $detalleRutina->id_rutina, ['class' => 'form-control' .
        ($errors->has('id_rutina') ? ' is-invalid' : ''), 'placeholder' => 'Id Rutina']) }}
        {!! $errors->first('id_rutina', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detalleRutina <b>id_rutina</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_ejercicio') }}</label>
    <div>
        {{ Form::text('id_ejercicio', $detalleRutina->id_ejercicio, ['class' => 'form-control' .
        ($errors->has('id_ejercicio') ? ' is-invalid' : ''), 'placeholder' => 'Id Ejercicio']) }}
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
        {{ Form::text('Estatus', $detalleRutina->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
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
