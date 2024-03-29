<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Booking List</title>
    <link rel="stylesheet" href="CSS/LogIn-style.css">
</head>
<body>
    <nav class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="login.php">Login</a>
    </nav>
    
    <!-- Background Image -->
    <img src="Media/rest_img.jpg" class="background-img">
  
    <!-- Login Form -->
    <div class="center">
        <h1>Login</h1>
        <img src="Media/bookea-logo.png" class="logo-img">
        <form action="authenticate_user.php" method="post">
            <div class="txt_field">
                <input type="text" name="Username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="Password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>