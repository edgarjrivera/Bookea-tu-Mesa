<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Booking List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/LogIn-style.css">
        <div class="topnav">
            <a href="BookeaTuMesa.php">Home</a>
            <a class="active" href="login.php" >Login</a>
         </div>
  </head>
  <body>
      <!-- log in  -->c
    <div class="center">
      <h1>Login</h1>
      <form action="validar.php" method="post" >
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        
      </form>
    </div>

  </body>
</html>
