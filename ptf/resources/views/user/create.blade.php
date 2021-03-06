@extends('layouts.main', ['activePage' => 'user', 'titlePage' => ('nuevo usuario')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Crear usuario</h4>

          </div>
          <div class="card-body">

            <form action="{{url('/user')}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
              @csrf
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Usuario</h4>
                  <p class="card-category">Ingresar datos</p>
                </div>
                <div class="card-body">
                  @include('user.form')
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection