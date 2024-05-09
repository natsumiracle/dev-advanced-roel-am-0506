<!-- Login Page -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">
   <div class="vh-100">
     <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">LOGIN</h1>
        </div>

        <div class="card-body">
          <form action="../actions/login.php" method="post">
            <input type="text" name="username" id="username" class="form-control mb-2" placeholder="USERNAME" required autofocus>
            <input type="password" name="password" id="password" class="form-control" placeholder="PASSWORD">
            <button type="submit" class="btn btn-primary w-100">Login</button>
          </form>

          <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
        </div>
      </div>
     </div>
   </div>
  
</body>
</html>