@extends('layouts.app')

@section('content')

<div class="normal">

    <center>
        <h1><p class="text-success">TECNOLOGICO DE ESTUDIOS SUPERIORES DE JILOTEPEC</p></h1>
        <hr>
    </center>

    {{-- CAROUSEL --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/ActividadExtraEscolar.png" class="d-block w-100" alt="ActividadExtraEscolar">
        </div>
        <div class="carousel-item">
            <img src="img/Seguro-Estudinatil.png" class="d-block w-100" alt="Alumnos">
        </div>
        <div class="carousel-item">
            <img src="img/Marco_Juridico.png" class="d-block w-100" alt="convocatoriasFull">
        </div>
        <div class="carousel-item">
            <img src="img/Egresados 2019.png" class="d-block w-100" alt="Egresados">
        </div>
        <div class="carousel-item">
            <img src="img/IngLogística.png" class="d-block w-100" alt="IngLogística">
        </div>
        <div class="carousel-item">
            <img src="img/ModeloEducativo.png" class="d-block w-100" alt="ModeloEducativo">
        </div>
        <div class="carousel-item">
            <img src="img/Proyecta100mil-TESJI.png" class="d-block w-100" alt="Proyecta100mil">
        </div>
        <div class="carousel-item">
            <img src="img/TESJILOTEPEC.png" class="d-block w-100" alt="TESJILOTEPEC">
        </div>
        <div class="carousel-item">
            <img src="img/Tutoria_TESJI.png" class="d-block w-100" alt="Tutoria_TESJI">
        </div>
        <div class="carousel-item">
            <img src="img/Alumnos.png" class="d-block w-100" alt="Seguro-Estudinatil">
        </div>
        <div class="carousel-item">
            <img src="img/convocatoriasFull.png" class="d-block w-100" alt="Marco_Juridico">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <hr>

    {{-- FIN CAROUSEL --}}

    {{-- INICIO CONTENIDO --}}

    <div class="container">
        <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <h4 class="p-3 mb-2 bg-dark text-white">¿Qué son las residencias?</h4>
            <div class="card-body">
                <p class="card-text">Trámite a seguir para el desarrollo de
                    un proyecto de trabajo o la aplicación
                    de un modelo en cualquiera de las
                    áreas profesionales establecidas.</p>
                <p class="card-text">El
                    egresado definirá la problemática y
                    propondrá la solución óptima en base a
                    los conocimientos adquiridos durante la
                    estancia práctica de su profesión.</p>
            </div>
            <div class="card-footer">
                {{-- Puede --}}
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <h4 class="p-3 mb-2 bg-dark text-white">Aspectos de relevancia</h4>
            <div class="card-body">
                <p class="card-text">-> Cumplir con el 75% de créditos y ser alumno regular. Cuenta con un valor de 20 créditos.</p>
                <p class="card-text">-> Duración de 4 a 6 meses para acumular un mínimo de 640 horas.</p>
                <p class="card-text">-> Solo existe una oportunidad (Excepto causa justificada).</p>
                <p class="card-text">-> Ningún estudiante podrá participar en proyectos de residencias profesionales, sin ser autorizado oficialmente por la división.</p>
                <p class="card-text">-> Estructuración de metas claras y alcanzables por parte del egresado.</p>
                <p class="card-text">-> Los proyectos pueden ser unidisciplinarios, interdisciplinarios y multidisciplinarios.</p>
            </div>
            <div class="card-footer">
                {{-- haber --}}
            </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <h4 class="p-3 mb-2 bg-dark text-white">¿Cumpló con los requistos?</h4>
            <div class="card-body">
                <p class="card-text">Solo se les autoriza la residencia profecional aquellos alumnos que sean regulares, no tengan adeudos y sobre todo que ya esten quieran realizar el tramite.</p>
                <p>Puedes preguntar a tus superiores, ellos te evaluaran para saber si estas en las condiciones requeridas.</p>
                <p>Otra forma mas facil, ve al final de esta pagina y preciona el boton de tramitar, ingresa tu matricula para que verifiques si puedes realizar el tramite</p>
            </div>
            <div class="card-footer">
                {{-- texto --}}
            </div>
            </div>
        </div>
        </div>

        <hr>

        <h2>Pasos para la residencia profesional</h2>
        <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/ServiciosEscolares.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                <p class="text-info">Solicitud de residencia profesional</p>
                </h4>
                <p class="card-text">Si ya puedes realizar las residencias, registrate en esta pagina, aqui ingresaras todos los datos necesarios para que te evaluen el proceso de las residencias profecionales</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Residencia-profesional.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <p class="text-info">Evaluacion de Solicitud</p>
                </h4>
                <p class="card-text">Una vez finalizado el registro en esta pagina tus superiores la revisaran y evaluaran de acuedo a la información que se registre y en base a esa informacion te calificaran.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/RecursosEducativos--TESJI.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <p class="text-info">Entrega de Carta de Presentacion</p>
                </h4>
                <p class="card-text">La carta de presentación se hace entrega a la empresa, la cual expone los motivos para llevar a cavo la residencia profesioanal</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Proyecta100mil-TESJI.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <p class="text-info">Carta de Aceptacion</p>
                </h4>
                <p class="card-text">Esta carta es asignada por parte de la empresa en la que se realizara la residencia profecioanl y es otorgada por ella misma en donde expone que esta de acuerdo.</p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/PreguntasFrecuentes2.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <p class="text-info">Asignacion de asesor interno</p>
                </h4>
                <p class="card-text">Se te asignaran dos asesores, uno interno por parte del TESJI y otro externo por parte de la empresa los cuales te evaluaran durante todo el proceso. </p>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
            <a href="#"><img class="card-img-top" src="img/Preguntas_Frecuentes.png" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <p class="text-info">Formatos de residencias</p>
                </h4>
                <p class="card-text">El Proyecto se genera con los datos que se registre por parte de los residentes, tener en cuenta que solo se puede realizar una vez el tramite.</p>
            </div>
            </div>
        </div>
        </div>

        <hr>

        <div class="row">
        <div class="col-lg-6">
            <h2>
                <p class="text-danger">Algunos requisitos primordiales</p>
            </h2>
            <p>En esta lista estan los requisitos que todo residente debe cumplir:</p>
            <ul>
            <li>Ser alumno regular</li>
            <li>Tener el 75% de creditos</li>
            <li>No tener ningun adeudo</li>
            <li>Estar dispuesto a trabajar</li>
            <li>Cursar el noveno semestre o en adelante</li>
            </ul>
            <p>Si cumples con estos requisitos, entonces que esperas para empezar tu tramite, recuerda que solo tienes 4 meses para llevar a cavo tu residencia profecional, ademas de documentar todo tu proyecto si es que fuese aceptado.</p>
            <p>Otro dato importante es que debes de tomar en cuenta el calendario escolar, para que termines con buen tiempo tu residencia profecional y asi puedas estar en la ceremonia de graduación.</p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="img/diagrama.png" alt="">
            <center><a href="img/diagrama.png" class="p-2  bg-secondary text-white">Ver mejor</a></center>
        </div>
        </div>

        <hr>

        <div class="row mb-4">
        <div class="col-md-8">
            <p>Ahora que ya sabes mas sobre las residencias profecioanles, puedes empezar a tramitar tu solicitud de residencia profesional, claro que primero debes de registrarte</p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-success btn-block" href="{{ route('search') }}">TRAMITAR</a>
        </div>
        </div>

    </div>
    {{-- FIN DE CONTENIDO --}}
</div>

@endsection
