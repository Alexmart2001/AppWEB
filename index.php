<?php
include_once('conexion.php');

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

session_start();

?>


<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INICIO SESION</title>
    <style type="text/css">
    * {
        font-family: Georgia, 'Times New Roman', Times, serif;
    }

    #apDiv1 {
        position: absolute;
        left: 109px;
        top: 161px;
        width: 521px;
        height: 114px;
        z-index: 1;
        visibility: visible;
        background-color: #000099;
    }

    #apDiv2 {
        position: absolute;
        left: 70px;
        top: 21px;
        width: 589px;
        height: 61px;
        z-index: 2;
        font-size: 24px;
        color: #FFF;
    }

    body {
        background-color: #222426;
    }


    #apDiv3 {
        position: absolute;
        left: 364px;
        top: 146px;
        width: 699px;
        height: 342px;
        z-index: 3;
        background-color: #000033;
        border-radius: 30px;
    }

    #apDiv4 {
        position: absolute;
        left: 1px;
        top: -1px;
        width: 697px;
        height: 138px;
        z-index: 4;
        background-color: #000066;
        border-radius: 30px;
    }
    </style>
</head>

<body>

    <div id="apDiv3">
        <div id="apDiv4">
            <div id="apDiv2"><strong>
                    <h1 style align="center"> INICIO SESION</h1>
                </strong></div>
        </div>
        <div id="apDiv1">
            <form id="form1" name="form1" method="post" action="validar.php">
                <table width="524" border="1">
                    <tr>
                        <td width="69" height="51" style="color:#FFF">&nbsp;&nbsp; Usuario</td>
                        <td width="439"> <label for="cusu"></label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="cusu" type="text" id="cusu" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td height="50" style="color:#FFF ">Contraseña</td>
                        <td><label for="cclave"></label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="cclave" type="text" id="cclave"
                                size="50" />
                        </td>
                    </tr>
                </table>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    <input type="submit" name="login" id="button" value="Iniciar Sesion" />
                </p>
            </form>
        </div>

    </div>

</body>

</html>