<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'EL IMPARCIAL'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu" class="container"></div>
  
    <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-success bg-light">
      <h4 class="navbar-brand">Inicio</h3>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Noticias</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">Articulos</a></li>
        </ul>
      </div>
    </nav>
    <!-- End navbar -->

    <hr>

    <p class="text-justify lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint voluptatum alias minima reiciendis. Repudiandae deserunt doloribus commodi repellendus rerum dolore ipsum in aspernatur aut sequi, quos, vel, eveniet voluptatum inventore?</p>

    <div class="pl-3 text-center">
      <div class="card d-inline-block" style="width: 17rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card1.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Preguntas y respuestas sobre el coronavirus</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis voluptatibus delectus qui alias, vel exercitationem?  </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card d-inline-block" style="width: 17rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card2.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Cómo evitar contagios de coronavirus durante trayectos viales necesarios</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis  </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card d-inline-block" style="width: 17rem;">
        <img class="card-img-top" src="<?php echo url_for('/images/noticia-card3.png'); ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Higiene al llegar a casa es lo más efectivo contra el Covid-19</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis voluptatibus delectus qui alias</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
