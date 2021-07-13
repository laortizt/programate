@extends('layouts.main', ['activePage' => 'permission', 'titlePage' => ('detalle permiso')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Detalle permiso</h4>
            <p class="card-category">vista detallada del permiso {{$permissions->name}}</p>
          </div>
          
          <div class="card-body">

            @if (session('success'))
              <div class="alert alert-success" role="success">
              </div>
            @endif 

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-user">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="author">
                                    <a href="#">
                                        <h5 class="title mt-3">{{$permissions->name}}</h5>
                                    </a>

                                    <p class="description">
                                      {{$permissions->guard_name}}
                                      {{$permissions->created_at}}
                                    </p>
                                </div>                            
                            </p>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection