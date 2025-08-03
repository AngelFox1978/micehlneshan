<div class="<?php cityline_print_archive_entry_class( 'wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container cityline-search__k__fx1L_l5Ny--container cityline-local-550-container d-flex   ' ); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner cityline-search__k__fx1L_l5Ny--inner cityline-local-550-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-3 v-inner-md-3 h-px-2 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align cityline-search__k__fx1L_l5Ny--align cityline-local-550-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container cityline-search__k__6duco09NdG-container cityline-local-551-container h-aspect-ratio--4-3 <?php cityline_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if ( has_post_thumbnail() ) : ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image cityline-search__k__6duco09NdG-image cityline-local--image' src='<?php echo esc_url( get_the_post_thumbnail_url() ); ?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner cityline-search__k__6duco09NdG-inner cityline-local-551-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align cityline-search__k__6duco09NdG-align cityline-local-551-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<a class="position-relative wp-block-kubio-post-title__link cityline-search__k__yndIzn0LAb-link cityline-local-552-link d-block" href="<?php echo esc_url( get_the_permalink() ); ?>">
				<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container cityline-search__k__yndIzn0LAb-container cityline-local-552-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h4>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text cityline-search__k__fVTtKcA3Zp-text cityline-local-553-text" data-kubio="kubio/post-excerpt">
				<?php
				cityline_post_excerpt(
					array(
						'max_length' => 16,
					)
				);
				?>
			</p>
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer cityline-search__k__nng4XPLA_-metaDataContainer cityline-local-554-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
						<?php echo esc_html( get_the_author_meta( 'display_name', get_post_field( 'post_author' ) ) ); ?>
					</a>
				</span>
				<span class="metadata-separator">
					|
				</span>
				<span class="metadata-item">
					<a href="<?php echo esc_url( get_day_link( get_post_time( 'Y' ), get_post_time( 'm' ), get_post_time( 'j' ) ) ); ?>">
						<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
					</a>
				</span>
				<span class="metadata-separator">
					|
				</span>
				<span class="metadata-item">
					<a href="">
						<?php echo esc_html( get_the_time() ); ?>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
