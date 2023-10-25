<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="icon-font-awesome"><img class="vector" src="home.png" /></div>
<a href="about.php">
            <div class="frame-2"><div class="text-wrapper-4">Help</div></div>
          </a>
          <div class="frame-3"><div class="text-wrapper-4">Contact</div></div>
          </a>
<div class="image"><img class="logo-followup" src="logofollowup.png" /></div>
    <div class="container">
    <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <div class="links-container">
    <a href="register.php">Register here</a>
    <a href="forgot_password.php">Forget password</a>
</div>


</div>
</body>
</html>
