<?php
$elim = filter_input(INPUT_POST, "elim");
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));

$query4='select * from fechas';
$resulta=mysqli_query($link,$query4);
 error_reporting(E_ERROR);

if (!empty($elim)) {
    $id = $_POST[id];
    
    foreach ($id as $value) {
       
        $query = 'DELETE FROM fechas WHERE fechas.id='.$value.'';
        $resulta2=mysqli_query($link,$query);
        if ($resulta2) {
        $mensaje="Se elimino con exito";
         print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('registro.php');</script>");
          
            
        }

       
    }
     error_reporting(E_ERROR);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<title>Administración</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
    	padding-top:100px;
  	</style>
</head>
<body background="img/fondo3.jpg">
<br><br><br><br><br>
<!-- NAVEGADOR -->
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <IMG alt="brand" SRC="img/log.png" WIDTH=250 HEIGHT=90 >

        </div>

        <div class="collapse navbar-collapse" id="navbar-1">
          <ul class="nav navbar-nav" style="margin-left: 80px;">
            <li><a href="index.php"><input type="button" class="btn btn-link navbar-btn" value="INDEX" style="font-size: 20px;"></a></li>
            <li><a href="registro.php"><input type="button" class="btn btn-link navbar-btn" value="REGISTROS HORAS" style="font-size: 20px;"></a></li>
            <li><a href="agregarhoras.php"><input type="button" class="btn btn-link navbar-btn" value="AGREGAR HORAS" style="font-size: 20px;"></a></li>

          </ul>

        </div>

      </div>
    </nav>
<!-- CUERPO -->
<div class="container">

  <div class="col-md-12">
    
    <form action="" method="post" name="frm">
    
    <div class="table-responsive">
      
      <table class="table table-striped table-bordered table-hover">
        
        <tr class="success">
          <th>Fecha</th>
          <th>Hora</th>
          <th>Nombre</th>
          <th>Direccion</th>
          <th>Telefono</th>
          <th>Correo</th>
          <th>Rut</th>
          <th>Motivo</th>
          <th><input type="submit" value="Eliminar" name="elim" align="center" class="btn btn-danger" /></th>
        
        </tr>
        <tbody>
          
        <?php
         while ( $row = $resulta->fetch_array() ):
            ?>
            <tr>        
            <td><?php echo $row[0]; ?> </td>
            <td><?php echo $row[1]; ?> </td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?> </td>
            <td><?php echo $row[4]; ?> </td>
            <td><?php echo $row[5]; ?> </td>
            <td><?php echo $row[6]; ?> </td>
            <td><?php echo $row[7]; ?> </td>
            <td><input type="checkbox"  name="id[]" value="<?php echo $row[8] ?>" /></td>
            </tr>
        <?php endwhile; ?>

        </tbody>

      </table>

    </form>

    </div>

    
  </div>



</div>
</body>
</html>