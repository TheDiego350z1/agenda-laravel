@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Evento</h1>
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
                    <label for="frist_name" class="form-label">Nombre del evento</label>
                    <input type="text" name="frist_name" class="form-control" required id="frist_name" value="{{ old('frist_name')}}" />
                </div>
                <div class="form-floating">
                    <label for="descrip">Descripción del evento</label>
                    <textarea class="form-control" name="descrip" placeholder="Descripción del evento" id="descrip" style="height: 100px"></textarea>
                </div>
                <div>
                    <label for="contact_id">Contacto  Asignado</label>
                    <select class="form-select form-select-sm form-control" aria-label="Default select example">
                        @foreach($contacts as $contact)
                            <option value="{{$contact->id}}">{{$contact->frist_name}}</option>
                        @endforeach
                      </select>
                </div>
                <br>
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