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

<body style="background-color: #f2f2f2; font-family: Roboto;" id="mBody">

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
	<center><h1 style="font-family: Sen; color: #1fb553; font-size: 26px; font-weight: bolder;">¿Quieres agregar tu negocio?</h1></center><br>
	
	<div class="card">
		  <div class="card-body">
		  	<center><h5 class="card-title" style="font-family: Sen; font-size: 21px;">¡Llena este formulario!</h5></center><br>
		    <form action="scripts/crear_negocio.php" method="post" enctype="multipart/form-data">
		    	<label>¿Cómo te llamas? *</label>
		    	<input class="form-control" type="text" name="nombre_solicitante" style="width: 100%;" placeholder="Tu nombre aquí" required><br>

			    <label>¿Cuál es tu correo electrónico? *</label>
		    	<input class="form-control" type="email" name="correo_solicitante" style="width: 100%;" placeholder="alguien@mail.com" required><br>

		    	<label>¿Cómo se llama tu negocio? *</label>
		    	<input class="form-control" type="text" name="nombre_negocio" style="width: 100%;" placeholder="El nombre de tu negocio aquí" required><br>
		    	
		    	<label>Ingresa el WhatsApp de contacto de tu negocio a 10 dígitos *</label>
		    	<input class="form-control" type="text" name="telefono_negocio" style="width: 100%;" placeholder="8139280140" required><br>
		    	
		    	<label>¿Cuál es o son los horarios de tu negocio? *</label>
		    	<input class="form-control" type="text" name="horarios_negocio" style="width: 100%;" placeholder="Los horarios de tu negocio" required><br>

		    	<label>¿Cuál es el rango de precios de tu negocio? *</label>
			    <select class="custom-select" id="inputEstrellas" required name="rango_precios">
				    <option value="$ - $$" selected>$ - $$ (Medio - Bajo)</option>
				    <option value="$$ - $$$">$$ - $$$ (Alto)</option>
				</select><br><br>

				<label>¿Cuáles son los productos de tu negocio?*</label>
		    	<div id="listaProductos">
		    		<input class="form-control" type="text" name="precios_neg1" style="width: 100%;" placeholder="Ingresa en formato Producto - $Precio" required><br>
		    	</div>
		    	<center><button class="btn btn-outline-success" onclick="crearProducto()" type="button">Agregar otro producto</button></center>
		    	
		    	<input class="form-control" type="text" name="productosIngresados" id="productosIngresados" value="1" style="opacity: 0;"> 
		    	<!-- Este input es invisible al usuario, solo es para contar los productos que se ingresaron  -->

				<label>¿Dónde se ubica tu negocio? *</label>
		    	<input class="form-control" type="text" name="ubicacion_negocio" style="width: 100%;" placeholder="Pega aquí la dirección de Google Maps" required>
		    	<center><br><a href="https://maps.google.com" target="blank" class="btn btn-outline-primary">Ir a Mapas de Google</a><br></center>
		    	<br><label style="text-align: justify;"><b>¿Cómo funciona?</b>&nbsp;Haz click en "Ir a Mapas de Google", copia la dirección de tu negocio y pégala en el campo de texto.</label><br><br>

		    	<label>Anexa una foto de tu negocio aquí *</label>
		    	<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroupFileAddon01">Subir imagen</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile01"
				      aria-describedby="inputGroupFileAddon01" name="fotoPrincipal" required>
				      <label class="custom-file-label" for="inputGroupFile01" id="labelBuscar1"></label>
				  </div>
				</div>
		    	
		    	<br><label style="text-align: justify;">A continuación, ingresa 3 fotos para la página de tu negocio. Pueden ser platillos, fotos del ambiente, entre otras.</label><br><br>

				<label>Foto principal *</label>
		    	<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroupFileAddon02">Subir imagen</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile02"
				      aria-describedby="inputGroupFileAddon02" name="fotoSlider1" required>
				      <label class="custom-file-label" for="inputGroupFile02" id="labelBuscar2"></label>
				  </div>
				</div><br>

				<label>Foto intermedia *</label>
		    	<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroupFileAddon03">Subir imagen</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile03"
				      aria-describedby="inputGroupFileAddon03" name="fotoSlider2" required>
				      <label class="custom-file-label" for="inputGroupFile03" id="labelBuscar3"></label>
				  </div>
				</div><br>

				<label>Foto final *</label>
		    	<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroupFileAddon04">Subir imagen</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="inputGroupFile04"
				      aria-describedby="inputGroupFileAddon04" name="fotoSlider3" required>
				      <label class="custom-file-label" for="inputGroupFile04" id="labelBuscar4"></label>
				  </div>
				</div><br>
				
				<center><p style="color: darkgray;"><small>Los campos marcados con * son obligatorios</small></p></center>

			    <center><button type="submit" class="btn btn-outline-dark">Crear mi negocio</button></center>
		    </form>
		    </p>
		  </div>
		</div><br>

</div>

<script>
var nextinput = 1;

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
  document.getElementById("labelBuscar1").style.opacity = "0";
  document.getElementById("labelBuscar2").style.opacity = "0";
  document.getElementById("labelBuscar3").style.opacity = "0";
  document.getElementById("labelBuscar4").style.opacity = "0";
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
  document.getElementById("labelBuscar1").style.opacity = "100";
  document.getElementById("labelBuscar2").style.opacity = "100";
  document.getElementById("labelBuscar3").style.opacity = "100";
  document.getElementById("labelBuscar4").style.opacity = "100";
}

$('#inputGroupFile01').on('change',function(){
var fileName = $(this).val().replace('C:\\fakepath\\', "");
$(this).next('.custom-file-label').html(fileName);
})

$('#inputGroupFile02').on('change',function(){
var fileName = $(this).val().replace('C:\\fakepath\\', "");
$(this).next('.custom-file-label').html(fileName);
})

$('#inputGroupFile03').on('change',function(){
var fileName = $(this).val().replace('C:\\fakepath\\', "");
$(this).next('.custom-file-label').html(fileName);
})

$('#inputGroupFile04').on('change',function(){
var fileName = $(this).val().replace('C:\\fakepath\\', "");
$(this).next('.custom-file-label').html(fileName);
})

function crearProducto() {
  nextinput++;
  var x = document.createElement("INPUT");
  var brk = document.createElement("BR");
  x.setAttribute("type", "text");
  x.setAttribute("class", "form-control");
  x.setAttribute("placeholder", "Ingresa en formato Producto - $Precio");
  name = 'precios_neg'+nextinput+'';
  x.setAttribute("name",name);
  document.getElementById("listaProductos").appendChild(x);
  document.getElementById("listaProductos").appendChild(brk);
  document.getElementById("productosIngresados").value = nextinput;
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

	.custom-file-input ~ .custom-file-label::after {
    content: "Buscar";
	}
</style>

</body>
</html>