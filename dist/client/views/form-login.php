<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login/Sign up</title>
    <link rel="stylesheet" href="../../output.css">
</head>

<body>
    <?php
    session_start();
    include('../../config/db.php');

    ?>
    <h1 class="bg-red-400">fjaslkd</h1>

    <div class="form-box">
        <div class="container">
            <h1>Welcome back</h1>
            <p>Welcome back, Please enter your details</p>
            <br>
            <form action="../processes/login.php" method="post">
                <p><b>Email</b></p>
                <input type="email" name="correo" id="input" placeholder="   Enter your email" required>
                <br>
                <br>
                <p><b>Password</b></p>
                <input type="password" name="password" id="input" placeholder="  Enter your password">
                <br>
                <br>
                <input type="submit" value="Sign in" id="boton1">
                <br>
            </form>

        </div>
        <img src="" alt="" id="aña">
    </div>

</body>

</html>
