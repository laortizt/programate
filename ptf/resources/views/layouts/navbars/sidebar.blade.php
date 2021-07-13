<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('GOD KNOWS') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <!-- <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li> -->
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i class="material-icons">library_books</i>
          <p>{{ __('Administrador') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <!-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li> -->
            <li class="nav-item{{ $activePage == 'user' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/user')}}">
                <i class="material-icons">people_alt</i>
                <span class="sidebar-normal"> {{ __('Usuarios') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'permission' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/permission')}}">
                <i class="material-icons">vpn_key</i>
                <span class="sidebar-normal"> {{ __('Permisos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'role' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/role')}}">
                <i class="material-icons">manage_accounts</i>
                <span class="sidebar-normal"> {{ __('Roles') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/category')}}">
                <i class="material-icons">category</i>
                <p>{{ __('Categorías') }}</p>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'country' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/country')}}">
                <i class="material-icons">emoji_flags</i>
                <p>{{ __('Paises') }}</p>
              </a>
            </li>


          </ul>

        </div>

      </li>

      <!-- profesionals-->
      <li class="nav-item {{ ($activePage == 'profesional' || $activePage == 'profesional-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample2" aria-expanded="true">
          <i class="material-icons">library_books</i>
          <p>{{ __('Profesional') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample2">
          <ul class="nav">
            
            <li class="nav-item{{ $activePage == 'project' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/project')}}">
                <i class="material-icons">people_alt</i>
                <span class="sidebar-normal"> {{ __('Projectos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'certificate' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/certificate')}}">
                <i class="material-icons">vpn_key</i>
                <span class="sidebar-normal"> {{ __('Certificados') }} </span>
              </a>
            </li>
            
          </ul>

        </div>

      </li>

      <!-- client-->
      <li class="nav-item {{ ($activePage == 'profesional' || $activePage == 'profesional-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample3" aria-expanded="true">
          <i class="material-icons">library_books</i>
          <p>{{ __('Cliente') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample3">
          <ul class="nav">
            
            <li class="nav-item{{ $activePage == 'project' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/user')}}">
                <i class="material-icons">people_alt</i>
                <span class="sidebar-normal"> {{ __('Profesionales') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'certificate' ? ' active' : '' }}">
              <a class="nav-link" href="{{url('/permission')}}">
                <i class="material-icons">vpn_key</i>
                <span class="sidebar-normal"> {{ __('Certificados') }} </span>
              </a>
            </li>
            
          </ul>

        </div>

      </li>








    </ul>

    
    
  </div>

  
</div>
