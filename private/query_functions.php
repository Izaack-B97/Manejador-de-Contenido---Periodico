<?php

//** TODO EL ROLLO PARA ARTICULOS */

function update_articulo($articulo){
	global $db;

	$sql = "UPDATE articulos SET ";
	$sql .= "titulo='" . $articulo['titulo'] . "', ";
	$sql .= "noticia='" . $articulo['noticia'] . "', ";
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

	$sql = "INSERT INTO articulos(titulo, noticia, update_at) ";
	$sql .= "VALUES (";
	$sql .= "'". $articulo['titulo'] ."', ";
	$sql .= "'". $articulo['noticia'] ."', ";
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

// ***Todo el rollo de los subjects

function find_all_subjects(){
	global $db;
	$sql = "SELECT * FROM subjects ";
	$sql .= "ORDER BY position ASC";
	// echo $sql;
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}

function find_subject_by_id($id){
	global $db;

	$sql = "SELECT * FROM subjects ";
	$sql .= "WHERE id='" . $id . "'"; // Query de consulta
	$result = mysqli_query($db, $sql); // Ejecutamos la consulta
	confirm_result_set($result); // Verificamos que se hizo correctamente la consulta
	$subject = mysqli_fetch_assoc($result); // Convertimos el resultset en array associativo
	mysqli_free_result($result); // Liberamos la memoria del resultset
	return $subject; // return an assoc. array
}

function insert_subject($subject){
	global $db;

	$sql = "INSERT INTO subjects ";
	$sql .= "(menu_name, position, visible) ";
	$sql .= "VALUES (";
	$sql .= "'" . $subject['menu_name'] . "',";
	$sql .= "'" . $subject['position'] . "',";
	$sql .= "'" . $subject['visible'] . "'";
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

function update_subject($subject){
	global $db;

	$sql = "UPDATE subjects SET ";
	$sql .= "menu_name='" . $subject['menu_name'] . "', ";
	$sql .= "position='" . $subject['position'] . "', ";
	$sql .= "visible='" . $subject['visible'] . "' ";
	$sql .= "WHERE id='" . $subject['id'] . "' ";
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

function delete_subject($id){
	global $db;

	$sql = "DELETE FROM subjects ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if ($result) {
        redirect_to(url_for('/staff/subjects/index.php'));
    } else {
        //DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

//*** Todo el rollo de pages 

function find_all_pages(){
	global $db;

	$sql = "SELECT * FROM pages ";
	$sql .= "ORDER BY subject_id ASC, position ASC";
	$result = mysqli_query($db,$sql);
	confirm_result_set($result);
	return $result;
}

function find_page_by_id($id){
	global $db;

	$sql = "SELECT * FROM pages ";
	$sql .= "WHERE id='" . $id . "'"; // Query de consulta
	$result = mysqli_query($db, $sql); // Ejecutamos la consulta
	confirm_result_set($result); // Verificamos que se hizo correctamente la consulta
	$page = mysqli_fetch_assoc($result); // Convertimos el resultset en array associativo
	mysqli_free_result($result); // Liberamos la memoria del resultset
	return $page; // return an assoc. array
}

function insert_page($page){
	global $db;

	$sql = "INSERT INTO pages ";
	$sql .= "(subject_id, menu_name, position, visible, content) ";
	$sql .= "VALUES (";
	$sql .= "'" . $page['subject_id'] . "',";
	$sql .= "'" . $page['menu_name'] . "',";
	$sql .= "'" . $page['position'] . "',";
	$sql .= "'" . $page['visible'] . "',";
	$sql .= "'" . $page['content'] . "'";
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

function update_page($page){
	global $db;

	$sql = "UPDATE pages SET ";
	$sql .= "subject_id='" . $page['subject_id'] . "', ";
	$sql .= "menu_name='" . $page['menu_name'] . "', ";
	$sql .= "position='" . $page['position'] . "', ";
	$sql .= "visible='" . $page['visible'] . "', ";
	$sql .= "content='" . $page['content'] . "' ";
	$sql .= "WHERE id='" . $page['id'] . "' ";
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

function delete_page($id){
	global $db;

	$sql = "DELETE FROM pages ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if ($result) {
        redirect_to(url_for('/staff/pages/index.php'));
    } else {
        //DELETE failed
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

?>