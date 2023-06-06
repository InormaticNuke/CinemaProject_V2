<?php
class EntradaCine
{
  private $pelicula;
  private $fecha;
  private $cantidad_nino;
  private $cantidad_adulto;
  private $cantidad_adulto_mayor;
  private $valor_pelicula;
  private $total;

  public function __construct($pelicula, $fecha, $cantidad_nino, $cantidad_adulto, $cantidad_adulto_mayor)
  {
    $this->pelicula = $pelicula;
    $this->fecha = $fecha;
    $this->cantidad_nino = $cantidad_nino;
    $this->cantidad_adulto = $cantidad_adulto;
    $this->cantidad_adulto_mayor = $cantidad_adulto_mayor;
    $this->valor_pelicula = 5000;
    $this->total = 0;


    


    /*
    if ($this->cantidad_nino == 0) {
      //total Adulto
      $adulto = $this->valor_pelicula * $this->cantidad_adulto;
      $Tadulto = $this->valor_pelicula - (($adulto * 0.05) / 100);

      //total Adulto Mayor
      $mayor = $this->valor_pelicula * $this->cantidad_adulto_mayor;
      $Tmayor = $this->valor_pelicula - (($mayor * 55) / 100);

      $this->total = $Tadulto + $Tmayor;
    } else if ($this->cantidad_adulto == 0) {
      //total Niño
      $nino = $this->valor_pelicula * $this->cantidad_nino;
      $Tnino = $this->valor_pelicula - (($nino * 30) / 100);

      //total Adulto Mayor
      $mayor = $this->valor_pelicula * $this->cantidad_adulto_mayor;
      $Tmayor = $this->valor_pelicula - (($mayor * 55) / 100);

      $this->total = $Tnino + $Tmayor;
    } else if ($this->cantidad_adulto_mayor == 0) {
      //total Niño
      $nino = $this->valor_pelicula * $this->cantidad_nino;
      $Tnino = $this->valor_pelicula - (($nino * 30) / 100);

      //total Adulto
      $adulto = $this->valor_pelicula * $this->cantidad_adulto;
      $Tadulto = $this->valor_pelicula - (($adulto * 0.05) / 100);
      $this->total = $Tnino + $Tadulto;
    } else {
      //total Niño
      $nino = $this->valor_pelicula * $this->cantidad_nino;
      $Tnino = $this->valor_pelicula - (($nino * 30) / 100);
      //total Adulto
      $adulto = $this->valor_pelicula * $this->cantidad_adulto;
      $Tadulto = $this->valor_pelicula - (($adulto * 0.05) / 100);
      //total Adulto Mayor
      $mayor = $this->valor_pelicula * $this->cantidad_adulto_mayor;
      $Tmayor = $this->valor_pelicula - (($mayor * 55) / 100);

      //total a pagar
      $this->total = $Tnino + $Tadulto + $Tmayor;
    }*/
  }


  public function mostrarInformacion()
  {
    //total Niño
    $nino = ($this->valor_pelicula * $this->cantidad_nino);
    $Tnino = $this->valor_pelicula - (($nino * 30) / 100);
    //total Adulto
    $adulto = ($this->valor_pelicula * $this->cantidad_adulto);
    $Tadulto = $this->valor_pelicula - (($adulto * 0.05) / 100);
    //total Adulto Mayor
    $mayor = ($this->valor_pelicula * $this->cantidad_adulto_mayor);
    $Tmayor = $this->valor_pelicula - (($mayor * 55) / 100);

    //total a pagar
    $this->total = $Tnino + $Tadulto + $Tmayor;

    
    echo "<link rel=stylesheet href=css/style.css>";
    echo "<h1>Boleta</h1>";
    echo "<table class=Table>";
    echo "<tr>
    <th></th>
    <th>Detalle</th>
    <th>Descuento</th>
  </tr>";
    echo "<tr>
            <th>Pelicula</th>
            <td>" . $this->pelicula . "</td>
          </tr>";
    echo "<tr>
    <th>Cantidad Niño</th>
          <td>" . $this->cantidad_nino . "</td>
          <td>30%</td>
        </tr>";
    echo "<tr>
            <th>Cantidad Adulto</th>
          <td>" . $this->cantidad_adulto . "</td>
          <td>5%</td>
        </tr>";
    echo "<tr>
        <th>Cantidad Adulto Mayor</th>
          <td>" . $this->cantidad_adulto_mayor . "</td>
          <td>55%</td>
        </tr>";
    echo "<tr>
        <th>Total a pagar</th>
          <td>" . $this->total . "</td>
        </tr>";
    echo "</table>";
  }
}
