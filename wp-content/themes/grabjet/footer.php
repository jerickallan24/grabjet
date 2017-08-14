<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package GrabJet
 */

	global $footer_copyright;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ptop60" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="icon">
						<i class="fa fa-usd" aria-hidden="true"></i>
					</div>
					<p class="icon-text">Lorem ipsim dolor sit amet,<br/>
					consectetur adilkscing elit.</p>
				</div>
				<div class="col-md-4">
					<div class="icon">
						<i class="fa fa-plane" aria-hidden="true"></i>
					</div>
					<p class="icon-text">Lorem ipsim dolor sit amet,<br/>
					consectetur adilkscing elit.</p>
				</div>
				<div class="col-md-4">
					<div class="icon">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<p class="icon-text">Lorem ipsim dolor sit amet,<br/>
					consectetur adilkscing elit.</p>
				</div>
			</div>
		</div>
		<hr class="mtop120">
		<div class="container footer-bottom">
			<div class="row">
				<div class="col-md-6">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-md-6">
					<p class="copyright"><?php echo $footer_copyright; ?></p>
				</div>
			</div>
		</div>
		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpmice' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wpmice' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wpmice' ), 'wpmice', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div> --><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

	<script>
	  jQuery( function() {
	    jQuery( "#datepicker" ).datepicker({ dateFormat: 'dd MM yy' });
	  } );
  	</script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript">
		$('#add-ons').change(function(){
			var new_price = parseInt($(this).val()) + parseInt(199);
			$('.btn-price').text('$'+new_price);
		});
	</script>
</body>
</html>
