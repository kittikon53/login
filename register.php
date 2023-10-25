<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="icon-font-awesome"><img class="vector" src="home.png" /></div>
<div class="image"><img class="logo-followup" src="logofollowup.png" /></div>
    <div class="container">
    <h2>Register</h2>
    <form method="post" action="register_process.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="index.php">Login here</a></p>
    </div
></body>
</html>
