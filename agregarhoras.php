<?php
$elim = filter_input(INPUT_POST, "elim");
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));
$fecha = filter_input(INPUT_POST, "fecha");
$hora = filter_input(INPUT_POST, "tiempo");
$fecha1 = filter_input(INPUT_POST, "fecha1");
$hora1 = filter_input(INPUT_POST, "tiempo1");
$fecha2 = filter_input(INPUT_POST, "fecha2");
$hora2 = filter_input(INPUT_POST, "tiempo2");
$agregar = filter_input(INPUT_POST, "Agregar");
	error_reporting(E_ERROR);
 
	$query4='select * from `fechas libres`';
 
$resulta=mysqli_query($link,$query4);
	error_reporting(E_ERROR);

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

	<div class="col-md-6">
		<div style="width: 400px;height: 300px;">
			<form action="" method="post" name="frm" class="form">
				
				<div class="form-group">
					<label for="">Fecha:</label>
	                <input type="date" name="fecha" class="form-control" required>
				</div>

				<div class="form-group">
	                <label for="">Hora:</label>
	                <input type="time" name="tiempo" class="form-control" required>				
				</div>

				<div class="form-group">
	                <label for="">Fecha:</label>
	                <input type="date" name="fecha1" class="form-control" required>				
				</div>

				<div class="form-group">
	                <label for="">Hora:</label>
	                <input type="time" name="tiempo1" class="form-control" required>				
				</div>

				<div class="form-group">
	                <label for="">Fecha:</label>
	                <input type="date" name="fecha2" class="form-control" required>				
				</div>
	                

				<div class="form-group">
	                <label for="">Hora:</label>
	                <input type="time" name="tiempo2" class="form-control" required>				
				</div>

				<div class="form-group" align="right" >
	                <input type="submit" value="Agregar" name="Agregar" class="btn btn-primary" />				
				</div>

			</form>			
		</div>
		


	</div>

	<div class="col-md-6">

		<div>
			<form action="" method="post" name="frm" class="">
				
				<table class="table table-striped table-bordered table-hover">

					<tr class="success">
						
				        <th>Fecha</th>
				        <th>Hora</th>
				        <th><input type="submit" value="Eliminar" name="elim" align=center class="btn btn-danger" /></th>

					</tr>
					<tbody>
						
				        <?php while ( $row = $resulta->fetch_array() ):     ?>
				            <tr>

				            <td><?php echo $row[1]; ?> </td>
				            <td><?php echo $row[2]; ?> </td>
				       
				            <td><input type="checkbox"  name="id[]" value="<?php echo $row[0] ?>" /></td>
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

<?php
if(!empty($agregar)){
    $query = "INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha','$hora') ";
     $query2 =" INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha1','$hora1') ";
     $query3 =" INSERT INTO  `fechas libres`(fecha,hora) VALUE ('$fecha2','$hora2') ";
   $result = mysqli_query($link,$query);
    $result1 = mysqli_query($link,$query2);
     $result2 = mysqli_query($link,$query3);
    if ($result && $result1 && $result2){
        $mensaje="Su hora se registro con exito";
        
     // echo"<script>alert('$mensaje')</script>";
    print "<script>alert('$mensaje')</script>";
 print("<script>window.location.replace('agregarhoras.php');</script>");
   
    }else{
       echo mysqli_error($link);
   }
}
if (!empty($elim)) {
    $id = $_POST[id];
    
    foreach ($id as $value) {
       
        $query = 'DELETE FROM `fechas libres` WHERE `fechas libres`.id='.$value.'';
        $resulta2=mysqli_query($link,$query);
        if ($resulta2) {
        $mensaje="Se elimino con exito";
         print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('agregarhoras.php');</script>");
          
            
        }

       
    }
     error_reporting(E_ERROR);
}