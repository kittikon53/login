<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="icon-font-awesome"><img class="vector" src="home.png" /></div>
<div class="image"><img class="logo-followup" src="logofollowup.png" /></div>
<div class="container">
    <h2>Reset Password</h2>
    <form action="forgot_password_process.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <div class="button-container">
            <button type="submit" class="reset-button">Reset Password</button>
            <a href="index.php" class="login-button">Back to Login</a>
        </div>
    </form>
</div>
</body>
</html>
