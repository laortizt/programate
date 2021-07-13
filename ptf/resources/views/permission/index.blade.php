@extends('layouts.main', ['activePage' => 'permission', 'titlePage' => ('permisos')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Listado de permisos registradas</h4>
                        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                    </div>
                    <div class="card-body">

                        <div class="container-fluid">

                            @if(Session::has('msn'))

                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('msn')}}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="mb-3">
                                <a class="btn btn-primary" href="{{url('/permission/create')}}" role="button">Añadir permiso</a>
                            </div>
                            <table class="table  table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Guard</th>
                                        <th scope="col">Fecha creación</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Borrar</h>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($permissions as $a)
                                    <tr>
                                        <th scope="row">{{$a->id}}</th>
                                        <td>{{$a->name}}</td>
                                        <td>{{$a->guard_name}}</td>
                                        <td>{{$a->created_at}}</td>

                                        <td>
                                            <a class="btn btn-primary" href="{{url('/permission/'.$a->id.'/show')}}" role="button">Ver<i class="material-icons">person</i></a>
                                        </td>
                                     
                                        <td>
                                            <a class="btn btn-primary" href="{{url('/permission/'.$a->id.'/edit')}}" role="button">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{url('/permission/'.$a->id)}}" method="post">
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
        </div>
    </div>
</div>


@endsection