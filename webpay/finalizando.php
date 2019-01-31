<?php

use Freshwork\Transbank\RedirectorHelper;



//Se guarda la información del token
$token = $_POST['token_ws'];

header('Location:http://localhost:90/alamo/webpay/gracias.php');

?>