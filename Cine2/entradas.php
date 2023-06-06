<?php
require_once 'Entradacine.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pelicula = $_POST["pelicula"];
    $fecha = $_POST["fecha"];
    $cant_nino = $_POST["cantidad_nino"];
    $cant_adulto = $_POST["cantidad_adulto"];
    $cant_adulmayor = $_POST["cantidad_adulto_mayor"];


    
    for ($i = 0; $i < count($pelicula); $i++) {
      $entrada = new EntradaCine($pelicula[$i], $fecha, $cant_nino[$i], $cant_adulto[$i], $cant_adulmayor[$i]);
      $entrada->mostrarInformacion();
    }
  }



?>