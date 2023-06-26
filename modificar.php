<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/sphp.css">
  <link rel="icon" href="imgs/DJ.png" type="image/png">
  
</head>

<body>
  
    <div class="bg-custom-gradient">
    <nav class="navbar navbar-light navbar-expand-lg bg-light ">
        <div class="container-fluid">
           <a class="navbar-brand" href="index.html">
           <img src="imgs/DJ.png" alt="" width="50" class="d-inline-block align-text-top">
           </a>
           <a class="navbar-brand" href="index.html">
            <img src="imgs/djLetrasSinFondo.png" alt="" width="120" class="d-inline-block align-text-top">
            </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                 <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                 <a class="nav-link" href="contratacion.html">Contratación</a>
                 <a class="nav-link" href="indexadmin.php"> Admin</a>
                 <a class="nav-link" href="recpdf.php"> Comprobante</a>
              </div>
           </div>
        </div>
     </nav>

    <div class = "cont1">
        <br><p style="font-size: 30px ; text-align: center;">MODIFICAR USUARIOS</p><br>
        <?php

            include 'conexion2.php';
            $idCliente = $_GET['idCliente'];
            $sql = "SELECT * FROM datosclientes WHERE idCliente = '".$idCliente."'";
            $resultado = mysqli_query($connection,$sql);
            while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <div>
                <form>
                    <input type="hidden" name="idC" value="<?php echo $fila['idCliente']?>">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" value="<?php echo $fila['nombre']?>">
                    <label>Apellido Paterno:</label>
                    <input type="text" name="apellidoP" value="<?php echo $fila['aPaterno']?>">
                    <label>Apellido Materno:</label>
                    <input type="text" name="apellidoM" value="<?php echo $fila['aMaterno']?>"><br><br>
                    <label>Fecha de Nacimiento</label>
                    <input type="date" name="fechaN"  max="2005-05-28" min="1945-05-28" value = "<?php echo $fila['fechaN']?>">
                    <label>CURP:</label>
                    <input type="text" name="curp" value="<?php echo $fila['CURP']?>">
                    <label>Correo electronico:</label>
                    <input type="email" name="mail" value="<?php echo $fila['gmail']?>">
                    <label>Numero de Telefono:</label>
                    <input type="text" name="telefono" value="<?php echo $fila['telefono']?>"><br><br>
                   
                    <label>Entidad Federativa:</label>
                    <select id="entidadF" name="entidadF" size="1">
                        <option value=<?php echo $fila['estado']?>><?php echo $fila['estado']?></option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de Mexico">Ciudad de Mexico</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Michoacan">Michoacan</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo Leon">Nuevo Leon</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Queretaro">Queretaro</option>
                        <option value="QuintanaR">Quintana Roo</option>
                        <option value="San Luis Potosi">San Luis Potosi</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatan">Yucatan</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>

                    <label>Alcaldia:</label>
                    
                    <select id="alcaldia" name="alcaldia" size="1">
                        <option value=<?php echo $fila['alcaldia']?>><?php echo $fila['alcaldia']?></option>
                        <option value="Alvaro Obregon">Álvaro Obregón</option>
                        <option value="Azcapotzalco">Azcapotzalco</option>
                        <option value="Benito Juarez">Benito Juárez</option>
                        <option value="Coyoacan">Coyoacán</option>
                        <option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
                        <option value="Cuauhtemoc">Cuauhtémoc</option>
                        <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                        <option value="Iztacalco">Iztacalco</option>
                        <option value="Iztapalapa">Iztapalapa</option>
                        <option value="Magdalena Contreras">Magdalena Contreras</option>
                        <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                        <option value="Milpa Alta">Milpa Alta</option>
                        <option value="Tlahuac">Tláhuac</option>
                        <option value="Tlalpan">Tlalpan</option>
                        <option value="Venustiano Carranza">Venustiano Carranza</option>
                        <option value="Xochimilco">Xochimilco</option>
                    </select>

                    <label for="evento">Tipo de Evento:</label>
                    <select id="evento" name="evento" size="1">
                    <option value=<?php echo $fila['evento']?>><?php echo $fila['evento']?></option>
                        <option value="bautizo">Bautizo</option>
                        <option value="primeraC">Primera Comunion</option>
                        <option value="xv">XV Años</option>
                        <option value="cumpleaños">Cumpleaños</option>
                        <option value="boda">Boda</option>
                    </select>

                    <label for="personas">Numero de Personas:</label>
                    <input type="number" id="personas" name="personas" value="<?php echo $fila['nPersonas']?>"><span class="barra"></span>

                    <label for="fnac">Fecha del evento</label>
                        <input type="date" id="fechaE" name="fechaE" min="2023-01-01" max="2023-31-12" required value = "<?php echo $fila['fechaEv']?>">

                        <br><br>

                    <label for="paquete">Paquete</label>
                      <select  aria-label="Default select example" id="paquete" name="paquete" required>
                      <option value=<?php echo $fila['paquete']?>><?php echo $fila['paquete']?></option>
                          <option value="Paquete básico">Paquete Básico</option>
                          <option value="Paquete premium">Paquete Premium</option>
                        </select>

                    <label for="recinto">Salon o jardin</label>
                        <select aria-label="Default select example" id="recinto" name="recinto" required>
                        <option value=<?php echo $fila['lugar']?>><?php echo $fila['lugar']?></option>
                            <option value="Jmayita">Jardin Mayita</option>
                            <option value="IMITI">Salon IMITI</option>
                            <option value="Luc34">Luc34</option>
                        </select>

                    <label for="horarios">Horarios disponibles:</label>
                    <select id="horario" name="horario" size="1">
                        <option value=<?php echo $fila['horario']?>><?php echo $fila['horario']?></option>
                        <option value="Viernes de 12:00pm - 2:00am">Viernes de 12:00pm - 2:00am</option>
                        <option value="Sabados de 2:00pm - 2:00am">Sabados de 2:00pm - 2:00am</option>
                        <option value="Domingos de 9:00am - 2:pm">Domingos de 9:00am - 2:pm</option>
                    </select>

                    <input type="hidden" name="folio" value="<?php echo $fila['folio']?>">

                    <button type="submit" class="enviar" style="text-align: center;">MODIFICAR</button>

                </form>
            <?php } ?>
            </div>
            <?php
                $idClientess = $_GET['idC']; 
                $nombre = $_GET['nombre'];
                $aPaterno = $_GET['apellidoP'];
                $aMaterno = $_GET['apellidoM'];
                $fechaN = $_GET['fechaN'];
                $curp = $_GET['curp'];
                $gmail = $_GET['mail'];
                $telefono = $_GET['telefono'];
                $estado = $_GET['entidadF'];
                $alcaldia = $_GET['alcaldia'];
                $evento = $_GET['evento'];
                $nPersonas = $_GET['personas'];
                $horario = $_GET['horario'];

                $fechaEv = $_GET['fechaE'];
                $lugar = $_GET['recinto'];
                $paquete = $_GET['paquete'];

                $folio = $_GET['folio'];


                if ($nombre!=NULL&&$aPaterno!=NULL&&$aMaterno!=NULL&&$fechaN!=NULL&&$curp!=NULL&&$gmail!=NULL&&$telefono!=NULL&&$estado!=NULL&&$alcaldia!=NULL&&$evento!=NULL&&$nPersonas!=NULL&&$horario!=NULL&&$fechaEv!=NULL&&$lugar!=NULL&&$paquete!=NULL&&$folio!=NULL) {
                     $sql3 = "UPDATE datosclientes SET nombre = '".$nombre."', aPaterno = '".$aPaterno."',aMaterno = '".$aMaterno."', fechaN = '".$fechaN."', CURP = '".$curp."', gmail = '".$gmail."',telefono = '".$telefono."',estado = '".$estado."',alcaldia = '".$alcaldia."',evento = '".$evento."',nPersonas = '".$nPersonas."',horario = '".$horario."', fechaEv = '".$fechaEv."',lugar = '".$lugar."',paquete = '".$paquete."',folio = '".$folio."' WHERE idCliente = '".$idClientess."'";
                    mysqli_query($connection,$sql3);
                    if ($nombre=1) {
                     header("location:admincrud.php");
                        }
                    }
            ?>
            

        ?>
    </div>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>