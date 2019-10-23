<?php get_header() ?>

<?php get_template_part('_includes/nav', 'principal') ?>


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

    <?php $arg = array(
     'post_type'     => 'post',
     'category_name'   => '',
     'posts_per_page' => -1,
     'offset'     => 0,
     'post__not_in'   => array($post->ID),
     'paged'       => $paged
     );

     $get_arg = new WP_Query( $arg );

     while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>

     <!-- Content -->
      <?php
        if(has_category('construccion')){
          echo '<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="0">';
          get_template_part('_includes/service', 'construccion');
          }

         else if (has_category('remodelacion')){
          echo '<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="0.5s">';
          get_template_part('_includes/service', 'remodelacion');
        }

         else if (has_category('mantencion')){
          echo '<div class="w-100 d-none d-sm-block d-lg-none">';
          echo '</div>';
          echo '<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="1s">';
          get_template_part('_includes/service', 'mantencion');
        }
        else {
          echo '<div id="cardService" class="card mb-4 wow animated flipInY" data-wow-duration="3s" data-wow-delay="1.5s">';
          get_template_part('_includes/service', 'estructura');
        }

       ?>
       <div class="card-body">

         <?php
            if(has_category('estructura-metalica')){
              echo '<h5 class="card-title mb-4">';
              the_title();
              echo '</h5>';
            }

            else {
              echo '<h5 class="card-title mb-5">';
              the_title();
              echo '</h5>';
            }
         ?>

         <p class="card-text service__text2"><?php the_excerpt(); ?></p>
         	<a href="<?php the_permalink(); ?>" class="btn service__btn">Conocer más</a>
       </div>
     </div>

     <?php } wp_reset_postdata(); ?>

    </div>


        <h4 class="service__card">Cómo trabajamos</h4>
        <div class="service__img2 text-center mb-5">
          <?php get_template_part('_includes/logo', 'proceso') ?>
        </div>

  </div>
</section>



<?php get_footer() ?>
