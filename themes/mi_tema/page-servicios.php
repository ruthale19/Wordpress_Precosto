<?php get_header() ?>

<!-- header -->
<header class="header" id="home">
  <div class="header__container">
    <?php get_template_part('_includes/header', 'logo') ?>
    <h3 class="header__text1"><?php echo get_bloginfo('description') ?></h3>
  </div>
</header>

<!-- servicios -->
<section class="service" id="services">
  <div class="container service__container2">
    <h1 class="service__text1">Servicios</h1>
    <div class="card-deck">
      <div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="0">
        <?php get_template_part('_includes/service', 'construccion') ?>
        <div class="card-body">
          <h5 class="card-title mb-5">Construcción</h5>
          <p class="card-text service__text2">Elaboramos su Proyecto, desde el diseño hasta la entrega de la obra terminada.</p>
          <a href="single-construccion.html" class="btn service__btn">Conocer más</a>
        </div>
      </div>
      <div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="1s">
        <?php get_template_part('_includes/service', 'remodelacion') ?>
        <div class="card-body">
          <h5 class="card-title mb-5">Remodelación</h5>
          <p class="card-text service__text2">Realizamos mejoras a su inmueble, tanto en interiores como exteriores.</p>
          <a href="single-remodelacion.html" class="btn service__btn">Conocer más</a>
        </div>
      </div>
      <div class="w-100 d-none d-sm-block d-lg-none">
        <!-- wrap every 2 on sm-->
      </div>
      <div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="2s">
        <?php get_template_part('_includes/service', 'mantencion') ?>
        <div class="card-body">
          <h5 class="card-title mb-5">Mantención</h5>
          <p class="card-text service__text2">Cubrimos las necesidades de mantención periódica de sus instalaciones.</p>
          <a href="single-mantencion.html" class="btn service__btn">Conocer más</a>
        </div>
      </div>
      <div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="3s">
        <?php get_template_part('_includes/service', 'estructura') ?>
        <div class="card-body">
          <h5 class="card-title mb-4">Estructuras Metálicas</h5>
          <p class="card-text service__text2">Realizamos la fabricación y montaje de su estructura metálica.</p>
          <a href="single-estructura.html" class="btn service__btn">Conocer más</a>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer() ?>
