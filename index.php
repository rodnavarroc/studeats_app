<!DOCTYPE html>
<html>

<head>
	<title>StudEats</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&family=Sen&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/otros_estilos.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://kit.fontawesome.com/94f47f52fa.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
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

<button id="openNav" onclick="w3_open()" style="background-color: transparent; border: none; color: #101010; font-size: 24px; font-weight: lighter; padding: 4% 4%; border: none; outline: none;">&#9776;</button>

<div class="container" style="" id="main">

	<center><img src="assets/main_icon_negro.svg" class="img-fluid" width="40%;"></center>
	<center><h1 style="font-family: Sen; color: #1fb553; font-weight: bolder; font-size: 32px;">StudEats</h1></center>
	<center><h3 style="font-family: Nunito; color: #101010; font-size: 140%;">¿En dónde vamos a comer hoy?</h3></center>

	<div class="container-fluid">
		<div class="row">
			<div class="col-1"></div>
			<div id="main_button_cafe" class="col-10" style="border-radius: 15px; border: 2px solid #101010; padding: 10px; width: 100%; margin: 5px;">
				<center><a href="listado_cafeterias.php" style="color: #101010; text-decoration: none; display: block; font-size: 18px;"><i class="fas fa-coffee"></i>&nbsp;Cafetería</a></center>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div id="main_button_snack" class="col-10" style="border-radius: 15px; border: 2px solid #101010; padding: 10px; width: 100%; margin: 5px;">
				<center><a href="listado_snack.php" class="" style="color: #101010; text-decoration: none; display: block; font-size: 18px;"><i class="fas fa-cookie-bite"></i> &nbsp;Snack</i></a></center>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div id="main_button_snack" class="col-10" style="border-radius: 15px; border: 2px solid #101010; padding: 10px; width: 100%; margin: 5px;">
				<center><a href="listado_restaurantes.php" class="" style="color: #101010; text-decoration: none; display: block; font-size: 18px;"><i class="fas fa-hamburger"></i> &nbsp;Restaurant</i></a></center>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div id="main_button_snack" class="col-10" style="border-radius: 15px; border: 2px solid #101010; padding: 10px; width: 100%; margin: 5px;">
				<center><a href="listado_negocios.php" class="" style="color: #101010; text-decoration: none; display: block; font-size: 18px;"><i class="fas fa-hands-helping"></i> &nbsp;Trade n' eat</i></a></center>
			</div>
			<div class="col-1"></div>
		</div>
	</div>
</div>

<div id="footer">
	<img src="assets/footer_principal.png" width="100%;">
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