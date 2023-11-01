<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
      #main{
        height: 100vh;
      }
      #login-form{
        width: 500px;
       
      }
    </style>
  </head>
  <body>
    <div class="container-fluid" id="main">
        <div class="row justify-content-center align-items-center" id="main"> 
            <div class="col-8 p-3 justify-content-center d-flex">
            <div class="bg-light rounded-5 border border-dark" id="login-form" >
              <form class="p-5 text-center" id="login-form">
                <img src="Login/AMIKOM_LOGO.svg.png" width="300">
                <h2 class="text-center mb-5">
                  AMIKOM RPS LOGIN
                </h2>
                <div class="card-body">
                        <!-- Login Form -->
                        <form action="php/con_login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <p>Don't have an account? <a href="register.php">Register</a></p>
                    </div>
              </form>
            </div>  
            </div>
        </div>
    </div>

  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>