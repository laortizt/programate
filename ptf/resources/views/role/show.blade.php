@extends('layouts.main', ['activePage' => 'role', 'titlePage' => 'Detalles del rol'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          
          <div class="card-header card-header-primary">
            <h4 class="card-title">Detalle del role</h4>
            <p class="card-category">Vista detallada del rol {{$role->name }}</p>
          </div>
          
          <div class="card-body">
            <div class="row">
             
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>

                        <a href="#">
                          <h5 class="title mt-3">{{$role->name }}</h5>
                        </a>

                        <p class="description">
                          {{ $role->guard_name }} <br>
                          {{ $role->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                      @forelse ($role->permissions as $permission)
                          <span class="badge rounded-pill bg-dark text-white">{{ $permission->name }}</span>
                      @empty
                          <span class="badge badge-danger bg-danger">No hay permisos agregados</span>
                      @endforelse
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
  </div>
</div>
@endsection