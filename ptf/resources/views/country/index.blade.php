@extends('layouts.main', ['activePage' => 'country', 'titlePage' => ('nuevo pais')])

@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Listado de paises registradas</h4>
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
                                <a class="btn btn-primary" href="{{url('/country/create')}}" role="button">Nuevo</a>
                            </div>
                            <table class="table table-hover table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Editar</th>
                                        <th scope="col">Borrar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($countries as $a)
                                    <tr>
                                        <th scope="row">{{$a->id}}</th>

                                        <td>{{$a->nameCountry}}</td>

                                        <td>
                                            <a class="btn btn-primary" href="{{url('/country/'.$a->id.'/edit')}}" role="button">Editar</a>
                                        </td>
                                        <td>
                                            <form action="{{url('/country/'.$a->id)}}" method="post">
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