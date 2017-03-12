<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clinica Barros Arana</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=1490, maximum-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    padding-top:100px;
  </style>
</head>
<body>

<!--NAVEGADOR-->
  
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1">
            <span class="sr-only">Menú</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <IMG alt="brand" SRC="img/log.png" WIDTH=250 HEIGHT=80 >

        </div>

        <div class="collapse navbar-collapse" id="navbar-1">
          <ul class="nav navbar-nav" style="margin-left: 80px;">
              <br>
              <li><a href="index.php"><input type="button" class="btn btn-link navbar-btn" value="Inicio"></a></li>
              <li><a href="quienesomosbody.php"><input type="button" class="btn btn-link navbar-btn" value="Quienes Somos"></a></li>
              <li><a href="tecnologiabody.php"><input type="button" class="btn btn-link navbar-btn" value="Tecnología"></a></li>
              <li><a href="pagosbody.php"><input type="button" class="btn btn-link navbar-btn" value="Facilidades de Pago"></a></li>
              <li><a href="tratamientos.php"><input type="button" class="btn btn-link navbar-btn" value="Tratamientos"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#ventana1" data-toggle="modal"><button type="button" class="button" style="margin-left: 80px;">Agenda tu Hora</button></a></li>
          </ul>
        </div>

      </div>
    </nav>

<!--CUERPO-->


<div class="container-fluid">
  <br><br><br>
  <!--MENU LATETAL PAGINA-->

  <div class="row">
    <br>
    <div class="col-md-3 col-lg-2">
      <br>
      <div class="btn-group-vertical hidden-xs hidden-sm" role="toolbar">
        <a href="index.php"><button type="button" class="btn btn-morado btn-lg" style="width: 240px;">Inicio</button></a><br>
        <a href="quienesomosbody.php"><button type="button" class="btn btn-morado btn-lg">Quienes Somos</button></a><br>
        <a href="tecnologiabody.php"><button type="button" class="btn btn-morado btn-lg">Tecnología</button></a><br>
        <a href="pagosbody.php"><button type="button" class="btn btn-morado btn-lg">Facilidades de Pago</button></a><br>
        <a href="tratamientos.php"><button type="button" class="btn btn-morado btn-lg">Tratamientos</button></a><br>
      </div>

      <div class="list-group" ><br><em><h3 align="center" style="font-family: 'Kalam', cursive; color: #663399;"><strong>Siguenos!</strong></h3></em>
        <div align="center">
          <a href="https://www.facebook.com/Cl%C3%ADnica-Dental-Barros-Arana-Osorno-865294843563254/?fref=ts"><IMG SRC="img/fac.png" WIDTH=70 HEIGHT=70></a>
          <a href="proyecto.html"><IMG SRC="img/ins.png" WIDTH=70 HEIGHT=70></a>
          <a href="servicios.html"><IMG SRC="img/t2.png" WIDTH=70 HEIGHT=70></a>          
        </div>

      </div>

    </div>

<?php
$buscarboton = filter_input(INPUT_POST, "buscar");
  $nombre = filter_input(INPUT_POST, "nombre");
  $direc = filter_input(INPUT_POST, "direccion");
  $tel = filter_input(INPUT_POST, "telefono");
  $rut = filter_input(INPUT_POST, "rut");
  $mail = filter_input(INPUT_POST, "mail");
  $dia = filter_input(INPUT_POST, "dias");
  $moti = filter_input(INPUT_POST, "motivo");
  
$link = mysqli_connect("localhost", "root", "","horas") or die("Error " . mysqli_error($link));
    $diafinal = explode("/","$dia");
    $query4='select * from `fechas libres`';
    $resulta=mysqli_query($link,$query4);

if(!empty($buscarboton)){
   // if (empty($nombre) || empty($direc) || empty($tel) || empty($rut) || empty($mail) || $dia == "dia1" || empty($moti)) {
     //          echo"<script>alert('rellene correctamente el formulario)</script>";
       //         exit;

   $query = "INSERT INTO  fechas(fecha,hora,nombre,direccion,telefono,correo,rut,motivo) VALUE ('$diafinal[0]','$diafinal[1]','$nombre','$direc','$tel','$mail','$rut','$moti')";
   $result = mysqli_query($link,$query);
   $query2 = "DELETE FROM `fechas libres` WHERE fecha='$diafinal[0]' AND hora='$diafinal[1]'";
   $result2 = mysqli_query($link,$query2);

    if ($result && $result2){
        $mensaje="Su hora se registro con exito";
        
     // echo"<script>alert('$mensaje')</script>";
    print "<script>alert('$mensaje')</script>";
    print("<script>window.location.replace();</script>");
   
    }else{
       echo mysqli_error($link);
   }
        
}    

?>

<!-- INICIO VENTANA EMERGENTE PARA AGENDAR HORA -->

<div class="modal fade" id="ventana1">

  <div class="modal-dialog">
    
    <div class="modal-content">
      <!-- HEADER DE LA VENTANA -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" align="center">Agende de su hora</h4>
      </div>
      <!-- CONTENIDO DE LA VENTANA -->
      <div class="modal-body">

        <form action="" method="post" name="frm" class="">
          <div class="form-group">
            <label>Nombre y Apellido: </label>
            <input type="text" name="nombre" class="form-control" placeholder='Escribe su nombre completo' required>            
          </div>

          <div class="form-group">
            <label>Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder='Escriba su direccion' required>            
          </div>

          <div class="form-group">
            <label>Telefono</label>      
            <input type="tel" name="telefono" class="form-control" placeholder='Digite su numero celular' required>            
          </div>

          <div class="form-group">
            <label>Rut</label>
            <input type="text" name="rut" class="form-control" placeholder='Escriba su rut' required>            
          </div>

          <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mail" class="form-control" placeholder='Escriba su correo'  required>            
          </div>

          <div class="form-group">
            <label>Motivo</label>
            <input type="text" name="motivo" class="form-control" placeholder='Escriba su motivo principal' required>            
          </div>
          
          <div class="form-group">
            <label>Selecciona algunos de los dias disponibles</label>      
            <select  name="dias" class="form-control" required>
                <option  value="ninguno"> Ningun horario seleccionado</option>
                <?php while ( $row = $resulta->fetch_array() ) { ?>
                           
                <option  value="<?php printf ("%s / %s\n", $row[1], $row[2]);?>"> <?php printf ("%s / %s\n", $row[1], $row[2]);?> </option>
                <?php   }   ?>
            </select>            
          </div>

          <div class="form-group" align="right">
            <input type="submit" value="Solicitar" name="buscar" class="btn btn-primary" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>            
          </div> 

        </form>
      
      </div>
      <!-- FOOTER DE LA VENTANA -->

    </div>

  </div>
  
</div>