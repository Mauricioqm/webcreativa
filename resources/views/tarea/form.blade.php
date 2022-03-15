<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tarea->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio', $tarea->fecha_inicio, ['class' => 'form-control' . ($errors->has('fecha_inicio') ? ' is-invalid' : ''), 'placeholder' => 'YYYY-MM-DD']) }}
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $tarea->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'YYYY-MM-DD']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{-- {{ Form::label('estado') }} --}}
            <label>Estado {{$tarea->estado}}</label>
            <select id="estado" required="" name="estado" class="form-control" placeholder = "Estado">
                <option value="">Estado</option>
                <option {{ ($tarea->estado) == 'Iniciada' ? 'selected' : '' }}  value="Iniciada">Iniciada</option>
                <option {{ ($tarea->estado) == 'En proceso' ? 'selected' : '' }}  value="En proceso">En proceso</option>
                <option {{ ($tarea->estado) == 'Cancelada' ? 'selected' : '' }}  value="Cancelada">Cancelada</option>
                <option {{ ($tarea->estado) == 'Completada' ? 'selected' : '' }}  value="Completada">Completada</option>
              </select>
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>








    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>