@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Contactos</h1>
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
        <div class="row  d-flex justify-content-center">
            <form action="{{ route('contacts.store') }}" method="POST" class="col-6">
                <div class="mb-3">
                    <label for="frist_name" class="form-label">Nombre</label>
                    <input type="text" name="frist_name" class="form-control" id="frist_name" value="{{ old('frist_name')}}" />
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Apellido</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name')}}"/>
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label">Número</label>
                    <input type="number" name="number" class="form-control" id="number" value="{{ old('number')}}"/>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{ old('email')}}"/>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    @csrf
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>
            </form>
        </div>
    </div>
       
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop