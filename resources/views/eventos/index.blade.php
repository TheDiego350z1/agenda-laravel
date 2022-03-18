@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Eventos</h1>
@stop

@section('content')
    <div class="card-body">
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif
    </div>
    <div class="container">
        @foreach($events as $event)
            <div class="row d-flex justify-content-center">
                <div class="card w-75">
                    <div class="card-body">
                        <h4><b>{{ $event->name }}</b></h4>
                        <h5>{{ $event->frist_name, $event->last_name}}</h5>
                        <p class="card-text">{{ $event->descrip }}</p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('events.update', $event->id) }}" class="btn btn-primary">
                                Confirmar Asistencia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        {{-- {{dd($events)}} --}}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop