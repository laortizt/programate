@extends('layouts.main', ['activePage' => 'profesional', 'titlePage' => ('profesional')])

@section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Profesionales</h4>
          </div>
          <div class="card-body">
           
          <form action="{{url('/profesional')}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
               @csrf
               @include('profesional.form')
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>


@endsection