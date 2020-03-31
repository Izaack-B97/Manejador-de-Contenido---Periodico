<?php

//** TODO EL ROLLO PARA ARTICULOS */

function delete_articulo($id){
	global $db;

	$sql = "DELETE FROM articulos ";
    $sql .= "WHERE id='" . $id . "' ";
	$sql .= "LIMIT 1";

	// echo $sql;

    $result = mysqli_query($db, $sql);
	return $result;
	// // For DELETE statements, $result is true/false
    // if ($result) {
    //     redirect_to(url_for('/staff/pages/index.php'));
    // } else {
    //     //DELETE failed
    //     echo mysqli_error($db);
    //     db_disconnect($db);
    //     exit;
    // }
}


function update_articulo($articulo){
	global $db;

	$sql = "UPDATE articulos SET ";
	$sql .= "titulo='" . $articulo['titulo'] . "', ";
	$sql .= "noticia='" . $articulo['noticia'] . "', ";
	$sql .= "foto='" . $articulo['foto'] . "', ";
	$sql .= "update_at=CURRENT_TIMESTAMP ";
	$sql .= "WHERE id='" . $articulo['id'] . "' ";
	$sql .= "LIMIT 1";

	$result = mysqli_query($db, $sql);
	// for UPDATE statements, $result is true/false
	if ($result) {
		return true;
	} else {
	  //UPDATE failed
	  echo mysqli_error($db);
	  db_disconnect($db);
	  exit;
	}
}

function find_articulo_by_id($id){
	global $db;
	$sql = "SELECT * FROM articulos ";
	$sql .= "WHERE id='" . $id . "' ";
	$result_set = mysqli_query($db, $sql);
	confirm_result_set($result_set);
	$articulo = mysqli_fetch_assoc($result_set);
	mysqli_free_result($result_set);
	return $articulo;
}

function find_all_articulos(){
	global $db;
	$sql = "SELECT * FROM articulos ";
	$sql .= "ORDER BY id ASC";
	$result = mysqli_query($db,$sql);
	confirm_result_set($result);
	return $result;
}

function insert_articulo($articulo){
	global $db;

	$sql = "INSERT INTO articulos(titulo, noticia, foto,update_at) ";
	$sql .= "VALUES (";
	$sql .= "'". $articulo['titulo'] ."', ";
	$sql .= "'". $articulo['noticia'] ."', ";
	$sql .= "'". $articulo['foto'] ."', ";
	$sql .= "CURRENT_TIMESTAMP";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	// For INSERT statements, $result is true/false
	if ($result) {
		return true;
	} else {
		// INSERT failed
		echo mysqli_error($db);
		db_discconect($db);
		exit();
	}
}	

?>