<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <h1>MAS DETALLES DE TU USUARIO:</h1>
  <h3>email: {{$email}}</h3>
  <h3>username: {{$username}}</h3>
  <h3>cuenta creada: {{$created_at}}</h3>
  <a href="/vista/profile">Volver a tu perfil</a>
</body>

</html>