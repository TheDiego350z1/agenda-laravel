@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contactos</h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Número de Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <th scope="row"> {{ $contact->frist_name }} </th>
                    <td>{{$contact->last_name}}</td>
                    <td>{{$contact->number}}</td>
                    <td>{{$contact->email}}</td>
                    <td>
                        <a href="{{ route('contacts.edit', $contact)}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                    </td>
                    <td>
                        <a href="#">
                            <button class="btn btn-danger">Eliminar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
       
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop