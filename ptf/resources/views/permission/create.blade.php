@extends('layouts.main', ['activePage' => 'permission', 'titlePage' => ('nuevo permiso')])

@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Crear permiso</h4>
           
          </div>
          <div class="card-body">
           
            <form action="{{url('/permission')}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
                @csrf
                @include('permission.form')
                
              </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection