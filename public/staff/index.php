<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'EL IMPARCIAL'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php 
  // Jalaremos todas las noticias en la base de datos
  $noticias = find_all_articulos();  
?>

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
          <img class="d-block w-100" src="<?php echo url_for('/images/carrusel-noticia-4.png'); ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Carlos Urzúa prevé que economía de México caerá más del 6% por COVID-19
              <a class="stretched-link" href="https://www.elimparcial.com/dinero/Carlos-Urzua-preve-que-economia-de-Mexico-caera-mas-del-6-por-COVID-19-20200330-0091.html"></a>
            </h5>
            <p>El exsecretario advirtió que la caída del PIB a raíz del coronavirus,  superará las grandes crisis de las últimas décadas.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo url_for('/images/carrusel-noticia-2.png'); ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Cifras de coronavirus van estabilizándose en Italia; Francia supera los 3 mil fallecidos
              <a class="stretched-link" href="https://www.elimparcial.com/mundo/OMS-calcula-un-millon-de-casos-de-COVID-19-a-mitad-de-semana-20200330-0067.html"></a>
            </h5>
            <p>De los enfermos, 14 mil 620 se han recuperado incluyendo la cifra récord de mil 590 en el día pasado.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php echo url_for('/images/carrusel-noticia-3.png'); ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>OMS calcula un millón de casos de COVID-19 a mitad de semana
              <a class="stretched-link" href="https://www.elimparcial.com/mundo/OMS-calcula-un-millon-de-casos-de-COVID-19-a-mitad-de-semana-20200330-0067.html"></a>
            </h5>
            <p>China, el país donde se originó la pandemia del coronavirus, asegura contar ya menos de 2 mil 500 casos “activos”</p>
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

    <h2>Noticias recientes</h2>
    <!-- START CARDS NOTICES -->
    <div class="pl-5 text-center row">

        <?php while($noticia = mysqli_fetch_assoc($noticias)){?>
          <div class="card mt-2 mx-2" style="width: 15rem;">
            <img class="card-img-top" src="data:image/jpg;base64,<?php echo base64_encode($noticia['foto']) ;?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $noticia['titulo']; ?></h5>
              <!-- <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis reiciendis voluptatibus delectus, vel exercitationem?  </p> -->
              <a href="<?php echo url_for('/staff/articulos/show.php?id=' . h($noticia['id'])); ?>" class="btn btn-primary">Leer Articulo</a>
            </div>
          </div>
        <?php } ?>

    </div>
  <!-- END CARDS NOTICES -->

  <br>

  <div class="list-group">
    <a href="https://www.elimparcial.com/estilos/Como-detectar-a-un-enfermo-de-coronavirus-en-casa-20200330-0046.html" class="list-group-item list-group-item-action flex-column align-items-start active" id="d">
        <div class="d-flex w-100 justify-content-between">
            <h5>Cómo detectar a un enfermo de coronavirus en casa</h5>
            <small>Por UNAM Global 30 de Marzo</small>
        </div>
        <p class="mb-1">En el caso de presentar síntomas leves como fiebre y dolor de garganta es importante llamar a la jurisdicción sanitaria.</p>
    </a>
  </div>

  <br>

  <!-- Start Noticia Reciente -->
  <h2>Medidas contra el COVID-19 afectan de forma desproporcionada a mexicanas</h2>
  <p class="text-justify lead">Feministas pidieron al Gobierno incluir perspectiva de género en las políticas de quedarse en casa y de atención a grupos vulnerables.</p>
  <img src="<?php echo url_for('/images/noticia-new.png'); ?>" alt="Noticia reciente" style="width:100%;">
  <!-- End Noticia Reciente -->
    
  <br><br>
  <P class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur repellat molestias soluta ipsum autem officiis reprehenderit vero placeat, vitae neque quaerat voluptate ad delectus fugiat! Eius eaque inventore a!</P>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
