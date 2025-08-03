<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer cityline-search__k__1MCYzfcZN-outer cityline-local-545-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner cityline-search__k__1MCYzfcZN-inner cityline-local-545-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cityline-search__k__baLWB4dRKjp-container cityline-local-546-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-3" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner cityline-search__k__baLWB4dRKjp-inner cityline-local-546-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-3">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-search__k__kxeqsSpdy-n-container cityline-local-547-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner cityline-search__k__kxeqsSpdy-n-inner cityline-local-547-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align cityline-search__k__kxeqsSpdy-n-align cityline-local-547-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container cityline-search__k__CtKC_EuIZL-container cityline-local-548-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container cityline-search__k__vrf0UGkWrN-container cityline-local-549-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner cityline-search__k__vrf0UGkWrN-inner cityline-local-549-inner h-row">
										<?php cityline_theme()->get( 'archive-loop' )->render(
											array(
												'view' => 'content/search/loop-item',
											)
										); ?>
									</div>
								</div>
								<?php if ( cityline_has_pagination() ) : ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container cityline-search__k__vD7AVCTELY-container cityline-local-555-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner cityline-search__k__vD7AVCTELY-inner cityline-local-555-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-search__k__tBYU0uM8Xx-container cityline-local-556-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner cityline-search__k__tBYU0uM8Xx-inner cityline-local-556-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align cityline-search__k__tBYU0uM8Xx-align cityline-local-556-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( cityline_has_pagination_button( true ) ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing cityline-search__k__ELgmeRXRD--spacing cityline-local-557-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer cityline-search__k__ELgmeRXRD--outer cityline-local-557-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link cityline-search__k__ELgmeRXRD--link cityline-local-557-link h-w-100 h-global-transition" href="<?php cityline_get_navigation_button_link( true ); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text cityline-search__k__ELgmeRXRD--text cityline-local-557-text kubio-inherit-typography">
																	<?php esc_html_e( 'Previous', 'cityline' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-search__k__P2OarhUKUK-container cityline-local-558-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner cityline-search__k__P2OarhUKUK-inner cityline-local-558-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align cityline-search__k__P2OarhUKUK-align cityline-local-558-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer cityline-search__k__tRiQFlrj8q-outer cityline-local-559-outer" data-kubio="kubio/pagination-numbers">
														<?php cityline_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-search__k__2nd5yuWmz9-container cityline-local-560-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner cityline-search__k__2nd5yuWmz9-inner cityline-local-560-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align cityline-search__k__2nd5yuWmz9-align cityline-local-560-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if ( cityline_has_pagination_button() ) : ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing cityline-search__k__ACSe8L2gsX-spacing cityline-local-561-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer cityline-search__k__ACSe8L2gsX-outer cityline-local-561-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link cityline-search__k__ACSe8L2gsX-link cityline-local-561-link h-w-100 h-global-transition" href="<?php cityline_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text cityline-search__k__ACSe8L2gsX-text cityline-local-561-text kubio-inherit-typography">
																	<?php esc_html_e( 'Next', 'cityline' ); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
