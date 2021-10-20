<?php
include_once('conexion.php');

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

session_start();
if (isset($_SESSION['clave'])) {
	$clave_ses = $_SESSION['clave'];

	echo "";
} else {
	header("Location: ./");
	exit();
}

?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Consulta menu</title>
    <style type="text/css">
    #Layer1 {
        position: absolute;
        left: 15px;
        top: 13px;
        width: 1097px;
        height: 687px;
        z-index: 1;
    }

    body {
        background-color: #ffffff;
    }

    #Layer2 {
        position: absolute;
        left: 28px;
        top: 30px;
        width: 300px;
        height: 637px;
        z-index: 2;
        border: double;
        background-color: #0099CC;
    }

    #Layer3 {
        position: absolute;
        left: 340px;
        top: 28px;
        width: 762px;
        height: 117px;
        z-index: 3;
        border: double;
    }

    #Layer4 {
        position: absolute;
        left: 336px;
        top: 158px;
        width: 769px;
        height: 517px;
        z-index: 4;
        border: dotted;
        background-color: #CCCCCC;
    }

    #Layer5 {
        position: absolute;
        left: 385px;
        top: 183px;
        width: 152px;
        height: 149px;
        z-index: 5;
    }

    #cosa {
        margin: 0;
        padding: 40px 0;
        border-bottom: solid 1px black;
    }

    body {
        background-color: #c0c0c0;
    }

    #apDiv1 {
        position: absolute;
        left: 1px;
        top: 12px;
        width: 754px;
        height: 46px;
        z-index: 5;
        background-color: #0099CC;
    }
    </style>
</head>

<body>
    <!-- Consulta que permite seleccionar Los Nombres y Apellidos del Cliente -->
    <?php

	$clave = isset($_GET['cla']) ? $_GET['cla'] : '';

	$consulta = "SELECT $bd.datos.nombre AS nombre, $bd.actividades.nom_actividad AS actividad, $bd.actividades.id_actividad AS idAct, $bd.actividades.enlace AS enlace FROM $bd.datos,$bd.actividades,$bd.perfiles,$bd.gestActividad WHERE $bd.gestActividad.id_perfil = $bd.perfiles.id_perfil AND $bd.gestActividad.id_actividad = $bd.actividades.id_actividad AND $bd.perfiles.id_perfil = $bd.datos.id_perfil AND $bd.datos.clave = '$clave_ses'";
	$resultado = mysqli_query($con, $consulta) or die(mysqli_error($con));

	?>
    <!-- Consulta que permite seleccionar Los Datos de la venta -->


    <div id="Layer1"></div>
    <div id="Layer2">
        <table width="300" class="table table-bordered">
            <tr>
                <th width="199" class="text-center" style="font-size:36px; color:#FFF">
                    <p id="cosa">Menu</p>

                </th>
            </tr>
            <?php
			while ($fila = mysqli_fetch_array($resultado)) {
			?>
            <tr>
                <td height="30" class="text-center"
                    style="font-family: Georgia, 'Times New Roman', Times, serif;text-align: center;">
                    <?php echo '<a style=" color:white;" href="' . $fila['enlace'] . '?id=' . $fila['idAct'] . '" target="centro">' . $fila['actividad'] . '</a>'; ?>
                </td>
                <?php $nom = $fila['nombre']; ?>
            </tr>
            <?php
			}
			$nom_usu = $nom;

			mysqli_close($con);
			?>
        </table>
    </div>

    <div id="Layer3">
        <div id="apDiv1">
            <table width="754" height="102" border="1">


                <tr>
                    <td width="744"
                        style="text-align:center; font-family: Georgia, 'Times New Roman', Times, serif; font-size:18px; color:white;">
                        PANEL PRINCIPAL
                    </td>
                </tr>

                <tr>
                    <td>
                        <table width="748" border="1">
                            <tr>
                                <td width="604" style="font-family: Georgia, 'Times New Roman', Times, serif;">Usuario:
                                    <?php echo $nom_usu; ?></td>
                                <td width="109"
                                    style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px"><a
                                        style=" color:black;" href="cerrar.php">Cerrar sesion</a></td>
                            </tr>
                        </table>


                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="Layer4">
        <iframe height="520" width="751" name="centro"></iframe>

    </div>

</body>

</html>