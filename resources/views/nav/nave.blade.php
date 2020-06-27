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
                            Mamalonas <span class="caret"></span>
                        </a>
                        {{-- Acceso a los proyectos --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','resident.index')
                                <a class="dropdown-item" href="{{ route('resident.index') }}">Residents</a>
                            @endcan
                            @can('haveaccess','busines.index')
                                <a class="dropdown-item" href="{{ route('busines.index') }}">Business</a>
                            @endcan
                            @can('haveaccess','proyect.index')
                                <a class="dropdown-item" href="{{ route('proyect.index') }}">Proyects</a>
                            @endcan
                            @can('haveaccess','staff.index')
                                <a class="dropdown-item" href="{{ route('staff.index') }}">Staffs</a>
                            @endcan
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            tablas debiles <span class="caret"></span>
                        </a>
                        {{-- Acceso a los residentes --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @can('haveaccess','relative.index')
                                <a class="dropdown-item" href="{{ route('relative.index') }}">Relative</a>
                            @endcan
                            @can('haveaccess','titular.index')
                                <a class="dropdown-item" href="{{ route('titular.index') }}">Titulares</a>
                            @endcan
                            @can('haveaccess','report.index')
                                <a class="dropdown-item" href="{{ route('report.index') }}">Reports</a>
                            @endcan
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            tablas fuertes <span class="caret"></span>
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
