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
        <?php
        // put your code here
        $rut = 17019107;
        include('read.php');
        $datos = getIndicadores($rut);
        ?>
        <div>
            <table border="1">
                <tbody>
                    <tr>
                        <td>RUT</td>
                        <td><?php echo $rut; ?></td>
                    </tr>
                    <tr>
                        <td>NOMBRES</td>
                        <td><?php echo $datos[0]; ?></td>
                    </tr>
                    <tr>
                        <td>APELLIDOS</td>
                        <td><?php echo $datos[1];?></td>
                    </tr>
                    <tr>
                        <td>CARRERA</td>
                        <td><?php echo $datos[2];?></td>
                    </tr>
                    <tr>
                        <td>PLAN</td>
                        <td><?php echo $datos[3];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>GRATUIDAD</td>
                        <td><?php echo $datos[4];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>TIEMPO EN PLAN ACTUAL</td>
                        <td><?php echo $datos[5];?> años</td>
                    </tr>
                    <tr>
                        <td>TIEMPO EN REDISEÑO</td>
                        <td><?php echo cantSemPlanNuevo($rut)/5;?></td>
                    </tr>
                    <tr>
                        <td>ASIG 1 A 6 SEM PLAN ACTUAL</td>
                        <td><?php echo $datos[6];?></td>
                    </tr>
                    <tr>
                        <td>ASIG 7 A 12 SEM PLAN ACTUAL</td>
                        <td><?php echo $datos[7];?></td>
                    </tr>
                    <tr>
                        <td>CUARTA OPORTUNIDAD UTILIZADA</td>
                        <td><?php echo $datos[8];?></td>
                    </tr>
                    <tr>
                        <td>ASIG 4TA OPORT 2DO SEM 2017</td>
                        <td><?php echo $datos[9];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>TOTAL ASIGNATURAS APROBADAS</td>
                        <td>
                            <?php
                                $cantAsig = cantAsigAprobadas($rut);
                                echo $cantAsig;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>TOTAL ASIGNATURAS PLAN</td>
                        <td>
                            <?php
                                $cantPlan = cantAsigPlan($rut);
                                echo $cantPlan;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>% AVANCE</td>
                        <td>
                            <?php 
                                if($cantPlan==0){
                                    echo 0;
                                }else{
                                    echo $cantAsig/$cantPlan*100;
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>RECOMENDACION</td>
                        <td>
                            <?php
                                if($datos[10]==-1){
                                    echo "Mantener plan";
                                } elseif($datos[10]==1) {
                                    echo "Traslado";
                                }else{
                                    echo "Libre elección";
                                }
                            ;?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
