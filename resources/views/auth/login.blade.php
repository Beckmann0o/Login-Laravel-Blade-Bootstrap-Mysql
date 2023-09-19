<!doctype html>
<html lang="en">

<head>
    <title>LOGIN LARAVEL</title>
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
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">LOGIN LARAVEL-BOOTSTRAP-MYSQL</h4>
                                    </div>

                                    <!-- ACA VA A MOSTRAR EL MENSAJE DE EXITO SI SE CREO BIEN LA CUENTA -->
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    <form action="/login" method="GET">
                                        <p>INGRESA A TU CUENTA</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="username" id="form2Example11" class="form-control"
                                                placeholder="Nombre de usuario o email" />
                                            <label class="form-label" for="form2Example11">Nombre de usuario</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control" />
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Log in</button>
                                            <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">No tienes cuenta?</p>
                                            <button type="button" class="btn btn-outline-danger">
                                                <a href="{{('/vista/register')}}" class="text-decoration-none text-reset">Create New</a>
                                            </button>
                                            
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">VISTA PRINCIPAL LOGIN</h4>
                                    <p class="small mb-0">Simulacion vista principal, validacion de cuenta y autentificacion.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-cc0+76/nZvq4KtsOQO67OqFzUuiHoGp6xDMh1bO+7nS5lZW+sm3lzWuKxwzH5W6j" crossorigin="anonymous">
    </script>

</body>

</html>
