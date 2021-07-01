@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h3>Listado de categorías registradas</h3>

   

    @if(Session::has('msn'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('msn')}}!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="mb-3">
    <a class="btn btn-primary" href="{{url('/certficate/create')}}" role="button">Nuevo</a>
    </div>
    <table class="table table-dark table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Profesional</th>
                <th scope="col">Nombre del cargo</th>
                <th scope="col">Año de inicio</th>
                <th scope="col">Año de finalización</th>
                <th scope="col">Nombre de la compañia</th>
                <th scope="col">Certificado</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach($profesionals as $a)
            <tr>
                <th scope="row">{{$a->id}}</th>
                <td>{{$a->idprofesionalFK}}</td>
                <td>{{$a->jobTitle}}</td>
                <td>{{$a->anioIni}}</td>
                <td>{{$a->anioFin}}</td>
                <td>{{$a->companyName}}</td>
                <td>{{$a->doc}}</td>
               


                <td>
                    <a class="btn btn-primary" href="{{url('/certficate/'.$a->id.'/edit')}}" role="button">Editar</a>
                </td>
                <td>
                    <form action="{{url('/certficate/'.$a->id)}}" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="Borrar" onclick="return confirm('¿Esta seguro de eliminar el registro?')" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection