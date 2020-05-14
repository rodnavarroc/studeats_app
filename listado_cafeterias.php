<?php

$conexion=mysqli_connect("localhost", "root", "", "studeats"); //conectar a la base de datos

?>
<!DOCTYPE html>
<html>

<head>
	<title>StudEats</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&family=Sen&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://kit.fontawesome.com/94f47f52fa.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body style="background-color: #f2f2f2; font-family: Roboto;">

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none; background-color: #101010; color: #fff; font-size: 18px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()"><span style="font-size: 24px;">&times;</span></button>
  <a href="index.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-home"></i> &nbsp;Inicio</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="listado_cafeterias.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-coffee"></i> &nbsp;Cafetería</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="listado_snack.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-cookie-bite"></i> &nbsp;Snack</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="listado_restaurantes.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-hamburger"></i> &nbsp;Restaurant</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="listado_negocios.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-hands-helping"></i> &nbsp;Trade n' eat</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="contacto.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-sticky-note"></i> &nbsp;Solicitud</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="about.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-info-circle"></i> &nbsp;Acerca de</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
</div>


<div class="container" style="overflow: hidden; position: fixed; top: 0; width: 100%; z-index: 10; background-color: #f2f2f2;" id="barraSuperior">
	<div class="row">
		<div class="col-6">
		<button id="openNav" onclick="w3_open()" style="background-color: transparent; border: none; color: #101010; font-size: 24px; font-weight: lighter; padding: 4% 4%; border: none; outline: none;">&#9776;</button>
		</div>
		<div class="col-6">
		<a href="index.php" style="display: block; text-decoration: none; font-family: Roboto; font-size: 16px; color: #101010; padding-top: 8%; text-align: right;"><i class="fas fa-chevron-left"></i> &nbsp;Regresar</a><br>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 0px; z-index: 9;" id="main">
		
		<br><br><br>
		<center><p style="font-family: Sen; font-size: 21px; color: #101010; font-weight: bolder;"><i class="fas fa-coffee"></i> &nbsp;Cafeterías</p></center>
		<hr>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fime.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-IngenieriaMecanicayElectrica.jpg" class="card-img-top"></a>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FIME</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fime'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_facpya.php"><img src="https://image.posta.com.mx/sites/default/files/extra5-_alumnos_saliendo_de_facpya.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FACPYA</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_facpya'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fcb.php"><img src="assets/FCBprincipal.png" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FCB</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fcb'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fcfm.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-CienciasFisicoMatematicas.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FCFM</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fcfm'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fcq.php"><img src="https://media-exp1.licdn.com/dms/image/C4E1BAQG7R3HIIU1GDg/company-background_10000/0?e=2159024400&v=beta&t=_0Hbf7BgAgcS_dFEhmkFkTWmp7NkhjKUjXcgBaC_CW0" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FCQ</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fcq'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_ffyl.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-FilosofiayLetras.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FFYL</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_ffyl'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fic.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-IngenieriaCivil.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FIC</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fic'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_ftsydh.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-TrabajoSocial.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FTSYDH</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_ftsydh'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_facdyc.php"><img src="https://pbs.twimg.com/media/CvqTM4bUkAAGEru.jpg" class="card-img-top"></a>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FACDYC</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_facdyc'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_farq.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-Arquitectura.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FARQ</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_farq'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div><br>

		<div class="card" style="width: 100%;">
		  <a href="cafeterias/cafeteria_fod.php"><img src="https://www.uanl.mx/wp-content/uploads/2018/08/Banner-Fachada-OrganizacionDeportiva.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">FOD</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'cafeterias/cafeteria_fod'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        $conteo = 0;
		        $suma = 0;
		        while($mostrar=mysqli_fetch_array($result))
		        {
		        $suma = $suma + $mostrar['calificacion'];
		        $conteo++; 
		    	}
		    	if($conteo > 0) { $promedio = $suma / $conteo; } else { $promedio = 0; }
		        ?>
		  		<div class="col-6" style="color: #101010; font-size: 14px; padding-top: 2%;"><center><i class="fas fa-star"></i> &nbsp;<?php echo round($promedio,2); ?></center></div>
		  	</div>
		  </div>
		</div>

		<br><br>
</div>

<script>

function w3_open() {
	for (let element of document.getElementsByClassName("w3-bar-item")){
   element.style.display="block";
	}
	for (let element of document.getElementsByClassName("hr-bar-item")){
   element.style.display="block";
	}
  document.getElementById("mySidebar").style.width = "100%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("barraSuperior").style.display = "none";
  document.getElementById("barraSuperior").style.backgroundColor = "transparent";
  document.getElementById("carouselExampleIndicators").style.display = "none";
}

function w3_close() {
  document.getElementById("mySidebar").style.transition = "all 0.3s ease";
  for (let element of document.getElementsByClassName("w3-bar-item")){
   element.style.display="none";
	}
  for (let element of document.getElementsByClassName("hr-bar-item")){
   element.style.display="none";
	}
  document.getElementById("mySidebar").style.width = "0%";
  document.getElementById("barraSuperior").style.display = "block";
  document.getElementById("barraSuperior").style.backgroundColor = "#f2f2f2";
  document.getElementById("carouselExampleIndicators").style.display = "block";
}
</script>

<style type="text/css">
	#footer {
	   position:fixed;
	   left:0px;
	   bottom:0px;
	   height:100px;
	   width:100%;
	   background:transparent;
	}

	a:active
	{
		color: darkgray;
	}

	<?php 
	 $sql="SELECT * FROM comentarios WHERE lugar = '$nomLugar'"; //consulta para obtener los comentarios
	$result=mysqli_query($conexion,$sql);+
	$conteo = 0;
	while($mostrar=mysqli_fetch_array($result)){ $conteo++; } //contar los comentarios 
	?>
	#collapseTwo.collapse.show
	{	
		/* Si no hay 3 o mas comentarios, no se activa el scroll interno */
		<?php if($conteo >= 3) { echo 'width:100%; height:375px; overflow: scroll;'; } else { echo ''; }?>
	}
</style>

</body>
</html>