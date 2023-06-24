<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style1.css">
  <link rel="icon" href="imgs/DJ.png" type="image/png">
  
</head>

<style type = "text/css">

        button{
            align-content: center;
            font-family: 'Roboto';
            background: #4568DC;
            background: -webkit-linear-gradient(to right, #B06AB3, #4568DC);
            background: linear-gradient(to right, #B06AB3, #4568DC);
            border: none;
            display: block;
            width: 10%;
            margin: 10px auto;
            color: #fff;
            height: 45px;
            cursor: pointer;
        }

        .bg-custom {
            background-color: #000002; /* Color personalizado (en este caso, magenta) */
        }

        .bg-custom-gradient {
             background-image: linear-gradient(to right, #1591C9, #FF26C6); /* Gradiente personalizado */
        }

        .bg-custom-gradient-alt {
            background-color: linear-gradient(to right, #FC45FC,#26C65C); /* Gradiente personalizado */
        }

        .cont {
            max-width: 1800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 100px;
            background-color: white;
            text-align: left;
            align-items: center;
        }

        table {
            border: solid 2px #7e7c7c;
            border-collapse: collapse;
            justify-content: center; 
            align-items: center;
            width: 600px;
            margin: auto;
        }

        th{
            background-color: lightgrey;
            border: solid  1px grey;
            padding: 2px;
            text-align: left;
            font-size: 20px;
        }

        td, h1 {
            border: solid 1px grey;
            font-size: 20px;
            padding: 2px;
            text-align: left;
        }

        h2{
            font-size: 20px;
        }


    </style>

<body>
  
    <div class="bg-custom-gradient">
    <nav class="navbar navbar-light navbar-expand-lg bg-light ">
        <div class="container-fluid">
           <a class="navbar-brand" href="#">
           <img src="imgs/DJ.png" alt="" width="50" class="d-inline-block align-text-top">
           </a>
           <a class="navbar-brand" href="#">
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
                 <a class="nav-link" href="LoginCom.html"> Comprobante</a>
              </div>
           </div>
        </div>
     </nav>

    <div class = "cont">
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

                    <label>Tipo de Evento:</label>

                    <select name="evento" size="1">
                        <option value=<?php echo $fila['evento']?>><?php echo $fila['evento']?></option>
                        <option value="Bautizo">Bautizo</option>
                        <option value="Primera Comunion">Primera Comunion</option>
                        <option value="XV Años">XV Años</option>
                        <option value="Cumpleaños">Cumpleaños</option>
                        <option value="Boda">Boda</option>
                        <option value="Otros">Otros</option>
                    </select>

                    <label>Numero de Personas:</label>
                    <input type="number" name="personas" value="<?php echo $fila['nPersonas']?>"><br><br>
                    <label>Horarios disponibles:</label>
                    
                    <select id="horario" name="horarios" size="1">
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
                $horario = $_GET['horarios'];
                $folio = $_GET['folio'];

                if ($nombre!=NULL&&$aPaterno!=NULL&&$aMaterno!=NULL&&$fechaN!=NULL&&$curp!=NULL&&$gmail!=NULL&&$telefono!=NULL&&$estado!=NULL&&$alcaldia!=NULL&&$evento!=NULL&&$nPersonas!=NULL&&$horario!=NULL&&$folio!=NULL) {
                     $sql3 = "UPDATE datosclientes SET nombre = '".$nombre."', aPaterno = '".$aPaterno."',aMaterno = '".$aMaterno."', fechaN = '".$fechaN."', CURP = '".$curp."', gmail = '".$gmail."',telefono = '".$telefono."',estado = '".$estado."',alcaldia = '".$alcaldia."',evento = '".$evento."',nPersonas = '".$nPersonas."',horario = '".$horario."', folio = '".$folio."' WHERE idCliente = '".$idClientess."'";
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

