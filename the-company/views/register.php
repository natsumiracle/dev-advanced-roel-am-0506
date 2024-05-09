 <!-- Registration Page -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

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
            <h1 class="text-center">Register</h1>
          </div>

          <div class="card-body">
            <form action="../actions/register.php" method="post">
              <div class="mb-3">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
              </div>

              <div class="mb-3">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last-name" class="form-control" required>
              </div>

               <!-- Bold to add emphasis -->
               <div class="mb-3">
                 <label for="username" class="form-label fw-bold">Username</label>
                 <input type="text" name="username" id="username" class="form-control" maxlength="15" required>
               </div>

               <div class="mb-5">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
                <div class="form-text" id="password-info">
                   Password must be at least 8 characters.
                </div>
               </div>

              <button type="submit" class="btn btn-success w-100">Register</button>
            </form>

            <P class="text-center mt-3 small">Register already? <a href="../views">Login.</a></P>
          </div>
        </div>
      </div>
  </div>
  
 </body>
 </html>