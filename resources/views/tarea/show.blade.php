@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? 'Show Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarea->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $tarea->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $tarea->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tarea->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{$tareas}}
    </section>
@endsection
