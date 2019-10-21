<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

		<?php if ( is_active_sidebar( 'footer-widget' ) ) { ?>
		<?php dynamic_sidebar( 'footer-widget' ); ?>
		<?php }; ?>

<?php wp_footer() ?>
<script>new WOW().init();</script>
</body>
</html>
