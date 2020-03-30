<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Eliminar Noticia'; ?>
<!-- Importamos el header con sus respectivas funciones -->
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php 
    if(!isset($_GET['id'])) redirect_to(url_for('/staff/articulos/index.html'));

    $id = $_GET['id'];
    $articulo = find_articulo_by_id($id);

    if(is_post_request()){
        $result = delete_articulo($id);
        if ($result) {
            redirect_to(url_for('/staff/articulos/index.php'));
        }
    }
?>

<a class="back-link" href="<?php echo url_for('/staff/articulos/index.php'); ?>">&laquo; Regresar a la lista</a>

<h2>Eliminar Articulo <?php echo $id; ?></h2>
<p class="lead">¿Estas realmente de querer eliminar esta noticia?</p>
<span><b><?php echo $articulo['titulo'] ?></b></span>
<form action="" method="POST" class="mt-2">
    <div class="form-group row">
        <div class="col-sm-3 text-right">
            <div id="operations">
                <button type="submit" class="btn btn-outline-danger">Confirmar</button>
            </div>
        </div>
    </div>
</form>

<!-- Importamos el footer con sus funciones cargadas -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>