<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>KOBLE - Resource Augmentation Services</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
		<h1 class="logo mr-auto">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="font-family: 'Muli', sans-serif; text-transform:capitalize;">
				<?php if ( get_header_image() ) : ?>
					<div id="site-header">
						<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</div>
				<?php endif; ?>
			</a>  
		</h1>

		<?php
			if( has_nav_menu( 'header-menu' ) ) {
				wp_nav_menu(
					array(
						'theme_location'    => 'header-menu',
						'container'         => 'nav',
						'container_class'   => 'nav-menu d-none d-lg-block',
						'echo'              => true,
						'walker' => new KobleKus_Header_Nav_Walker()
					)
				);
			}
		?>
		
    </div>
  </header>
  <main id="main">