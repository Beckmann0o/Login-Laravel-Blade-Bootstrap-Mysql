<!doctype html>
<html lang="en">

<head>
    <title>CREACION USUARIO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('estilos/formstyle.css') }}">

</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img
                                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">LOGIN LARAVEL-BOOTSTRAP-MYSQL</h4>
                                    </div>

                                    <form action="/register" method="POST">
                                        @csrf
                                        <!--usar siempre csrf para evitar problemas de seguridad(adulteracion de formulario) -->
                                        <p>REGISTRO DE USUARIO</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="form2Example11"
                                                class="form-control" placeholder="Ingrese nombre de usuario" />
                                            <label class="form-label" for="form2Example11">Nombre de Usuario</label>
                                            <!-- El objeto error es propio del validador de laravel solo entrara alli
                                            cuando se encuentre un error en el input, luego mando una alerta con el div
                                            alert de bootstrap -->
                                            @error('username')
                                            <div class="alert alert-info">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example11"
                                                class="form-control" placeholder="Ingrese correo electronico" />
                                            <label class="form-label" for="form2Example11">Correo electronico</label>
                                            @error('email')
                                            <div class="alert alert-info">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" />
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            @error('password')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password_confirmation"
                                                name id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Confirmar Contraseña</label>
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Crear Cuenta</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">VISTA REGISTRO DE USUARIO</h4>
                                    <p class="small mb-0">Simulacion vista creacion de usuario, validaciones de
                                        formulario, creacion del user en la base de datos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript y dependencias Popper.js y jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-KQ3WzHt8taEn5/ZS2uA4MKQ5id8QfJ/3XJBOyGJzfdl3f6WvFXQzsvjM+TFpCkcl"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-q9E7ga9zgUjdf6GZzG1kU5lYmLT06r5ciznhKe3b1YBzT0QHqwhzx5KaVeo4/KU"
        crossorigin="anonymous"></script>
</
