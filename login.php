<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="login-form">
      <h1>Login</h1>
      <div class="container">
        <div class="main">
          <div class="form-img">
            <img src="image/login.jpg" alt="" />
          </div>
          <div class="content">
            <h2>Log In</h2>
          <form action="register1.php" method="post"> 
    <input type="email" name="email" placeholder="Email Address" required autofocus="">
    <input type="password" name="password" placeholder="User Password" required>
    <button class="btn" type="submit">Login</button>
</form>

            <p class="account">
              Don't have an account? <a href="sign.html">Register</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>


  


</html>
