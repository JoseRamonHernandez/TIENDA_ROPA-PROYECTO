<!DOCTYPE html>
<html>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<?php require_once "conexion.php" ?>




            <?php

            if(isset($_GET)){
    if(strlen($_GET['buscar']) >=1)
    {


$proovedor= $_GET['buscar'];

?>
<br>
<a href="muestraProovedores.php">
<button type="button" class="btn btn-outline-dark">Regresar</button>
</a>
<div class="container center verpro">

<br>

<div class="container">
    <center>
<table class="table">
        <thead>
          <tr>
              
              
          <th class="bg-dark text-white">Codigo</th>
            <th class="bg-dark text-white">Empresa</th>
              <th class="bg-dark text-white">Correo</th>
              <th class="bg-dark text-white">Telefono</th>
              <th class="bg-dark text-white">Domicilio</th>
              
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT * FROM proovedores WHERE codigo = '$proovedor'";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);

    if(!$ejecutarconsulta)
    {
        echo("ERROR en la consulta");
    }
    else
        {
            if($verfilas<1)
            {
                echo("<tr><td>Sin registros</td></tr>");
            }
            else
            {
                for($x=0; $x<=$fila; $x++)
                {
                    echo'
                        <tr>
                        <td>'.$fila[0].'</td>
                        <td>'.$fila[1].'</td>
                        <td>'.$fila[2].'</td>
                        <td>'.$fila[3].'</td>
                        <td>'.$fila[4].'</td>
                            
                            
                        </tr>';
                        
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }
    }
}
    ?>
        


</table>
    </center>
</div>
</div>
</body>
</html>