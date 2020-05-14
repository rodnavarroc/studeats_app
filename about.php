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
	<center><img src="assets/main_icon_negro.svg" class="img-fluid" width="40%;"></center>
	<center><h1 style="font-family: Sen; color: #1fb553; font-weight: bolder; font-size: 32px;">StudEats</h1></center>
	<p style="font-family: Roboto; font-size: 17px; text-align: justify;"><br>
		StudEats es una webapp creada y diseñada por y para estudiantes que buscan comer dentro de su universidad y conocer los lugares disponibles dentro de ésta. <br><br>

		Te invitamos a conocer los lugares de comida cerca de ti. <br>

		<center><span style="font-size: 18px; font-weight: bolder;">¡Buen Provecho!</span></center><br>

		<span style="color: darkgray;"><center><p style="font-size: 16px;">Versión: 1.0.0</p></center></span>
	</p>
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