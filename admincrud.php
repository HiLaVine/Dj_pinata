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
            max-width: 2200px;
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
  <?php
    include 'conexion2.php';
    $consulta = "SELECT * FROM datosclientes";
    $resultado = mysqli_query($connection,$consulta);
  ?>
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
                 <a class="nav-link" href="recpdf.php"> Comprobante</a>
              </div>
           </div>
        </div>
     </nav>
  <div class="cont">
    <div>
      <p style="font-size: 30px; text-align: center;">USUARIOS REGISTRADOS</p>
      <table>
        <thead>
         <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO PATERNO</th>
            <th>APELLIDO MATERNO</th>
            <th>FECHA DE NACIMINETO</th>
            <th>CURP</th>
            <th>CORREO ELECTRONICO</th>
            <th>TELEFONO</th>
            <th>ENTIDAD FEDERATIVA</th>
            <th>ALCALDIA</th>
            <th>EVENTO</th>
            <th>No. PERSONAS</th>
            <th>HORARIO</th>
            <th>FOLIO</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($filas=mysqli_fetch_assoc($resultado)){

            ?>
          <tr>
            <td><?php echo $filas['idCliente']?></td>
            <td><?php echo $filas['nombre']?></td>
            <td><?php echo $filas['aPaterno']?></td>
            <td><?php echo $filas['aMaterno']?></td>
            <td><?php echo $filas['fechaN']?></td>
            <td><?php echo $filas['CURP']?></td>
            <td><?php echo $filas['gmail']?></td>
            <td><?php echo $filas['telefono']?></td>
            <td><?php echo $filas['estado']?></td>
            <td><?php echo $filas['alcaldia']?></td>
            <td><?php echo $filas['evento']?></td>
            <td><?php echo $filas['npersonas']?></td>
            <td><?php echo $filas['horario']?></td>
            <td><?php echo $filas['folio']?></td>
            <td>
              <a href="modificar.php?idCliente=<?php echo $filas['idCliente']?>">Editar</a>
              <a href="eliminar.php?idCliente=<?php echo $filas['idCliente']?>">Eliminar</a>
            </td>
          </tr>
          <?php }?>
      </table>
    </div>

    <br>

    <div>
      <p style="font-size: 30px ; text-align: center;">AGREGAR USUARIOS</p>
      <br>
        <form method="post" action="agregarusr.php">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre"><span class="barra"></span>
                    <label for="apellidoP">Apellido Paterno:</label>
                    <input type="text" id="apellidoP" name="apellidoP"><span class="barra"></span>
                    <label for="apellidoM">Apellido Materno:</label>
                    <input type="text" id="apellidoM" name="apellidoM"><span class="barra"></span>
                    <label for="fechaN">Fecha de Nacimiento</label>
                    <input type="date" id="fechaN" name="fechaN"  max="2005-05-28" min="1945-05-28" required><span class="barra"></span>

                    <br><br>

                    <label for="curp">CURP:</label>
                    <input type="text" id="curp" name="curp"><span class="barra"></span>
                    <label for="mail">Correo electronico:</label>
                    <input type="email" id="mail" name="mail"><span class="barra"></span>
                    <label for="telefono">Numero de Telefono:</label>
                    <input type="text" id="telefono" name="telefono"><span class="barra"></span>

                    <label for="entidadF">Entidad Federativa:</label>
                    <select id="entidadF" name="entidadF" size="1">
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

                    <br><br>

                    <label for="alcaldia">Alcaldia:</label>
                    <select id="alcaldia" name="alcaldia" size="1">
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
                        <option value="bautizo">Bautizo</option>
                        <option value="primeraC">Primera Comunion</option>
                        <option value="xv">XV Años</option>
                        <option value="cumpleaños">Cumpleaños</option>
                        <option value="boda">Boda</option>
                    </select>

                    <label for="personas">Numero de Personas:</label>
                    <input type="number" id="personas" name="personas"><span class="barra"></span>

                    <label for="horarios">Horarios disponibles:</label>
                    <select id="horario" name="horario" size="1">
                        <option value="Viernes de 12:00pm - 2:00am">Viernes de 12:00pm - 2:00am</option>
                        <option value="Sabados de 2:00pm - 2:00am">Sabados de 2:00pm - 2:00am</option>
                        <option value="Domingos de 9:00am - 2:pm">Domingos de 9:00am - 2:pm</option>
                    </select>
                    <br><br>
                    <button type="submit" class="enviar" style="text-align: center;">AGREGAR</button>
      </form>

    </div>

      <p><a href = "cierre.php">cierra sesion</a>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>