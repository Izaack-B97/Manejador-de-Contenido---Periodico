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
<h1><?php echo $articulo['titulo']; ?></h1>
<div class="row">
    <div class="col-offset-1 col-sm-10">
        <span class="text-muted">
            Redactado por Isaac Bustamante
            <br>
            <?php echo date("d/m/Y", strtotime($articulo['update_at'])); ?>
        </span>
    </div>
</div>
<div class="row">
    <div class="col-sm-11">
        <img class="mt-4" style="width:97%" height="500px" src="data:image/jpg;base64,<?php echo base64_encode($articulo['foto']) ?>" alt="">  
    </div>
</div>
<div class="row">
    <div class="col-sm-11">
        <p class="lead mt-5">
            <?php echo $articulo['noticia']; ?>
        </p>
    </div>
</div>

<!-- Importamos el footer con sus funciones cargadas -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
