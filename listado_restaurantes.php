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
		<center><p style="font-family: Sen; font-size: 21px; color: #101010; font-weight: bolder;"><i class="fas fa-hamburger"></i> &nbsp;Restaurant</p></center>
		<hr>

		<div class="card" style="width: 100%;">
		  <a href="restaurantes/subway.php"><img src="https://www.digitalavmagazine.com/wp-content/uploads/2019/06/Panasonic-en-Subway.jpg" class="card-img-top"></a>
		  <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Subway</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'subway'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/licslightfood.php"><img src="assets/lics_principal.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">LICS Lightfood</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'licslightfood'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/ilikepizza.php"><img src="https://i.ytimg.com/vi/zAJSi032soI/maxresdefault.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">I Like Pizza</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'ilikepizza'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/lasalitas.php"><img src="https://info7rm.blob.core.windows.net.optimalcdn.com/images/2019/11/14/alitas.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Las Alitas</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'lasalitas'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/papajohns.php"><img src="https://www.papajohns.com/free-pizza/img/hero-free-pizza.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Papa John's</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'papajohns'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/churchschicken.php"><img src="https://www.churchs.com/wp-content/themes/churchs-web/static/img/og-share/og-share-wide-515f022036.png" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Church's Chicken</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'churchschicken'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/huixin.php"><img src="https://grandhotelier.com/wp-content/uploads/2019/08/La-comida-china-sus-secretos-y-beneficios.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Hui Xin Comida China</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'huixin'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/elsabordeargentina.php"><img src="https://dam.cocinafacil.com.mx/wp-content/uploads/2013/07/empanadas-argentinas.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">El Sabor de Argentina</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'elsabordeargentina'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/donatota.php"><img src="https://www.elmanana.com.mx/imgs/noticias/original/bc58e18833439a0_c4ee9cb01cad9c29925f9d5ff8101fc5" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">Doña Tota Gorditas</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'donatota'"; //consulta para obtener los comentarios
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
		  <a href="restaurantes/latostada.php"><img src="https://www.lachapultepec.com/wp-content/uploads/2018/09/platillo_tacos.jpg" class="card-img-top"></a>
		   <div class="card-body">
		  	<div class="row">
		  		<div class="col-6"><h5 class="card-title">La Tostada</h5></div>
		  		<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = 'latostada'"; //consulta para obtener los comentarios
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

	#main_button_cafe:active
	{
		color: darkgray;
	}
</style>

</body>
</html>