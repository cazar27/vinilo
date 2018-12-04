<?php

    // Datos para realizar la conexion Nombre del servidor, Usuario, Contraseña y Base de datos

    // funcion para ejecutar una consulta, pasamos la consulta sql y devulve el msqli_query

    // funcion para ejecutar una consulta, pasamos la consulta sql y devulve el msqli_query

    function ejecutarSQL($consulta){
        // Realizamos la conexion al servidor cambimos la conexion a lectura UTF8 y seleccionamos la BD
        include('conexiondates.php');
    
		$conectName = mysqli_connect($servername,$username,$password);
	    mysqli_set_charset($conectName, "utf8");
	    mysqli_select_db($conectName,$dbname);

    	$result = null;
    	
	    $result = mysqli_query($conectName,$consulta);
    	
    	if (!$result) {

	    	echo 'No se pudo ejecutar la consulta: ' . mysql_error();
            echo $consulta;
	    	exit;
    	}

    	return $result;
    }

    // funcion que devuelve una tupla, por tabla y condicion

    function devolverTupla($tabla,$condicion){

    	$consulta = 'SELECT * FROM '.$tabla.' WHERE '.$condicion.';';

        $id = mysqli_fetch_array(ejecutarSQL($consulta));
        return $id;
    }

    // devuelve el maximo id 
    function maximo($tabla){
        
        $consulta = 'SELECT MAX(`key`) FROM '.$tabla.';';
        
        $id = mysqli_fetch_array(ejecutarSQL($consulta));
        return $id; 

    }

    //funcion que devulve el total de filas de una tabla

    function sumarTuplas($tabla){

    	$consulta = 'SELECT COUNT(*) FROM '.$tabla.';';

    	return $fila = mysqli_fetch_array(ejecutarSQL($consulta));

    }

    //funcion que devulve el total de filas de una tabla y su condicion

    function sumarTuplasCondicion($tabla,$condicion){

        $consulta = 'SELECT COUNT(*) FROM '.$tabla.' WHERE '.$condicion.';';

        return $fila = mysqli_fetch_array(ejecutarSQL($consulta));

    }

    //funcion que devuelve un conjunto tuplas, por tabla y condicion

    function devolverTuplas($tabla,$condicion){

    	$tuplas = array();
		$consulta = 'SELECT * FROM '.$tabla.' WHERE '.$condicion.';';
		$result = ejecutarSQL($consulta);

		while ($fila = mysqli_fetch_array($result)) {
    		array_push($tuplas, $fila);
		} 	
		return $tuplas;

    }

	// funcion que devulve un conjunto de tuplas con una condicion por orden

    function devolverTuplasPorFecha($tabla){

    	$tuplas = array();
		$consulta = 'SELECT * FROM '.$tabla.' ORDER BY date DESC;';
		$result = ejecutarSQL($consulta);

		while ($fila = mysqli_fetch_array($result)) {
    		array_push($tuplas, $fila);
		} 	
		return $tuplas;

    }

    //funcion que devuelve un conjunto tuplas, por tabla y condicion

    function devolverTuplasInversa($tabla){

    	$condicion = 'ORDER BY `key` DESC';
    	$tuplas = array();
		$consulta = 'SELECT * FROM '.$tabla.' '.$condicion.';';
		$result = ejecutarSQL($consulta);

		while ($fila = mysqli_fetch_array($result)) {
    		array_push($tuplas, $fila);
		} 	
		return $tuplas;

    }


    function devolverFecha($fecha){

        $meses = array('01' =>'enero','02' =>'febrero','03' =>'marzo','04' =>'abril','05' =>'mayo','06' =>'junio','07' =>'julio','08' =>
               'agosto','09' =>'septiembre','10' =>'octubre','11' =>'noviembre','12' =>'diciembre');

        $fechaArr['hora'] = substr($fecha, 11,-3);  // devuelve horas y minutos en este caso 00:18
        $fechaArr['anio'] = substr($fecha, 0,4);    //devuelve el año 2017
        $indice = substr($fecha, 5,2);  //devuelve el año 08
        $fechaArr['dia'] = substr($fecha, 8,2);     //devuelve el año 09
        $fechaArr['mes'] = $meses[$indice];

        return $fechaArr;

    }

?>