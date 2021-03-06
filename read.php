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
            . ",anyoIngreso"
            . ",codigoPlan"
            . ",carrera"
            . ",clase"
            . ",a1a6"
            . ",a7a12"
            . ",tiempoAnt"
            . ",tiempoR"
            . ",mencion"
            . ",condicion"
            . ",r1a6"
            . ",r7a10"
            . ",utilizoCuarta"
            . ",segSemCuarta"
            . ",doblePermanencia"
            . ",gratuidad"
            . ",claseTraslado"
            . ",comision"
            . " from indicadores"
            . " where rut=$id";
    //echo $consulta;
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $nombres = $fila->nombres;
    $apellidos = $fila->apellidos;
    $anyoIngreso = $fila->anyoIngreso;
    $plan = $fila->codigoPlan;
    $carrera = $fila->carrera;
    $clase = $fila->clase;
    $a1a6 = $fila->a1a6;
    $a7a12 = $fila->a7a12;
    $tiempoPlanActual = $fila->tiempoAnt;
    $tiempoPlanNuevo = $fila->tiempoR;
    $mencion = $fila->mencion;
    $condicion = $fila->condicion;
    $r1a6 = $fila->r1a6;
    $r7a10 = $fila->r7a10;
    $utilizoCuarta = $fila->utilizoCuarta;
    $segSemCuarta = $fila->segSemCuarta;
    $doblePermanencia = $fila->doblePermanencia;
    $gratuidad = $fila->gratuidad;
    $claseTraslado = $fila->claseTraslado;
    $comision = $fila->comision;
    
    return array(
        "nombres" => $nombres,
        "apellidos" => $apellidos,
        "carrera" => $carrera,
        "anyoIngreso" => $anyoIngreso,
        "plan" => $plan,
        "carrera" => $carrera,
        "clase" => $clase,
        "a1a6" => $a1a6,
        "a7a12" => $a7a12,
        "tiempoPlanActual" => $tiempoPlanActual, 
        "tiempoPlanNuevo" => $tiempoPlanNuevo,
        "mencion" => $mencion,
        "condicion" => $condicion,
        "r1a6" => $r1a6,
        "r7a10" => $r7a10,
        "utilizoCuarta" => $utilizoCuarta,
        "segSemCuarta" => $segSemCuarta,
        "doblePermanencia" => $doblePermanencia,
        "gratuidad" => $gratuidad,
        "claseTraslado" => $claseTraslado,
        "comision" => $comision
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
    $salida = "<table border='1'>";
    while($f = $res->fetch_array(MYSQLI_BOTH)){
        if($f['asigAprobadas']==1){
            $salida .= "<tr><td bgcolor=\"#7fb9db\" >" . $f['nombreAsignatura'] . "</td></tr>";
        }else{
            $salida .= "<tr><td>" . $f['nombreAsignatura'] . "</td></tr>";
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
    $salida = "<table border=1>";
    while($f = $res->fetch_array(MYSQLI_BOTH)){
        if($f['asigAprob']==1){
            $salida .= "<tr><td bgcolor=\"#F7C370\">" . utf8_encode($f['descAsigRed']) . "</td></tr>";
        }else{
            $salida .= "<tr><td>" . utf8_encode($f['descAsigRed']) . "</td></tr>";
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
        
function validacion($id){
    if(preg_match("/[0-9]/",$id)){
        require 'conection.php';
        $sql = "select count(*) as cant from indicadores where rut = $id";
        $res = $coneccion->query($sql);
        $valor = $res->fetch_assoc();
        if($valor['cant']>0){
            return 1;
        }else{
            return 0;
        }
    }else{
        return 0;
    }
}