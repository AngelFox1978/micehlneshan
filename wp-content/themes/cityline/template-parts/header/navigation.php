<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> cityline-header__k__xppplz31IA-outer cityline-local-568-outer" data-kubio="kubio/navigation" id="navigation">
	<?php cityline_theme()->get( 'inner-top-bar' )->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav cityline-header__k__yaGGVjEZkNw-nav cityline-local-585-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0.5,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section cityline-header__k__yaGGVjEZkNw-nav-section cityline-local-585-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer cityline-header__k__B6be9EVASsj-outer cityline-local-586-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cityline-header__k__iq-jBDTVkP9-container cityline-local-587-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner cityline-header__k__iq-jBDTVkP9-inner cityline-local-587-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-header__k__w-4xOuQtkww-container cityline-local-588-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-header__k__w-4xOuQtkww-inner cityline-local-588-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align cityline-header__k__w-4xOuQtkww-align cityline-local-588-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php
									cityline_theme()->get( 'logo' )->render(
										array(
											'wrapper_class'    => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row cityline-header__k__ehXCxvEb1cY-container cityline-local--container',
											'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  cityline-header__k__ehXCxvEb1cY-image cityline-local--image',
											'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   cityline-header__k__ehXCxvEb1cY-alternateImage cityline-local--alternateImage',
											'logo_text_class'  => 'position-relative wp-block-kubio-logo__text  cityline-header__k__ehXCxvEb1cY-text cityline-local--text',
										)
									);
									?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container cityline-header__k__G1W0YXHLhmi-container cityline-local-590-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-header__k__G1W0YXHLhmi-inner cityline-local-590-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align cityline-header__k__G1W0YXHLhmi-align cityline-local-590-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container cityline-header__k__pqgRlH__ba3-container cityline-local-591-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-header__k__o-Vns0tqLaR-container cityline-local-592-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-header__k__o-Vns0tqLaR-inner cityline-local-592-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align cityline-header__k__o-Vns0tqLaR-align cityline-local-592-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php cityline_theme()->get( 'header-menu' )->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
