<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Mostrar Articulo'; ?>
<!-- Importamos el header con sus respectivas funciones -->
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php 
    $id = $_GET['id'] ?? '1';
    $articulo = find_articulo_by_id($id);
?>

<h2>Articulo - <?php echo $articulo['id']; ?></h2>
<a class="back-link" href="<?php echo url_for('/staff/articulos/index.php'); ?>">&laquo; Regresar a la lista</a>
<div id="area-detalles" class="mt-4">
    <form method="GET">
        <div class="form-group row">
            <label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-5">
                <input name="titulo" type="text" class="form-control" id="inputTitulo" value="<?php echo $articulo['titulo']; ?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="textA-Noticia" class="col-sm-2 col-form-label">Noticia</label>
            <div class="col-sm-8">
                <textarea name="noticia" id="textA-Noticia" cols="" rows="10" class="form-control" placeholder="Escriba su historia porfavor . . ." disabled><?php echo $articulo['noticia']; ?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 text-center">
                <img height="500px" src="data:image/jpg;base64,<?php echo base64_encode($articulo['foto']) ?>" alt="">
            </div>
        </div>
    </form>    
</div>

<!-- Importamos el footer con sus funciones cargadas -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
