<form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card card-login card-hidden ">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Registro') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body ">
            <!-- <p class="card-description text-center">{{ __('Or Be Classical') }}</p> -->


            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Nombre completo') }}" value="{{ old('name') }}" required>
              </div>
              @if ($errors->has('name'))
                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                  <strong>{{ $errors->first('name') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">mail_outline</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correo') }}" value="{{ old('email') }}" required>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contrase??a') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirmar contrase??a') }}" required>
              </div>
              @if ($errors->has('password_confirmation'))
                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('telephone') ? ' has-danger' : '' }}  mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">phone</i>
                  </span>
                </div>
                <input type="text" name="telephone" class="form-control" placeholder="{{ __('Celular') }}" value="{{ old('telephone') }}" required>
              </div>
              @if ($errors->has('telephone'))
                <div id="telephone-error" class="error text-danger pl-3" for="telephone" style="display: block;">
                  <strong>{{ $errors->first('telephone') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('idcountryFK') ? ' has-danger' : '' }} mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">outlined_flag</i>
                  </span>
                </div>
                
                <select class="form-control"  name='idcountryFK' placeholder="{{ __('Pa??s...') }}" value="{{ old('idcountryFK') }}"required >
                    <option selected>Selecione su pa??s</option>
                    @foreach($countries as $c)
                        <option value="{{$c->id}}">{{$c->nameCountry}}</option>
                    @endforeach
                </select>
              </div>
              
              @if ($errors->has('idcountryFK'))
                <div id="idcountryFK-error" class="error text-danger pl-3" for="idcountryFK" style="display: block;">
                  <strong>{{ $errors->first('idcountryFK') }}</strong>
                </div>
              @endif
            </div>

            <div class="bmd-form-group{{ $errors->has('type') ? ' has-danger' : '' }} mt-2">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">perm_identity</i>
                  </span>
                </div>
                
                <select class="form-control" name='type' placeholder="{{ __('Rol...') }}" value="{{ old('type') }}" required >
                  <option selected>Selecione el rol</option>
                  <option value="1">Cliente</option>
                  <option value="2">Profesional</option>
                </select>
              </div>
              
              @if ($errors->has('type'))
                <div id="type-error" class="error text-danger pl-3" for="type" style="display: block;">
                  <strong>{{ $errors->first('type') }}</strong>
                </div>
              @endif
            </div>


            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" id="policy" name="policy">
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('Acepto') }} <a href="#">{{ __('t??rminos y condici??nes') }}</a>
              </label>
            </div>
          </div>

          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Crear cuenta') }}</button>
          </div>
        </div>
      </form>