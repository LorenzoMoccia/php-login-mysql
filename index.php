<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Tutorial</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100">
      <div class="col-md-6">
        <div class="card border-light p-4">
          <div class="card-body">
            <h1 class="text-center mb-4 text-dark">Registrazione</h1>
            <form method="POST" name="register-form" id="register-form" action="php/register.php">
              <div class="mb-3">
                <label for="InputEmail" class="form-label text-dark">Email address</label>
                <input type="email" class="form-control bg-light text-dark" name="InputEmail" id="InputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="InputUsername" class="form-label text-dark">Username</label>
                <input type="text" class="form-control bg-light text-dark" name="InputUsername" id="InputUsername" aria-describedby="usernameHelp">
              </div>
              <div class="mb-3">
                <label for="InputPassword" class="form-label text-dark">Password</label>
                <input type="password" class="form-control bg-light text-dark" name="InputPassword" id="InputPassword">
              </div>
              <button type="submit" class="btn btn-dark">Registrati</button>
              <div id="username-error" class="mt-3 text-danger"></div>
            </form>
          </div>
          <div class="card-footer text-center text-dark">
            Sei già registrato? <a href="php/login.php" class="text-decoration-none text-blue">Accedi</a>
          </div>
        </div>
      </div>
    </div>
  </div>


    <!--JQUERY-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/check_registration.js"></script>
    <!--BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
