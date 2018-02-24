<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function getIndicadores($id){
    include('conection.php');
    $consulta = "select nombres"
            . ",concat(apPaterno,' ',apMaterno) as apellidos"
            . ",carrera"
            . ",codigoPlan"
            . ",gratuidad"
            . ",(2018-anyoIngreso) as tiempoPlanActual"
            . ",a1a6"
            . ",a7a12"
            . ",utilizoCuarta"
            . ",segSemCuarta"
            . ",condicion"
            . " from indicadores"
            . " where rut=$id";
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $nombres = $fila->nombres;
    $apellidos = $fila->apellidos;
    $carrera = $fila->carrera;
    $plan = $fila->codigoPlan;
    $gratuidad = $fila->gratuidad;
    $tiempoPlanActual = $fila->tiempoPlanActual;
    $a1a6 = $fila->a1a6;
    $a7a12 = $fila->a7a12;
    $utilizoCuarta = $fila->utilizoCuarta;
    $segSemCuarta = $fila->segSemCuarta;
    $condicion = $fila->condicion;
    //              0           1       2       3       4           5               6       7       8           9               10
    //return array($nombres, $apellidos, $carrera,$plan,$gratuidad,$tiempoPlanActual,$a1a6,$a7a12,$utilizoCuarta,$segSemCuarta,$condicion);
    return array(
        "nombres" => $nombres,
        "apellidos" => $apellidos,
        "carrera" => $carrera,
        "plan" => $plan,
        "gratuidad" => $gratuidad,
        "tiempoPlanActual" => $tiempoPlanActual,
        "a1a6" => $a1a6,
        "a7a12" => $a7a12,
        "utilizoCuarta" => $utilizoCuarta,
        "segSemCuarta" => $segSemCuarta,
        "condicion" => $condicion
    );

}

function cantSemPlanNuevo($id){
    include('conection.php');
    $consulta = "select count(*) as cantidad"
            . " from plannuevo"
            . " where rut=$id"
            . " and asigAprob=0";
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $cant = $fila->cantidad;
    return $cant;
}

function cantAsigAprobadas($id){
    include('conection.php');
    $consulta = "select count(*) as cantidad"
            . " from planAntiguo"
            . " where rut=$id"
            . " and asigAprobadas=1";
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $cant = $fila->cantidad;
    return $cant;
}

function cantAsigPlan($id){
    include('conection.php');
    $consulta = "select count(*) as cantidad"
            . " from planAntiguo"
            . " where rut=$id"
            . " and codigoPlan=(select codigoPlan from indicadores where rut=$id)";
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $cant = $fila->cantidad;
    return $cant;
}

function avancePlanAntiguo($id){
    avancePlanAntiguo2($id);
}

function avancePlanAntiguo1($id){
    include('conection.php');
    $consulta = "select carrera"
            . ",nivel"
            . ",codigoAsignatura"
            . ",nombreAsignatura"
            . ",if(asigAprobadas=1,'Aprobada','No aprobada') as Aprobacion"
            . " from planAntiguo"
            . " where rut=$id"
            . " order by carrera asc, nivel asc, codigoAsignatura asc";
    $resultado = $coneccion->query($consulta);
    echo "<table border=1>";
    while($fila = $resultado->fetch_assoc()){
        $salida = "<tr>"
                . "<td>".$fila["carrera"]."</td>"
                . "<td>".$fila["nivel"]."</td>"
                . "<td>".$fila["codigoAsignatura"]."</td>"
                . "<td>".$fila["nombreAsignatura"]."</td>"
                . "<td>".$fila["Aprobacion"]."</td>"
                . "</tr>";
        echo $salida;
    }
    echo "</table>";
    //return $resultado;
}

function avancePlanAntiguo2($id){
    include('conection.php');
    echo "<table>";
    echo "<tr>";
        echo "<th>Semetre 1</th>";
        echo "<th>Semetre 2</th>";
        echo "<th>Semetre 3</th>";
        echo "<th>Semetre 4</th>";
        echo "<th>Semetre 5</th>";
        echo "<th>Semetre 6</th>";
        echo "<th>Semetre 7</th>";
        echo "<th>Semetre 8</th>";
        echo "<th>Semetre 9</th>";
        echo "<th>Semetre 10</th>";
        echo "<th>Semetre 11</th>";
        echo "<th>Semetre 12</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>";
        echo datosSemestre($id, 1);
        echo "</td>";
        
        
        echo "<td>" . datosSemestre($id, 2) . "</td>";
        echo "<td>" . datosSemestre($id, 3) . "</td>";
        echo "<td>" . datosSemestre($id, 4) . "</td>";
        echo "<td>" . datosSemestre($id, 5) . "</td>";
        echo "<td>" . datosSemestre($id, 6) . "</td>";
        echo "<td>" . datosSemestre($id, 7) . "</td>";
        echo "<td>" . datosSemestre($id, 8) . "</td>";
        echo "<td>" . datosSemestre($id, 9) . "</td>";
        echo "<td>" . datosSemestre($id, 10) . "</td>";
        echo "<td>" . datosSemestre($id, 11) . "</td>";
        echo "<td>" . datosSemestre($id, 12) . "</td>";
    echo "</tr>";
    echo "</table>";
}

function datosSemestre($id,$nivel){
    include('conection.php');
    $con = "select carrera,nivel,codigoAsignatura,nombreAsignatura,asigAprobadas "
            . "from dbsac.planAntiguo "
            . "where rut=$id and nivel=$nivel "
            . "order by carrera asc, nivel asc, codigoAsignatura asc";
    $res = $coneccion->query($con);
    $salida = "<table>";
    while($f = $res->fetch_array(MYSQLI_BOTH)){
        if($f['asigAprobadas']==1){
            $salida .= "<tr><td bgcolor=\"#00FF00\">" . $f['codigoAsignatura'] . "</td></tr>";
        }else{
            $salida .= "<tr><td>" . $f['codigoAsignatura'] . "</td></tr>";
        }
    }
    $salida .= "</table>";
    return $salida;
}

function avancePlanNuevo($id){
    echo "<table>";
    echo "<tr>";
        echo "<th>Semetre 1</th>";
        echo "<th>Semetre 2</th>";
        echo "<th>Semetre 3</th>";
        echo "<th>Semetre 4</th>";
        echo "<th>Semetre 5</th>";
        echo "<th>Semetre 6</th>";
        echo "<th>Semetre 7</th>";
        echo "<th>Semetre 8</th>";
        echo "<th>Semetre 9</th>";
        echo "<th>Semetre 10</th>";
        echo "<th>Semetre 11</th>";
        echo "<th>Semetre 12</th>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>" . datosSemestre2($id, 1) . "</td>";
        echo "<td>" . datosSemestre2($id, 2) . "</td>";
        echo "<td>" . datosSemestre2($id, 3) . "</td>";
        echo "<td>" . datosSemestre2($id, 4) . "</td>";
        echo "<td>" . datosSemestre2($id, 5) . "</td>";
        echo "<td>" . datosSemestre2($id, 6) . "</td>";
        echo "<td>" . datosSemestre2($id, 7) . "</td>";
        echo "<td>" . datosSemestre2($id, 8) . "</td>";
        echo "<td>" . datosSemestre2($id, 9) . "</td>";
        echo "<td>" . datosSemestre2($id, 10) . "</td>";
        echo "<td>" . datosSemestre2($id, 11) . "</td>";
        echo "<td>" . datosSemestre2($id, 12) . "</td>";
    echo "</tr>";
    echo "</table>";
}

function datosSemestre2($id,$nivel){
    include('conection.php');
    $con = "select (select distinct carrera from dbsac.planantiguo pa where codigoPlan = plan) as carrera,nivel,descAsigRed,asigAprob from dbsac.planNuevo where rut=$id and nivel=$nivel";
    $res = $coneccion->query($con);
    $salida = "<table>";
    while($f = $res->fetch_array(MYSQLI_BOTH)){
        if($f['asigAprob']==1){
            $salida .= "<tr><td bgcolor=\"#00FF00\">" . $f['descAsigRed'] . "</td></tr>";
        }else{
            $salida .= "<tr><td>" . $f['descAsigRed'] . "</td></tr>";
        }
    }
    $salida .= "</table>";
    return $salida;
}

function buscarNombre($patron){
    include('conection.php');
    $con = "select rut,concat(nombres,' ',apPaterno,' ',apMaterno) as nombre "
            . "from dbsac.indicadores "
            . "where nombres like '%$patron%' or apPaterno like '%$patron%' or apMaterno like '%$patron%'";
    $res = $coneccion->query($con);
    if($res->num_rows > 0){
        echo "<table>"
        . "<tr>"
            . "<th>Rut</th>"
            . "<th>Nombre</th>"
        . "</tr>";
        while($f = $res->fetch_array(MYSQLI_BOTH)){
            echo "<tr><td>" . $f['rut'] . "</td><td>" . $f['nombre'] . "</td></tr>";
        }
        echo "</table>";
        echo "Coincidencias: " . $res->num_row;
    }else{
        echo "No se encontraron resultados para: <b>$patron</b>"; 
    }
}







