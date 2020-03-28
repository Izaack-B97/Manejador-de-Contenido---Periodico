<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Articulos'; ?>
<!-- Importamos el header con sus respectivas funciones -->
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<h2>Crear Articulos</h2>

<div class="ml-5 mt-4" id="area-crear-articulo" style="width: 80%;">
    <form action="<?php echo url_for('/staff/articulos/create.php'); ?>" method="POST">
        <div class="form-group row">
            <label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-5">
                <input name="titulo" type="text" class="form-control" id="inputTitulo" placeholder="Titulo">
            </div>
        </div>
        <div class="form-group row">
            <label for="textA-Noticia" class="col-sm-2 col-form-label">Noticia</label>
            <div class="col-sm-10">
                <textarea name="noticia" id="textA-Noticia" cols="" rows="10" class="form-control" placeholder="Escriba su historia porfavor . . ."></textarea>
            </div>
        </div>
        <!-- <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Imagen del art&iacute;culo</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Elegir</label>
            </div>
        </div> -->
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar Art&iacute;culo</button>
            </div>
        </div>
    </form>    
</div>

<!-- Importamos el footer con sus funciones cargadas -->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>