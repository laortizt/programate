@extends('layouts.main', ['activePage' => 'user', 'titlePage' => ('nuevo usuario')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Listado de usuarios registradas</h4>
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
                            <!-- <div class="mb-3">
                                <a class="btn btn-primary" href="{{url('/category/create')}}" role="button">Nuevo</a>
                            </div> -->
                            <table class="table  table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Rol</th>
                                        <th scope="col">Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $a)
                                    <tr>
                                        <th scope="row">{{$a->id}}</th>

                                        <td>{{$a->name}}</td>
                                        <td>{{$a->email}}</td>
                                        <td>{{$a->telephone}}</td>

                                        @if ($a->type == 1)
                                            <td>Cliente</td>
                                        @elseif ($a->type == 2)
                                            <td>Profesional</td>
                                        @elseif ($a->type == 3)
                                            <td>Administrador</td>
                                        @endif

                                        <td>
                                            <a class="btn btn-primary" href="{{url('/user/'.$a->id.'/edit')}}" role="button">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{url('/user/'.$a->id)}}" method="post">
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