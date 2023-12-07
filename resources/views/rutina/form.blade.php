<!--
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_rutina') }}</label>
    <div>
        {{ Form::text('id_rutina', $rutina->id_rutina, ['class' => 'form-control' .
        ($errors->has('id_rutina') ? ' is-invalid' : ''), 'placeholder' => 'Id Rutina']) }}
        {!! $errors->first('id_rutina', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>id_rutina</b> instruction.</small>
    </div>
</div>
-->
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $rutina->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Estatus') }}</label>
    <div>
        {{ Form::text('Estatus', $rutina->Estatus, ['class' => 'form-control' .
        ($errors->has('Estatus') ? ' is-invalid' : ''), 'placeholder' => 'Estatus']) }}
        {!! $errors->first('Estatus', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>Estatus</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Paciente') }}</label>
    <div>
        <select class="form-control" name="id_paciente" id="id_paciente">
            @foreach($paciente as $pacientes)
                <option value="{{ $pacientes->id_Paciente }}" >{{ $pacientes->Nombre }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_paciente', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>id_paciente</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Descripcion') }}</label>
    <div>
        {{ Form::text('Descripcion', $rutina->Descripcion, ['class' => 'form-control' .
        ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>Descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Usuario') }}</label>
    <div>
    <select class="form-control" name="id_usuario" id="id_usuario">
            @foreach($usuario as $usuarios)
                <option value="{{ $usuarios->id_usuario }}" >{{ $usuarios->NomUsuario }}</option>
            @endforeach
        </select>
        {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>id_usuario</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fecha_Rutina') }}</label>
    <div>
        {{ Form::date('Fecha_Rutina', $rutina->Fecha_Rutina, ['class' => 'form-control' .
        ($errors->has('Fecha_Rutina') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Rutina']) }}
        {!! $errors->first('Fecha_Rutina', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">rutina <b>Fecha_Rutina</b> instruction.</small>
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
