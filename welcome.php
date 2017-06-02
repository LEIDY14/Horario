<?php 
   session_start();
   require "funcs/conexion.php";
   require "funcs/funcs.php";

   $where ="";
   $sql =" SELECT * FROM usuarios";
   $resultado = $mysqli->query($sql);

 if(!isset($_SESSION["id_usuario"])){
    header("location: login.php");
 }

  $idUsuario = $_SESSION['id_usuario'];

  $sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bienvenido</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="img\icon.png" >
     <link rel="shortcut icon" href="img\icon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="css/dashboar.css" >

   

    <style>
      body{ 
      background-image: url(img/fn3.jpg); 
      background-attachment: fixed; 
      background-repeat: no-repeat; 
      background-position: center center;   
      }
    </style>

</head>
<body>
 
    <div class="container">
          
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
          
             <img alt="Brand" src="img\icon.png"> <br>
         
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Men&uacte;</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
               </button>
            </div>

            <div id="navbar" class="navbar-collapse collapsed">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="welcome.php"><span class="glyphicon glyphicon-home"></span> Inicio
                    </a></li>
                </ul>

                <?php if($_SESSION['tipo_usuario']==1) { ?>
                    <ul class="nav navbar-nav">
                         <li><a href="welcome.php"><span class="glyphicon glyphicon-bookmark"></span> ADMINISTRADOR <span class="glyphicon glyphicon-bookmark"></span> </a></li>
                    </ul>     
                <?php } ?>

                <?php if($_SESSION['tipo_usuario']==2) { ?>
                    <ul class="nav navbar-nav">
                         <li><a href="welcome.php"><span class="glyphicon glyphicon-bookmark"></span> USUARIO  <span class="glyphicon glyphicon-bookmark"></span> </a></li>
                    </ul>     
                <?php } ?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a><span class="glyphicon glyphicon-user "></span> <b><?php  echo 'Bienvenido  '.utf8_decode($row['nombre']); ?></b></a></li></a></td>
                  <li><a href="logout.php "> Cerrar Sesi&oacute;n  <span class= " glyphicon glyphicon-log-out "></span> </a></li>
                </ul>
              </div>
            </div>
         </nav>  <br> </div> 

<div class="container">

<?php if($_SESSION['tipo_usuario']==1) { ?>       
    <div>
    <h2 style="" class="page-header"> Administrar Usuarios</h2>
    </div>
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="table-responsive">
    
   <div class="col-xs-6 col-sm-3 placeholder">
            <center><a href="tabla_admin.php">
              <img src="img/tablau.png" width="210" height="210" class="img-responsive" alt="Generic placeholder thumbnail">
              </a>
              <font color="black"> 
              <h4>Tabla Usuarios</h4></font>
            <center>
   </div>
   <div class="col-xs-6 col-sm-3 placeholder">
            <center><a href="registro.php">
              <img src="img/usu.png" width="210" height="210" class="img-responsive" alt="Generic placeholder thumbnail">
              </a>
              <font color="black"> 
              <h4>Agregar Usuarios</h4></font>
            <center>
   </div>
   <div class="col-xs-6 col-sm-3 placeholder">
            <center><a href="nuevopassword.php">
              <img src="img/seguridad.png" width="210" height="210" class="img-responsive" alt="Generic placeholder thumbnail">
              </a>
              <font color="black"> 
              <h4>Cambiar Contraseña</h4></font>
            <center>
   </div>
  
  </div>
</div>
<?php } ?>

<div>
 <h2 style="" class="page-header">Crear Horario</h2>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="table-responsive">
    
   <div class="col-xs-6 col-sm-3 ">
            <center><a href="formulariog/horario.php">
              <img src="img/ADSI.jpg" width="200" height="200" class="img-responsive " alt="Generic placeholder thumbnail">
              </a>
              <font color="black"> 
              <h4>A.D.S.I</h4></font>
            <center>
   </div>
  
  </div>
</div>

<div>
 <h2 style="" class="page-header">Agregar</h2>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 
    <div class="row">
<div class="table-responsive">
    <table class="table">
   <thead>
     <tr >

     </tr>
   </thead>

   <tbody>    
       <tr >
         <td><div >
          <a class="list-group-item active"><br></a>
          <a class="list-group-item " href="menus/Tip_Prog.php">Tipo programa</a>
          <a class="list-group-item" href="menus/Prog.php">Programa</a>
          <a class="list-group-item" href="menus/Act_Proy.php">Actividad de Proyecto</a>
          <a class="list-group-item" href="menus/Proyec.php">Proyecto</a>
          <a class="list-group-item" href="menus/Trim.php">Trimestre</a>
          <a class="list-group-item" href="menus/fas.php">Fase</a>
          <a class="list-group-item" href="menus/compe.php">Competencia</a>
          </div></td>

         <td>
           <div >
          <a class="list-group-item active"><br></a>
          <a class="list-group-item" href="menus/result.php">Resultado</a>
          <a class="list-group-item" href="menus/Act.php">Actividad</a>
          <a class="list-group-item" href="menus/Fich.php">Ficha</a>
          <a class="list-group-item" href="menus/Inst.php">Instructor</a>
          <a class="list-group-item" href="menus/tip_amb.php">Tipo Ambiente</a>
          <a class="list-group-item" href="menus/Amb.php">Ambiente</a>
          <a class="list-group-item" href="menus/horas.php">Hora</a>
          <a class="list-group-item" href="menus/jornada.php">Jornada</a>

          </div>
         </td>
       </tr>
      </tbody>
    </table>
  </div>
   </div>
   </div>


   </div>

  </div>

  </div>

</div>

</header>

    <script src="js/jquery-3.1.1.min" ></script>
    <script src="js/bootstrap.min.js" ></script>
    
</body>
</html>
