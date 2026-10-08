<?php

$username = $_POST['username'];
$password = $_POST['password'];

if ($password == '123456789') {

    header('Location: http://localhost/es6v/pages/qualcosa.html');
    exit();

}else{
    
    header('Location: http://localhost/es6v/');
    exit();
}



?>