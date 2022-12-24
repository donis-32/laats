<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laats - Laats</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="https://laats.net/wp-content/uploads/2020/07/favicon.png" type="image/png" sizes="16x16">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
    <div class="contend">
            <form method="POST" id="form">
                <div class="form">
                    
                    <img id="imglogo" src="assets/images/log-png.png">
                    
                    <h1>Orden de Servicio</h1>
                    
                    <div class="grupo">
                        <label for="start">Fecha:</label>
                        <input type="date" id="start" name="fecha_servicio" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"  max="2023-12-31">
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="nombre_cliente" placeholder="Nombre Cliente" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="direccion_cliente" placeholder="Dirección" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="contacto_cliente" placeholder="Contacto" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="number" name="telefono_cliente" placeholder="Telefono" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="email" name="email_cliente" placeholder="E-mail" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="nombre_equipo" placeholder="Nombre Equipo" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="marca_equipo" placeholder="Marca" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="modelo_equipo" placeholder="Modelo" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="serie_equipo" placeholder="Serie" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="textarea" name="observaciones_servicio" placeholder="Observaciones" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="status_inicial_equipo" placeholder="Estado actual del Equipo" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="status_final_equipo" placeholder="Estado final del Equipo" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">
                        <input type="text" name="tecnico" placeholder="Tecnico asignado" required>
                        <span class="barra"></span>
                    </div>
                    
                    <br>
                    
                    <div class="grupo">
                        <label>Hora Entrada</label>
                        <input type="time" name="hora_entrada_tecnico"  min="01:00" max="24:00" required>
                        <span class="barra"></span>
                    </div>
                    
                    <br>
                    
                    <div class="grupo">
                        <label>Hora Salida</label>
                        <input type="time" name="hora_salida_tecnico"  min="01:00" max="24:00" required>
                        <span class="barra"></span>
                    </div>
                  
                    <br>
                    
                     <div>
                        <select class="orderby" id="dropdown" name="calificacion">
                            <option disabled selected>Calificacion</option>
                            <option value="exelente">Exelente</option>
                            <option value="bueno">Bueno</option>
                            <option value="mejorar">Mejorar</option>
                        </select>
                    </div>
                    
                    <div class="grupo">
                        <input type="textarea" name="observacion_cliente" placeholder="Observaciones" required>
                        <span class="barra"></span>
                    </div>
                    
                    <div class="grupo">     
                        <input type="checkbox" id="newsltt" name="cliente_acepta">
                        <label for="newsltt" id="tt" style="font-size: 20px;">El cliente acepta enviar este formulario.</label>
                    </div>
                    <button type="submit" name="register">enviar</button>
                </div>
            </form>
            </div>
    <?php 
      include("assets/registrar.php");
    ?>
</body>    
 </html>