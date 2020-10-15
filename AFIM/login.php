<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Inicio de sesion A.F.I.M</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/floating-labels.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" action="controllers/validacion.php" method="POST">
  <div class="text-center mb-4">
    <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Iniciar sesion</h1> 
  </div>

  <div class="form-label-group">
    <input type="text" id="inputUsername" class="form-control" name="username" placeholder="Username" required autofocus>
    <label for="inputUsername">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" class="form-control" name ="password" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar </button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2020</p>
</form>
</body>
</html>
