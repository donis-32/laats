<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1) {
	    $nombre = trim($_POST['nombre']);
	    $apellido = trim($_POST['apellido']);
	    
	    $email = trim($_POST['email']);
        $ig = trim($_POST['ig']);
	    $num =  trim($_POST['numtel']);
	    $talla =  trim($_POST['tallas']);
	    $fechareg = date("Y-m-d");
        $estilo = trim($_POST['estilocalz']);
        
	    date_default_timezone_set('America/Guatemala');
		$hora = date("G:i:s");

	   $consulta = "INSERT INTO mnto_honeyflux(nombre, apellido, email, ig, numtel, tallas,estilo,hora,fecha) VALUES ('$nombre','$apellido' ,'$email', '$ig', '$num','$talla','XC72','$hora','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta); $resultado = mysqli_query($conex,$consulta);
        
	    if ($resultado) {
	    	?> 
                <link rel="stylesheet" href="./style.css">
	    		<div id='mstamvan'>
				<div id='belakang'></div>
				<div class='isinya'>
				    <a href='https://www.theseek.store/' target='_blank'/>
                <div class="containerttr">
                    <img id="popupimg" src="assets/images/Aviso-redirecci%C3%B3n.png" />
                </div>
				  </div>
				</div>
				<!-- partial -->
			  	<script  src="./script.js"></script>

			  	<script type="text/javascript">
					function redireccionar(){
					  window.location="https://www.theseek.store/";
					} 
					setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos
				</script>
           <?php
            
	    } else {
	    	?> 
                <link rel="stylesheet" href="./style.css">
	    		<div id='mstamvan'>
				<div id='belakang'></div>
				<div class='tulisan' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)'><a>&#215;</a></div>
				<div class='isinya'>
				    <a href='https://www.theseek.store/' target='_blank'/>
                <div class="containerttr">
                    <img id="popupimg" src="assets/images/Aviso-Error.png" />
                </div>
				  </div>
				</div>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>