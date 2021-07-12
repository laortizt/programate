@extends('layouts.main', ['activePage' => 'profesional', 'titlePage' => ('profesional')])

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
    <a class="btn btn-primary" href="{{url('/profesional/create')}}" role="button">Nuevo</a>
    </div>
    <table class="table table-dark table-hover table-responsive">
        <thead>
            <tr>
            
                <th scope="col">Id</th>
                <th scope="col">Años de experiencia</th>
                <th scope="col">Sobre mi</th>
                <th scope="col">Profesional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesionals as $a)
            <tr>
                <th scope="row">{{$a->id}}</th>
               
                <td>{{$a->yearsExperience}}</td>
                <td>{{$a->aboutMe}}</td>
                <td>{{$a->aboutMe}}</td>
                <td>{{$a->iduserFK}}</td>


                <td>
                    <a class="btn btn-primary" href="{{url('/profesional/'.$a->id.'/edit')}}" role="button">Editar</a>
                </td>
                <td>
                    <form action="{{url('/profesional/'.$a->id)}}" method="post">
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