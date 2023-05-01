<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login/Sign up</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    session_start();

    include('../../config/db.php');
    ?>

    <div class="for-box">
        <div class="cuadrotexto">
            <h1>Welcome</h1>
            <p>Welcome, Please enter your details</p>
            <br>
            <form action="../processes/register.php" method="post">
                <p><b>Name</b></p>
                <input type="text" id="input" placeholder="   Enter your name" required name="nombre">
                <br>
                <br>
                <p><b>Last name</b></p>
                <input type="text" id="input" placeholder="   Enter your last names" required name="apellido">
                <br>
                <br>
                <p><b>Email</b></p>
                <input type="email" name="correo" id="input" placeholder="   Enter your email" required>
                <br>
                <br>
                <p><b>Password</b></p>
                <input type="password" name="password" id="input" placeholder="  Enter your password">
                <br>
                <br>
                <input type="submit" value="Sign up" id="boton1">
                <br>
            </form>
        </div>
        <img src="" alt="" id="img">
    </div>

</body>

</html>


