<!DOCTYPE html>
<!--
prueba3
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SAC</title>
    </head>
    <body>
        <?php
            $rut = $_GET['rut'];
            #$rut = 17019107;
            #$rut = 14684771;
            include('read.php');
            $datos = getIndicadores($rut);
            if($datos["comision"]=='NO'){
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
                        <td><?php echo $datos["nombres"]; ?></td>
                    </tr>
                    <tr>
                        <td>APELLIDOS</td>
                        <td><?php echo $datos["apellidos"];?></td>
                    </tr>
                    <tr>
                        <td>CARRERA</td>
                        <td><?php echo $datos["carrera"];?></td>
                    </tr>
                    <tr>
                        <td>PLAN</td>
                        <td><?php echo $datos["plan"];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>GRATUIDAD</td>
                        <td><?php echo $datos["gratuidad"];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tbody>
                    <tr>
                        <td>TIEMPO EN PLAN ACTUAL</td>
                        <td><?php echo $datos["tiempoPlanActual"];?> años</td>
                    </tr>
                    <tr>
                        <td>TIEMPO EN REDISEÑO</td>
                        <td><?php echo $datos["tiempoPlanNuevo"];?> años</td>
                    </tr>
                    <tr>
                        <td>ASIG 1 A 6 SEM PLAN ACTUAL</td>
                        <td><?php echo $datos["a1a6"];?></td>
                    </tr>
                    <tr>
                        <td>ASIG 7 A 12 SEM PLAN ACTUAL</td>
                        <td><?php echo $datos["a7a12"];?></td>
                    </tr>
                    <tr>
                        <td>CUARTA OPORTUNIDAD UTILIZADA</td>
                        <td><?php echo $datos["utilizoCuarta"];?></td>
                    </tr>
                    <tr>
                        <td>ASIG 4TA OPORT 2DO SEM 2017</td>
                        <td><?php echo $datos["segSemCuarta"];?></td>
                    </tr>
                </tbody>
            </table>
            <br />
            <table border="1">
                <tr>
                    <td>Año de ingreso</td>
                    <td><?php echo $datos["anyoIngreso"];?></td>
                </tr>
                <tr>
                    <td>Clase</td>
                    <td><?php echo $datos["clase"];?></td>
                </tr>
                <tr>
                    <td>Mención</td>
                    <td><?php echo $datos["mencion"];?></td>
                </tr>
                <tr>
                    <td>Condición</td>
                    <td><?php echo $datos["condicion"];?></td>
                </tr>
                <tr>
                    <td>Asig 1 a 6 plan nuevo</td>
                    <td><?php echo $datos["r1a6"];?></td>
                </tr>
                <tr>
                    <td>Asig 7 a 10 plan nuevo</td>
                    <td><?php echo $datos["r7a10"];?></td>
                </tr>
                <tr>
                    <td>Doble permanencia</td>
                    <td><?php echo $datos["doblePermanencia"];?></td>
                </tr>
                <tr>
                    <td>Clase traslado</td>
                    <td><?php echo $datos["claseTraslado"];?></td>
                </tr>
                <tr>
                    <td>Comisión</td>
                    <td><?php echo $datos["comision"];?></td>
                </tr>
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
                                if($datos["condicion"]==-1){
                                    echo "Mantener plan";
                                } elseif($datos["condicion"]==1) {
                                    echo "Traslado";
                                }else{
                                    echo "Libre elección";
                                }
                            ;?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br />
            <h3>Plan antiguo</h3>
            <?php 
                avancePlanAntiguo($rut);
            ?>
            <br />
            <h3>Plan resideño</h3>
            <?php
                avancePlannuevo($rut);
            ?>
        </div>
        <?php
            }
        ?>
    </body>
</html>
