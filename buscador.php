<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Buscador</h3>
        <form action="index-alex.php" method="post">
            Buscar: <input name="clave">
            <input type="submit" name="buscador" value="Buscar">
            <br />
        </form>
        <?php
            if ($_POST['buscador'])
            { 
                $patron = $_POST['palabra'];
                #Si está vacío, lo informamos, sino r'ealizamos la búsqueda
                if(empty($patron))
                {
                echo "No se ha ingresado una cadena a buscar";
            }else{
                buscarNombre($patron);
            }
        ?>
    </body>
</html>