<?php

$username = $_POST['username'];
$password = $_POST['password'];

if (!$password == '123456789') {

    header('Location: localhost/esercizio');

}



?>