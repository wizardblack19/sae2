<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SIGHO</title>
      <link rel="stylesheet" href="css/Style.css">
    <style>
     .imagenFondo {
	position:absolute;
	top:20%;
	left:10%;
	width:90%;
	height:80%;
}  .tdImagen{
	
    left:1%;
     	width:10%;

     }
     .tdLetras{
width:50%;

     }
     .iD{

	width:30%;
}
.iD div{
text-align:right;
	left:400px;

}
</style>
</head>

 
<body>
<div>
<img class="imagenFondo" src="iconosImagenes/Fondo1.png">
</div>
 <header>
  <table>
		<tr>
	 	  <td class="tdImagen">
	 	 <div>
 				<img src="iconosImagenes/logoSena.png" width="70%" height="70%">
 				</div>	
		 </td>
	    <td class="tdLetras">
 				<h3><b>SISTEMA DE GESTION DE HORARIOS</b></h3>
 				   <h4><b>SIGHO</b></h4>
		 </td>
		<td class="iD"> 
		<div>
 		<img src="iconosImagenes/iconoSigho.png" width="28%" height="20%">
 		</div>	

 	</td>
		</tr>
  </table>
 				
   

 </header>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <center>
 <nav class="nav-bar">
 
  <div class="nav-hold">
    <div class="nav-logo">
      <a href="index.html">SIGHO</a>
    </div>
    <div class="nav-menu" id="nav"> menú</div>
		<ul class="nav-items">
      <li><a href="index.php">INICIO</a>
      <li><a href="soyAprendiz.php">SOY APRENDIZ</a>
      <li><a href="soyInstructor.php">SOY INSTRUCTOR</a>
      <li><a href="soyAdmin.php">ADMIN</a>
    </ul>
  </div> 


</nav>

<main id="ContenedorCuerpo">

<div class="login-page">
    <div class="form">
      <h3>Iniciar Sesión</h3>
       <form class="login-form" method="POST" action="Funciones/ValidarLoginAdm.php">
          <input type="text" name="usuario" placeholder="Usuario"/>
          <input type="password" name="clave" placeholder="Contraseña"/>
          <button><b>Ingresar</b></button>
      </form>
    </div>
  </div>



</main>
</center>


  
    <script src="js/index.js"></script>
    <div class="footer"><center>Laboratorio ADSI - 1193938, Malambo © 2017</center></div>
</body>
</html>
