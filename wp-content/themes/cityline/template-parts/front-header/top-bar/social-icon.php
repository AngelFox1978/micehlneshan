<a href="<?php echo esc_url( \ColibriWP\Theme\View::getData( 'link_value' ) ); ?>" class="wp-block wp-block-kubio-social-icon  position-relative wp-block-kubio-social-icon__link cityline-front-header__k__NoGL02ARs7p-link cityline-local-109-link social-icon-link" data-kubio="kubio/social-icon">
	<span class="h-svg-icon wp-block-kubio-social-icon__icon cityline-front-header__k__NoGL02ARs7p-icon cityline-local-109-icon" name="font-awesome/vimeo-square">
		<?php
		$icon = \ColibriWP\Theme\View::getData( 'icon' );
		if ( isset( $icon['content'] ) ) {
			echo $icon['content'];}
		?>
	</span>
</a>
