<?php require_once('../../../private/initialize.php'); ?>

<?php 
    $articulos_set = find_all_articulos();
?>

<?php $page_title = 'Articulos'; ?>
<!-- Importamos el header con sus respectivas funciones -->
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<br>
<h3>Listado de Articulos</h3>
<a class="btn btn-success mt-2 mb-4" href="<?php echo url_for('/staff/articulos/new.php')?>">Crear Art&iacute;culo</a>

<div id="content-articulos" class="content">
<table class="table table-bordered table-hover table-sm" style="width:88%;">
  <thead class="text-center">
    <tr>
      <th scope="col" class="text-left">#</th>
      <th scope="col">T&iacute;tulo</th>
      <th scope="col">Actualizaci&oacute;n</th>
      <th scope="col" class="text-right">Operaciones
        <i class="fa fa-cogs"></i>
      </th>
    </tr>
  </thead>
  <tbody>
    <?php while($articulo = mysqli_fetch_assoc($articulos_set)){ ?> 
        <tr>
            <td scope="row"><?php echo h($articulo['id']); ?></td>
            <td class="text-center"><?php echo h($articulo['titulo']); ?></td>
            <td class="text-center"><?php echo h($articulo['update_at']); ?></td>
            <td class="text-right">
            <a href="<?php echo url_for('/staff/articulos/show.php?id=' . h($articulo['id'])); ?>" role="button" class="btn btn-outline-primary">Ver</a>
            <a href="<?php echo url_for('/staff/articulos/edit.php?id=' . h($articulo['id'])); ?>" role="button" class="btn btn-outline-success">Editar</a>
            <a href="<?php echo url_for('/staff/articulos/delete.php?id=' . h($articulo['id'])); ?>" role="button" class="btn btn-outline-danger">Eliminar</button>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>

</div>

<br>

<!-- Importamos el footer con sus funciones cargadas -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>