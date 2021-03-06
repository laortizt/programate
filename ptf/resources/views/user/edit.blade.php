@extends('layouts.main', ['activePage' => 'users', 'titlePage' => ('editar usuario')])

@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Editar usuario</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div class="card-body">
          <form action="{{url('/users/'.$users->id)}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
                <!-- se incluye la vista del formulario  -->
                @csrf
                {{method_field('PATCH')}}
                @include('user.form')    
            </form>
           
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

@endsection