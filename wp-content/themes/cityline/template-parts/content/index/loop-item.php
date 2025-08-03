<div class="<?php cityline_print_archive_entry_class( 'wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container cityline-index__k__fx1L_l5Ny--container cityline-local-339-container d-flex   ' ); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner cityline-index__k__fx1L_l5Ny--inner cityline-local-339-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-3 h-px-2 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align cityline-index__k__fx1L_l5Ny--align cityline-local-339-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container cityline-index__k__6duco09NdG-container cityline-local-340-container h-aspect-ratio--4-3 <?php cityline_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
				<?php if ( has_post_thumbnail() ) : ?>
				<img class='position-relative wp-block-kubio-post-featured-image__image cityline-index__k__6duco09NdG-image cityline-local--image' src='<?php echo esc_url( get_the_post_thumbnail_url() ); ?>' />
				<?php endif; ?>
				<div class="position-relative wp-block-kubio-post-featured-image__inner cityline-index__k__6duco09NdG-inner cityline-local-340-inner">
					<div class="position-relative wp-block-kubio-post-featured-image__align cityline-index__k__6duco09NdG-align cityline-local-340-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
				</div>
			</figure>
			<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cityline-index__k__jXcguPYKwS-container cityline-local-341-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/row">
				<div class="position-relative wp-block-kubio-row__inner cityline-index__k__jXcguPYKwS-inner cityline-local-341-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-index__k__NqZ7jVBOOL-container cityline-local-342-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner cityline-index__k__NqZ7jVBOOL-inner cityline-local-342-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
							<div class="position-relative wp-block-kubio-column__align cityline-index__k__NqZ7jVBOOL-align cityline-local-342-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
								<a class="position-relative wp-block-kubio-post-title__link cityline-index__k__yndIzn0LAb-link cityline-local-343-link d-block" href="<?php echo esc_url( get_the_permalink() ); ?>">
									<h4 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container cityline-index__k__yndIzn0LAb-container cityline-local-343-container" data-kubio="kubio/post-title">
										<?php the_title(); ?>
									</h4>
								</a>
								<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text cityline-index__k__fVTtKcA3Zp-text cityline-local-344-text" data-kubio="kubio/post-excerpt">
									<?php
									cityline_post_excerpt(
										array(
											'max_length' => 16,
										)
									);
									?>
								</p>
								<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer cityline-index__k__T2yqalWyM-metaDataContainer cityline-local-345-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
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
				</div>
			</div>
		</div>
	</div>
</div>
