@extends('layouts.main', ['activePage' => 'project', 'titlePage' => ('nuevo proyecto')])

@section('content')

<!-- <div class="container-fluid">
    <h3>Listado de cetificados registrados</h3>

    @if(Session::has('msn'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{Session::get('msn')}}!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="mb-3">
    <a class="btn btn-primary" href="{{url('/project/create')}}" role="button">Nuevo</a>
    </div>
    <table class="table table-dark table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del proyecto</th>
                <th scope="col">Año inicio</th>
                <th scope="col">Año finalización</th>
                <th scope="col">Descripción</th>
                <th scope="col">Categoría</th>
                <th scope="col">idprofesionalFK</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesionals as $a)
            <tr>
                <th scope="row">{{$a->id}}</th>
               
                <td>{{$a->nameProject}}</td>
                <td>{{$a->anioIni}}</td>
                <td>{{$a->anioFin}}</td>
                <td>{{$a->description}}</td>
                <td>{{$a->idprofesionalFK}}</td>
                <td>{{$a->idcategoryFK}}</td>

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
</div> -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Listado de proyectos registradas</h4>

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
                                <a class="btn btn-primary" href="{{url('/project/create')}}" role="button">Nuevo</a>
                            </div> 
                            <table class="table  table-hover table-responsive">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre del proyecto</th>
                                        <th scope="col">Año inicio</th>
                                        <th scope="col">Año finalización</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Categoría</th>
                                        <th scope="col">idprofesionalFK</th>

                                    </tr>
                                </thead>
                                @foreach($profesionals as $a)
                                <tr>
                                    <th scope="row">{{$a->id}}</th>

                                    <td>{{$a->nameProject}}</td>
                                    <td>{{$a->anioIni}}</td>
                                    <td>{{$a->anioFin}}</td>
                                    <td>{{$a->description}}</td>
                                    <td>{{$profesionals->find($a->idprofesionalFK)->nombre}}</td>
                                    <td>{{$categories->find($a->idcategoryFK)->nombre}}</td>
                                    <td>{{$a->idcategoryFK}}</td>

                                    <td>
                                        <a class="btn btn-primary" href="{{url('/project/'.$a->id.'/edit')}}" role="button">Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{url('/project/'.$a->id)}}" method="post">
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
        </div>
    </div>
</div>
            @endsection