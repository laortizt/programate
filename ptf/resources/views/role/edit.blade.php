@extends('layouts.main', ['activePage' => 'role', 'titlePage' => ('editar rol')])

  @section('content')


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Editar rol</h4>
            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
          </div>
          <div class="card-body">
          <form action="{{url('/role/'.$role->id)}}" method="post" enctype="multipart/form-data" novalidate class="needs-validation">
                <!-- se incluye la vista del formulario  -->
                @csrf
                {{method_field('PATCH')}}
                @include('role.form')   
                
                <div class="row">
                <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                <div class="col-sm-7">
                  <div class="form-group">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <table class="table">
                          <tbody>
                            @foreach ($permissions as $id => $permission)
                            <tr>
                              <td>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="permissions[]"
                                      value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : '' }}>
                                    <span class="form-check-sign">
                                      <span class="check" value=""></span>
                                    </span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                {{ $permission }}
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



            </form>
           
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

@endsection