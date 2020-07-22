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
                            Tramites <span class="caret"></span>
                        </a>
                        {{-- Acceso a los proyectos --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','resident.index')
                                <a class="dropdown-item" href="{{ route('resident.index') }}">Residentes</a>
                            @endcan
                            @can('haveaccess','busines.index')
                                <a class="dropdown-item" href="{{ route('busines.index') }}">Empresas</a>
                            @endcan
                            @can('haveaccess','proyect.index')
                                <a class="dropdown-item" href="{{ route('proyect.index') }}">Proyectos</a>
                            @endcan
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Auxiliares <span class="caret"></span>
                        </a>
                        {{-- Acceso a los residentes --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','relative.index')
                                <a class="dropdown-item" href="{{ route('relative.index') }}">Familiares</a>
                            @endcan
                            @can('haveaccess','titular.index')
                                <a class="dropdown-item" href="{{ route('titular.index') }}">Titulares</a>
                            @endcan
                            @can('haveaccess','report.index')
                                <a class="dropdown-item" href="{{ route('report.index') }}">Reportes</a>
                            @endcan
                            @can('haveaccess','persona.index')
                                <a class="dropdown-item" href="{{ route('persona.index') }}">Estudiantes</a>
                            @endcan
                            @can('haveaccess','calificar.index')
                                <a class="dropdown-item" href="{{ route('calificar.index') }}">Calificar</a>
                            @endcan
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Configuracion <span class="caret"></span>
                        </a>
                        {{-- Acceso a mis pruebas --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','career.index')
                                <a class="dropdown-item" href="{{ route('career.index') }}">Career</a>
                            @endcan
                            @can('haveaccess','covenant.index')
                                <a class="dropdown-item" href="{{ route('covenant.index') }}">Convenant</a>
                            @endcan
                            @can('haveaccess','semester.index')
                                <a class="dropdown-item" href="{{ route('semester.index') }}">Semester</a>
                            @endcan
                            @can('haveaccess','studyplan.index')
                                <a class="dropdown-item" href="{{ route('studyplan.index') }}">Study Plan</a>
                            @endcan
                            @can('haveaccess','typebeca.index')
                                <a class="dropdown-item" href="{{ route('typebeca.index') }}">Type Beca</a>
                            @endcan
                            @can('haveaccess','typesafe.index')
                                <a class="dropdown-item" href="{{ route('typesafe.index') }}">Type Save</a>
                            @endcan
                            @can('haveaccess','typefamily.index')
                                <a class="dropdown-item" href="{{ route('typefamily.index') }}">Type Family</a>
                            @endcan
                            @can('haveaccess','post.index')
                                <a class="dropdown-item" href="{{ route('post.index') }}">Post</a>
                            @endcan
                            @can('haveaccess','degrestudy.index')
                                <a class="dropdown-item" href="{{ route('degrestudy.index') }}">Degree Study</a>
                            @endcan
                            @can('haveaccess','sector.index')
                                <a class="dropdown-item" href="{{ route('sector.index') }}">Sector</a>
                            @endcan
                            @can('haveaccess','situationproyect.index')
                                <a class="dropdown-item" href="{{ route('situationproyect.index') }}">Situation Project</a>
                            @endcan
                            @can('haveaccess','turn.index')
                                <a class="dropdown-item" href="{{ route('turn.index') }}">Turn</a>
                            @endcan
                            @can('haveaccess','typefile.index')
                                <a class="dropdown-item" href="{{ route('typefile.index') }}">Type File</a>
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
                            @can('haveaccess','userown.show')
                                <a class="dropdown-item" href="{{ route('user.show', Auth::user()->id ) }}">Perfil</a>
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
