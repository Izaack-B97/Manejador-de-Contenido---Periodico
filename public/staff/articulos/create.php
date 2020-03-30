<?php 
require_once('../../../private/initialize.php');

if (is_post_request()) {
    
    // Handle from values sent by new.php
    $articulo = [];
    $articulo['titulo'] = $_POST['titulo'] ?? '';
    $articulo['noticia'] = $_POST['noticia'] ?? '';                 //Nombre temporal del archivo    
    $articulo['foto'] = addslashes(file_get_contents($_FILES['foto']['tmp_name'])); // Nos extrae el archivo en bits

    $result = insert_articulo($articulo);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/staff/articulos/index.php'));
} else {
    redirect_to(url_for('/staff/articulos/new.php'));
}

?>