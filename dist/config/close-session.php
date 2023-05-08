<?php

session_start();
session_destroy();

header('Location: dist\config\close-session.php');


?>