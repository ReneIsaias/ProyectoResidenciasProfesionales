<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario Nuevo</title>
    {{-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-dark text-white"><h2>Nuevo Usuario</h2></div>
                    <div class="card-body">
                        <div class="form-group">
                            {{-- <img src="asset/img/TESJI_chida.png" class="d-block w-100" alt="TESJILOTEPEC"> --}}
                            <img width="100%" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.wallpapersafari.com%2F1%2F67%2FDgrYBf.jpg&f=1&nofb=1" alt="haber">
                        </div>
                        <h4>
                            Hola Admin, te informamos que un nuevo usuario se ha registrado en la pagina de las residencias profesionales, por lo que te decimos que revises de quien se trata, para ver si necesita que le asignes un rol.
                        </h4>
                        <br>
                        <h3>Datos del usuario :</h3>
                        <br>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control"
                                value="{{ $msg->nameUser }} {{ $msg->firstLastname }} {{ $msg->secondLastname }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="text"
                                class="form-control"
                                value="{{ $msg->email }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Usuario :</h6>
                            <input type="text"
                                class="form-control"
                                value="{{ $msg->name }} "
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control"
                                value="{{ $msg->phoneUser }} "
                                disabled
                            >
                        </div>
                        <a href="http://127.0.0.1:8000/home">Residencias Profecionales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

