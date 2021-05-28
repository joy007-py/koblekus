<?php 
// echo '<pre>';
// var_dump( $args['services'] ); die;

?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center" style="background: url('<?php echo get_hero_background_image() ?>') top center;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 text-center">
          <h1><?php echo get_theme_mod( 'koble_kus_header_hero_text', 'CONNECTING PEOPLE, PROCESS AND TECHNOLOGY' ) ?></h1>
        </div>
      </div>

      <div class="row icon-boxes">

        <?php if( $args['services']->have_posts() ) : ?>
            <?php while( $args['services']->have_posts()  ): $args['services']->the_post() ?>

              <div class="col-md-4 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                  <div class="icon"><i class="ri-palette-line"></i></div>
                  <h4 class="title"><a href=""><?php the_title() ?></a></h4>
                  <ul>
                    <li><i class="ri-check-double-line"></i><?php the_excerpt() ?></li>
                  </ul>
                </div>
              </div>

            <?php endwhile ?>

        <?php endif ?>
      </div>
    </div>
</section>
<!-- End Hero -->