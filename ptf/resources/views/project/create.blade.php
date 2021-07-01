@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <h1>Registrar Proyectos</h1>

    <div class="card" style="width: 15rem; margin: 20px auto;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <form action="{{url('/project')}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
               
                <!-- se incluye la vista del formulario  -->
                @csrf
                @include('project.form')
                
                </form>
        </div>

        
    </div>
</div>




@endsection