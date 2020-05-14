<?php

$nomLugar = 'snack_fime';
$conexion=mysqli_connect("localhost", "root", "", "studeats"); //conectar a la base de datos

?>
<!DOCTYPE html>
<html>

<head>
	<title>StudEats</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&family=Sen&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
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
  <a href="../index.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-home"></i> &nbsp;Inicio</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../listado_cafeterias.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-coffee"></i> &nbsp;Cafetería</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../listado_snack.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-cookie-bite"></i> &nbsp;Snack</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../listado_restaurantes.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-hamburger"></i> &nbsp;Restaurant</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../listado_negocios.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-hands-helping"></i> &nbsp;Trade n' eat</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../contacto.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-sticky-note"></i> &nbsp;Solicitud</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
  <a href="../about.php" class="w3-bar-item" style="text-decoration: none; display: block;"><i class="fas fa-info-circle"></i> &nbsp;Acerca de</a>
  <hr class="hr-bar-item" style="height: 1px; color: rgba(0,0,0,0.355); background-color: #fff; opacity: 35%; border: none;">
</div>


<div class="container" style="overflow: hidden; position: fixed; top: 0; width: 100%; z-index: 10; background-color: #f2f2f2;" id="barraSuperior">
	<div class="row">
		<div class="col-6">
		<button id="openNav" onclick="w3_open()" style="background-color: transparent; border: none; color: #101010; font-size: 24px; font-weight: lighter; padding: 4% 4%; border: none; outline: none;">&#9776;</button>
		</div>
		<div class="col-6">
		<a href="../listado_snack.php" style="display: block; text-decoration: none; font-family: Roboto; font-size: 16px; color: #101010; padding-top: 8%; text-align: right;"><i class="fas fa-chevron-left"></i> &nbsp;Regresar</a><br>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 0px; z-index: 9;" id="main">

	<br><br><br>
	<center><h3 style="font-family: Sen; font-size: 24px; color: #fff; background-color: #1fb553; padding: 3% 3%;">Snack FIME</h3></center><br>
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	        <div class="carousel-item active" style="height: 250px; overflow: hidden;">
	            <img class="d-block w-100" src="https://upserve.com/media/sites/2/bigstock-125615822-1100x600.jpg">
	        </div>
	        <div class="carousel-item" style="height: 250px; overflow: hidden;">
	            <img class="d-block w-100" src="https://www.hawaiimagazine.com/sites/default/files/field/image/farmrestaurants-monkeypod4.jpg">
	        </div>
	        <div class="carousel-item" style="height: 250px; overflow: hidden;">
	            <img class="d-block w-100" src="https://cdn2.hubspot.net/hubfs/2498149/Farmers-Table-Express-Meals-min800.jpg">
	        </div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	        <span class="sr-only">Anterior</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	        <span class="carousel-control-next-icon" aria-hidden="true"></span>
	        <span class="sr-only">Siguiente</span>
	    </a>
	</div>

	<div style="font-family: Roboto; font-size: 15px; color: #101010;">
		<br>
		<table class="table" style="border: none;">
			<tr>
				<td>&nbsp;<i class="fas fa-dollar-sign"></i> &nbsp;&nbsp;Rango de precios</td>
				<td>$$ - $$$</td>
			</tr>
			<tr>
				<td><i class="fas fa-clock"></i> &nbsp;Horario</td>
				<td>07:00 AM - 6:00 PM</td>
			</tr>
			<tr>
				<?php //calcular promedio de rating

		        $sql="SELECT * FROM comentarios WHERE lugar = '$nomLugar'"; //consulta para obtener los comentarios
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
				<td><i class="fas fa-star"></i> &nbsp;Rating</td>
				<td><?php echo round($promedio,2); ?></td>
			</tr>
		</table>
	</div>

	<hr><div class="accordion" id="accordionExample">
	  <div class="card" style="background-color: transparent; border: 0;">
	    <div class="card-header" id="headingOne">
	        <center><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color: #101010; font-size: 21px; font-family: Sen;"><i class="fas fa-utensils"></i> &nbsp;Menú</button></center>
	    </div>
	    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
	      <div class="card-body" style="background-color: #fff;">
	        <center>Próximamente...</center>
	      </div>
	    </div>
	  </div>
	</div>

		<hr><center><p style="font-family: Sen; font-size: 21px; color: #101010;"><i class="fas fa-map-marker-alt"></i> &nbsp;Ubicación</p></center>

		<div class="container"><div class="gmap_canvas"><iframe width="100%;" id="gmap_canvas" src="https://maps.google.com/maps?q=fime%20uanl&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:200px;width:350px;}.gmap_canvas {overflow:hidden;background:none}</style></div>

		<hr><div class="accordion" id="accordionExample2">
		  <div class="card" style="background-color: transparent; border: 0;">
		    <div class="card-header" id="headingOne">
		        <center><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration: none; color: #101010; font-size: 21px; font-family: Sen;"><i class="fas fa-comments"></i> &nbsp;Comentarios</button></center>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample2">
		      <div class="card-body" style="background-color: #fff;">
		        
		        <?php 
		        $sql="SELECT * FROM comentarios WHERE lugar = '$nomLugar'"; //consulta para obtener los comentarios
		        $result=mysqli_query($conexion,$sql);
		        while($mostrar=mysqli_fetch_array($result)){ //crear un elemento Card por cada comentario existente
		        ?> 
				<div class="card" style="border: solid; border-width: 1px; border-color: #d2d2d2;">
				  <div class="card-body">
				  	<h5 class="card-title" style="font-family: Sen; font-size: 18px;"><i class="far fa-comment-alt"></i> &nbsp;<?php echo $mostrar['nombre_usuario'];?></h5>
				    <p style="text-align: justify;"><?php echo $mostrar['comentario'];?>
				    <center>
				    	<?php
				    	
				    	$temp = 5 - $mostrar['calificacion']; //estrellas sin rellenar

				    	for($i = 0; $i < $mostrar['calificacion']; $i++)
				    	{
				    		echo '<i class="fas fa-star"></i>'; //estrellas rellenas
				    	}
				    	
				    	for($i = 0; $i < $temp; $i++)
				    	{
				    		echo '<i class="far fa-star"></i>'; //estrellas sin rellenar
				    	}
				    	
				    	?>
				    </center>
				    </p>
				  </div>
				</div>
				<br>
				<?php } ?>

		      </div>
		    </div>
		  </div>
		</div>

		<hr>
		<div class="card">
		  <div class="card-body"><br>
		  	<center><h5 class="card-title" style="font-family: Sen; font-size: 21px;">¿Qué opinas de este lugar?</h5></center><br>
		    <form action="scripts/comentar.php?ref=<?php echo $nomLugar; ?>" method="post" enctype="multipart/form-data">
		    	<label> ¿Cómo te llamas? *</label>
		    	<input class="form-control" type="text" name="nombre" style="width: 100%;" placeholder="Tu nombre aquí" required><br>
			    <label>¿Cuál es tu calificación del lugar? *</label>
			    <select class="custom-select" id="inputEstrellas" required name="calificacion">
				    <option value="1"><?php for($i = 0; $i <= 0; $i++) { echo '<span>★</span>'; }?></option>
				    <option value="2"><?php for($i = 0; $i <= 1; $i++) { echo '<span>★</span>'; }?></option>
				    <option value="3"><?php for($i = 0; $i <= 2; $i++) { echo '<span>★</span>'; }?></option>
				    <option value="4"><?php for($i = 0; $i <= 3; $i++) { echo '<span>★</span>'; }?></option>
				    <option value="5" selected><?php for($i = 0; $i <= 4; $i++) { echo '<span>★</span>'; }?></option>
				  </select><br><br>
				  <label>Cuéntanos tu experiencia (Opcional)</label>
				  <textarea onkeyup="countChar(this)" rows="4" class="form-control" type="text" name="comment" style="width: 100%;" placeholder="Describe aquí el lugar, la comida, el ambiente..."></textarea><div id="charNum" style="font-size: 14px; padding-top: 5px; float: right;"></div><br>
				  <p style="color: darkgray;"><small>* Obligatorio</small></p>
			    <center><button type="submit" class="btn btn-outline-dark">Enviar comentarios</button></center>
		    </form>
		    </p>
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

function countChar(val) {
        var len = val.value.length;
        if (len >= 280) {
          val.value = val.value.substring(0, 280);
        } else {
          $('#charNum').text(len+"/280");
        }
      };
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