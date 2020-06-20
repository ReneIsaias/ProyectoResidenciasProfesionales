<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img style="width:50px; height:50px; margin-right: .5rem;" src="asset/img/tesjiLogo.png"/>
        {{-- <a href="{{ url('/') }}"><img class="gato" href="{{ url('/') }}" src="asset/img/tesjiLogo.png"></a> --}}
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'T E S J I') }} --}}
            Residencias Profesionales
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                {{-- Urls que van al lado del nombre --}}
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                {{-- lista de urls --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Solicitud <span class="caret"></span>
                        </a>
                        {{-- Acceso a solicitudes --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Tramitar</a>
                            <a class="dropdown-item" href="#">Detalles</a>
                            <a class="dropdown-item" href="#">Estado</a>
                            <a class="dropdown-item" href="#">Solicitudes</a>
                            <a class="dropdown-item" href="#">Cancelar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Personal <span class="caret"></span>
                        </a>
                        {{-- Acceso al personal --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Academia</a>
                            <a class="dropdown-item" href="#">Asesores</a>
                            <a class="dropdown-item" href="#">Precidentes de Academia</a>
                            <a class="dropdown-item" href="#">Jefes de Divicion</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Proyectos <span class="caret"></span>
                        </a>
                        {{-- Acceso a los proyectos --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Proyectos</a>
                            <a class="dropdown-item" href="#">Revisar</a>
                            <a class="dropdown-item" href="#">Asignar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Residentes <span class="caret"></span>
                        </a>
                        {{-- Acceso a los residentes --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Registrar</a>
                            <a class="dropdown-item" href="#">Residentes</a>
                            <a class="dropdown-item" href="#">Evaluar</a>
                            <a class="dropdown-item" href="#">Proyectos</a>
                            <a class="dropdown-item" href="#">Actualizar</a>
                            <a class="dropdown-item" href="#">Archivos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Pruebas <span class="caret"></span>
                        </a>
                        {{-- Acceso a mis pruebas --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','career.index')
                                <a class="dropdown-item" href="{{ route('career.index') }}">Career</a>
                            @endcan
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        {{-- Acceso al perfil --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','role.index')
                                <a class="dropdown-item" href="{{ route('role.index') }}">Roles</a>
                            @endcan
                            @can('haveaccess','user.index')
                                <a class="dropdown-item" href="{{ route('user.index') }}">Users</a>
                            @endcan
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
