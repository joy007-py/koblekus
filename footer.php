
	
	</main><!-- End #main -->
<footer id="footer">
	<div class="footer-top">
		<div class="container">
				<div class="row">
				
					<?php dynamic_sidebar( 'footer-sidebar-one' ) ?>

					<div class="col-lg-4 col-md-6 footer-links">

						<?php 

							echo apply_filters('koblekus_footer_nav_header', '<h4>Useful Links</h4>');					

							if( has_nav_menu( 'footer-menu' ) ) {
								wp_nav_menu(
									array(
										'theme_location'    => 'footer-menu',
										'echo'              => true,
										'walker' => new KobleKus_Footer_Nav_Walker(),
										'before' => '<i class="bx bx-chevron-right"></i>',
										'fallback_cb' => 'koble_kus_footer_menu_notice'
									)
								);
							}
						?>
					</div>

					<?php dynamic_sidebar( 'footer-sidebar-two' ) ?>
				
				</div>
			</div>
		</div>
	</div>

	<div class="container d-md-flex py-4">
	<div class="mr-md-auto text-center text-md-left">
		<div class="copyright">
			<?php echo get_theme_mod( 'koble_kus_footer_copyright', 'Copyright text goes here') ?>
		</div>
	</div>
	</div>
</footer>

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<?php wp_footer() ?>
</body>
</html>