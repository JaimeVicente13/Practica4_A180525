<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4JAVM/server.php");
    $error = $cliente->getError();
    if ($error){
        echo"<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
    $result = $cliente->call("getMarcas", array("tipos" => "Marcas"));
     if ($cliente->fault) { // chekeamos una falla al momento de llamar al metodo
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    } else { // no hay error al llamar el metodo
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        } else {  
            echo "<h2>Marcas<h2/><pre>" ; 
            echo  $result;
            echo  "</pre>";
        }
    }
?>