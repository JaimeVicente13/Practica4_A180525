<?php
   require_once "lib/nusoap.php";
   function getMarcas($tipo) {
    if ($tipo == "Marcas") {
        return join (", ", array(
            "Toyota",
            "Ford",
            "Honda",
            "Chevrolet",
            "Porche",
            "Alfa Romeo",
            "BMW",
            "Volkswagen"
        ));  
    } else {
        return "No hay marcas de coches disponibles.";
    }
}
    $server = new soap_server();// creamos instancia de SOAP
    $server->register("getMarcas"); // indica el medoto o funcion de devolver
    if(!isset($HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
    $server->service( $HTTP_RAW_POST_DATA);
?>