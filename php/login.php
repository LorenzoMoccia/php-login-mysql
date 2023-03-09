<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6">
        <div class="card border-light p-4">
          <h1 class="text-center mb-4">Login</h1>
          <form method="POST" name="login-form" id="login-form" action="php/login.php">
            <div class="mb-3">
              <label for="InputUsername" class="form-label text-dark">Username</label>
              <input type="text" class="form-control" name="InputUsername" id="InputUsername" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="InputPassword" class="form-label text-dark">Password</label>
              <input type="password" class="form-control" name="InputPassword" id="InputPassword">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
            <div id="login-error" style="color: red;"></div>
          </form>

          <div class="container text-center mt-4">
            <p>Non sei ancora registrato? Registrati:</p>
                    <a href="../index.php" class="btn btn-dark">Registrati</a>
                </div>
            </div>
        </div>
    </div>
    

    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/check_login.js"></script>

    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>