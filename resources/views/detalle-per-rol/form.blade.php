
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_permiso') }}</label>
    <div>
        <select class="form-control" name="id_permiso" id="id_permiso">
            @foreach($permisoCat as $permisoCats)
                <option value="{{ $permisoCats }}" >{{ $permisoCats }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_permiso', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detallePerRol <b>id_permiso</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rol') }}</label>
    <div>
        <select class="form-control" name="id_rol" id="id_rol">
            @foreach($rolCat as $rolCats)
                <option value="{{ $rolCats }}" >{{ $rolCats }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detallePerRol <b>id_rol</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::text('Estatus', $detallePerRol->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">detallePerRol <b>Estatus</b> instruction.</small>
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
