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
    return array($nombres, $apellidos, $carrera,$plan,$gratuidad,$tiempoPlanActual,$a1a6,$a7a12,$utilizoCuarta,$segSemCuarta,$condicion);

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



function avancePlanAnttiguo($id){
    include('conection.php');
    $consulta = "select carrera"
            . ",nivel"
            . ",codigoAsignatura"
            . ",nombreAsignatura"
            . ",if(asigAprobadas=1,'Aprobada','No aprobada') as Aprobacion"
            . " from planAntiguo"
            . " where rut=$id";
    $resultado = $coneccion->query($consulta);
    $fila = $resultado->fetch_object();
    $salida = "<table>";
    while($fila){
        $salida = $salida . "<tr><td></td></tr>";
    }
    $salida = $salida . "</table>";
    return $resultado;
}        