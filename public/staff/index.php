<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'EL IMPARCIAL'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu" class="container">

  <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-success bg-light">
      <h4 class="navbar-brand">Inicio</h3>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo  url_for('/staff/articulos/index.php'); ?>">Articulos</a></li>
        </ul>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CARRUSEL -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo url_for('/images/noticia-card1.png'); ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Primera etiqueta de la diapositiva</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo url_for('/images/noticia-card2.png'); ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Segunda etiqueta de la diapositiva</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo url_for('/images/noticia-card3.png'); ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Tercera etiqueta de la diapositiva</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- END CARRUSEL -->
    
    <br>

    <!-- Start Noticia Reciente -->
    <h2>Medidas contra el COVID-19 afectan de forma desproporcionada a mexicanas</h2>
    <p class="text-justify lead">Feministas pidieron al Gobierno incluir perspectiva de género en las políticas de quedarse en casa y de atención a grupos vulnerables.</p>
    <img src="<?php echo url_for('/images/noticia-new.png'); ?>" alt="Noticia reciente" style="width:100%;">
    <!-- End Noticia Reciente -->
    
    <br><br>

    <!-- START CARDS NOTICES -->
    <div class="px-1 text-center">
      <div class="card d-inline-block" style="width: 15rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card1.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Preguntas y respuestas sobre el coronavirus</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis voluptatibus delectus, vel exercitationem?  </p>
          <a href="#" class="btn btn-primary">Editar Articulo</a>
        </div>
      </div>

      <div class="card d-inline-block" style="width: 15rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card2.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Cómo evitar contagios de coronavirus durante trayectos viales necesarios</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis  </p>
          <a href="#" class="btn btn-primary">Editar Articulo</a>
        </div>
      </div>

      <div class="card d-inline-block" style="width: 15rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card3.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Higiene al llegar a casa es lo más efectivo contra el Covid-19</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis voluptatibus </p>
          <a href="#" class="btn btn-primary">Editar Articulo</a>
        </div>
      </div>
    </div>

  </div>
  <!-- END CARDS NOTICES -->

  <br>

  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active" id="d">
        <div class="d-flex w-100 justify-content-between">
            <h5>Lorem ipsum</h5>
            <small>3 days ago</small>
        </div>
        <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, molestias quaerat velit inventore eaque vel obcaecati consectetur mollitia, aliquid esse at reprehenderit alias voluptate officia ea labore veniam nemo ipsam.</p>
    </a>
  </div>

  <br>

  <P class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur repellat molestias soluta ipsum autem officiis reprehenderit vero placeat, vitae neque quaerat voluptate ad delectus fugiat! Eius eaque inventore a!</P>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
