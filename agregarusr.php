<?php
        include 'conexion2.php'; 
        $nombre = $_POST['nombre'];
        $aPaterno = $_POST['apellidoP'];
        $aMaterno = $_POST['apellidoM'];
        $fechaN = $_POST['fechaN'];
        $curp = $_POST['curp'];
        $gmail = $_POST['mail'];
        $telefono = $_POST['telefono'];
        $estado = $_POST['entidadF'];
        $alcaldia = $_POST['alcaldia'];
        $evento = $_POST['evento'];
        $nPersonas = $_POST['personas'];
        $horario = $_POST['horario'];
        $separador = "-";
        $separada = explode($separador, $fechaN);
        $unida = implode($separada);
        $folio = $unida.$curp;

        if ($nombre!=NULL&&$aPaterno!=NULL&&$aMaterno!=NULL&&$fechaN!=NULL&&$curp!=NULL&&$gmail!=NULL&&$telefono!=NULL&&$estado!=NULL&&$alcaldia!=NULL&&$evento!=NULL&&$nPersonas!=NULL&&$horario!=NULL&&$folio!=NULL) {
            $sql = "INSERT INTO datosclientes(nombre, aPaterno, aMaterno, fechaN, CURP, gmail, telefono, estado, alcaldia, evento, nPersonas, horario, folio)
              VALUES
                ('".$nombre."','".$aPaterno."','".$aMaterno."','".$fechaN."','".$curp."','".$gmail."','".$telefono."','".$estado."','".$alcaldia."','".$evento."','".$nPersonas."','".$horario."','".$folio."')";
            mysqli_query($connection,$sql);
            if ($usuario=1) {
              header("location:admincrud.php");
            }
        } else {
          header("location:admincrud.php");
          echo '<script>alert("Hay campos vacios!"';
        }
    ?>