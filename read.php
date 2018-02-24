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
    /*$consulta = "select carrera"
            . ",nivel"
            . ",codigoAsignatura"
            . ",nombreAsignatura"
            . ",if(asigAprobadas=1,'Aprobada','No aprobada') as Aprobacion"
            . " from planAntiguo"
            . " where rut=$id"
            . " order by carrera asc, nivel asc, codigoAsignatura asc";
    $cons = "select distinct pa1.nivel,"
            . "(select count(*) from dbsac.planAntiguo as pa2 where pa2.nivel = pa1.nivel and pa2.rut = pa1.rut) as cant"
            . "from dbsac.planantiguo as pa1"
            . "where pa1.rut = $id";
    $con2 = "select max(pa3.cant) as maxAsigs"
            . "from ("
            . "     select distinct pa1.nivel, ("
            . "         select count(*) "
            . "         from dbsac.planAntiguo as pa2 "
            . "         where pa2.nivel = pa1.nivel "
            . "         and pa2.rut = pa1.rut"
            . "     ) as cant"
            . "     from dbsac.planantiguo as pa1"
            . "     where pa1.rut = $id "
            . ") as pa3";
    $res = $coneccion->query($cons);
    $tmp = $res->fetch_array(MYSQLI_BOTH);
    $niveles = count($tmp);
    
    $res = $coneccion->query($con2);
    $tmp = $res->fetch_array(MYSQLI_BOTH);
    $maxAsig = $tmp["maxAsigs"];*/
    $sem1Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=1 order by codigoAsignatura asc";
    $sem2Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=2 order by codigoAsignatura asc";
    $sem3Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=3 order by codigoAsignatura asc";
    $sem4Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=4 order by codigoAsignatura asc";
    $sem5Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=5 order by codigoAsignatura asc";
    $sem6Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=6 order by codigoAsignatura asc";
    $sem7Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=7 order by codigoAsignatura asc";
    $sem8Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=8 order by codigoAsignatura asc";
    $sem9Query = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=9 order by codigoAsignatura asc";
    $semAQuery = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=10 order by codigoAsignatura asc";
    $semBQuery = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=11 order by codigoAsignatura asc";
    $semCQuery = "select nivel,codigoAsignatura,asigAprobadas from dbsac.planAntiguo where rut = 17019107 and nivel=12 order by codigoAsignatura asc";
    
    $sem1Data = $coneccion->query($sem1Query);
    $sem2Data = $coneccion->query($sem2Query);
    $sem3Data = $coneccion->query($sem3Query);
    $sem4Data = $coneccion->query($sem4Query);
    $sem5Data = $coneccion->query($sem5Query);
    $sem6Data = $coneccion->query($sem6Query);
    $sem7Data = $coneccion->query($sem7Query);
    $sem8Data = $coneccion->query($sem8Query);
    $sem9Data = $coneccion->query($sem9Query);
    $semAData = $coneccion->query($semAQuery);
    $semBData = $coneccion->query($semBQuery);
    $semCData = $coneccion->query($semCQuery);
    
    /*$arrSem1 = array();
    $arrSem2 = array();
    $arrSem3 = array();
    $arrSem4 = array();
    $arrSem5 = array();
    $arrSem6 = array();
    $arrSem7 = array();
    $arrSem8 = array();
    $arrSem9 = array();
    $arrSemA = array();
    $arrSemB = array();
    $arrSemC = array();*/
    
    for($i = 0; $i < 12; $i++){
        for($j = 0; $j < 3; $j++){
            
        }
    }
}

function avancePlanAntiguo3($id){
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
            #echo $f['nombreAsignatura'] . "<BR />" . $f['codigoAsignatura'];
            if($f['asigAprobadas']==1){
                $salida .= "<tr><td bgcolor=\"#00FF00\">" . $f['codigoAsignatura'] . "</td></tr>";
            }else{
                $salida .= "<tr><td>" . $f['codigoAsignatura'] . "</td></tr>";
            }
        }
    $salida .= "</table>";
    return $salida;
}



