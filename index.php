<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Clinica Barros Arana</title>
  <link rel="stylesheet" href="css/style.css">
  <!--

  <meta name="viewport" content="width=1490, maximum-scale=1">
  <link rel="stylesheet" href="css/stylesheet2.css">
  <link rel="stylesheet" href="css/stylesheet2.scss">
  <meta name="description" content="">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    padding-top:100px;
  </style>
</head>
<body onload="verIndex()">

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

          <IMG alt="brand" SRC="img/log.png" WIDTH=250 HEIGHT=90 >

        </div>

        <div class="collapse navbar-collapse" id="navbar-1">
          <ul class="nav navbar-nav" style="margin-left: 80px;">
              <br>
              <li><input id="mostrarIndex" type="button" class="btn btn-link navbar-btn" value="Inicio"></li>
              <li><input id="mostrarQuienes" type="button" class="btn btn-link navbar-btn" value="Quienes Somos"></li>
              <li><input id="mostrarTecnologia" type="button" class="btn btn-link navbar-btn" value="Tecnología"></li>
              <li><input id="mostrarPago" type="button" class="btn btn-link navbar-btn" value="Facilidades de Pago"></li>
              <li><input id="mostrarTratamiento" type="button" class="btn btn-link navbar-btn" value="Tratamientos"></li>
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
        <button type="button" id="mostrarIndex2" class="btn btn-morado btn-lg" style="width: 240px;">Inicio</button><br>
        <button type="button" id="mostrarQuienes2" class="btn btn-morado btn-lg">Quienes Somos</button><br>
        <button type="button" id="mostrarTecnologia2" class="btn btn-morado btn-lg">Tecnología</button><br>
        <button type="button" id="mostrarPago2" class="btn btn-morado btn-lg">Facilidades de Pago</button><br>
        <button type="button" id="mostrarTratamiento2" class="btn btn-morado btn-lg">Tratamientos</button><br>
      </div>

      <div class="list-group" ><br><em><h3 align="center" style="font-family: 'Kalam', cursive; color: #663399;"><strong>Siguenos!</strong></h3></em>
        <div align="center">
          <a href="https://www.facebook.com/Cl%C3%ADnica-Dental-Barros-Arana-Osorno-865294843563254/?fref=ts"><IMG SRC="img/fac.png" WIDTH=70 HEIGHT=70></a>
          <a href="proyecto.html"><IMG SRC="img/ins.png" WIDTH=70 HEIGHT=70></a>
          <a href="servicios.html"><IMG SRC="img/t2.png" WIDTH=70 HEIGHT=70></a>          
        </div>

      </div>

    </div>



<!-- INCLUDE DE PAGINAS -->

<div id="index"><?php include("indexbody.php"); ?></div>

<div id="quienesomos"><?php include("quienesomosbody.php"); ?></div>  

<div id="tecnologia"><?php include("tecnologiabody.php"); ?></div>

<div id="pago"><?php include("pagosbody.php"); ?></div>

<div id="tratamientos"><?php include("tratamientos.php"); ?></div>

<!-- FUNCION OCULTAR O MOSTRAR -->

<script type="text/javascript">

// ENLACES PARA EL NAVEGADOR

  function verIndex(){
    $('#index').show();
    $('#quienesomos').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  }

  $('#mostrarIndex').on('click', function(){
    $('#index').show();
    $('#quienesomos').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarQuienes').on('click', function(){
    $('#quienesomos').show();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarTecnologia').on('click', function(){
    $('#tecnologia').show();
    $('#quienesomos').hide();
    $('#index').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });  

  $('#mostrarPago').on('click', function(){
    $('#pago').show();    
    $('#quienesomos').hide();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarTratamiento').on('click', function(){
    $('#tratamientos').show();
    $('#quienesomos').hide();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
  });

// ENLACES PARA EL MENU LATERAL

  $('#mostrarIndex2').on('click', function(){
    $('#index').show();
    $('#quienesomos').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarQuienes2').on('click', function(){
    $('#quienesomos').show();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarTecnologia2').on('click', function(){
    $('#tecnologia').show();
    $('#quienesomos').hide();
    $('#index').hide();
    $('#pago').hide();
    $('#tratamientos').hide();
  });  

  $('#mostrarPago2').on('click', function(){
    $('#pago').show();    
    $('#quienesomos').hide();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#tratamientos').hide();
  });

  $('#mostrarTratamiento2').on('click', function(){
    $('#tratamientos').show();
    $('#quienesomos').hide();
    $('#index').hide();
    $('#tecnologia').hide();
    $('#pago').hide();
  });

</script>

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

<!-- TERMINO DE INCLUDE DE BODY -->

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

<!-- TERMINO VENTANA EMERGENTE PARA AGENDAR HORA -->

 </div>
</div>
<!--FOOTER (COLOCAR ENLACES DESPUES)-->

  <footer class="site-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <ul class="footer-nav"><strong>Podría interesarte:</strong>
            <p><a href="podriainteresarte.html"><em>3 cosas sobre salud bucal que debes saber si estás embarazada</em></a></p>
            <p><a href="podriainteresarte.html"><em>¿Por qué mis dientes tienen sensiblidad?</em></a></p>
            <p><a href="podriainteresarte.html"><em>3 razones para cambiar tu cepillo de dientes</em></a></p>
          </ul>
        </div>

        <div class="col-md-3">
          <ul class="footer-nav"><strong>Acerca de nosotros:</strong>
            <p><a href="proyecto.html"><em>Especialistas</em></a></p>
            <p><a href="tecnologia.html"><em>Nuevas tecnologías</em></a></p>
          </ul>
        </div>

        <div class="col-md-3">
          <ul class="footer-nav"><strong>Especialidades:</strong>
            <p ><a href="tratamientos.html"><em>Implantologia</em></a></p>
            <p ><a href="tratamientos.html"><em>Rehabilitación</em></a></p>
            <p ><a href="tratamientos.html"><em>Odontopediatria</em></a></p>
          </ul>
        </div>
        <div class="col-md-2">
          <a href="login.php" ><IMG SRC="img/log.png" WIDTH=300 HEIGHT=75 ALIGN=right> </a>
        </div>
      </div>
    </div>  
  </footer>
    
</body>
</html>


