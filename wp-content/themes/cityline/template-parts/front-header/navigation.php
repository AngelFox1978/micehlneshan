<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> cityline-front-header__k__Gp3qTlxXlu-outer cityline-local-57-outer" data-kubio="kubio/navigation" id="navigation">
	<?php cityline_theme()->get( 'front-top-bar' )->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav cityline-front-header__k__xLwdIMLPC_l-nav cityline-local-74-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0.5,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section cityline-front-header__k__xLwdIMLPC_l-nav-section cityline-local-74-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer cityline-front-header__k__DqcL_YF9LKJ-outer cityline-local-75-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container cityline-front-header__k__MqErEXZ17Jm-container cityline-local-76-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner cityline-front-header__k__MqErEXZ17Jm-inner cityline-local-76-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-front-header__k__SFXC9Ze09eu-container cityline-local-77-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-front-header__k__SFXC9Ze09eu-inner cityline-local-77-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align cityline-front-header__k__SFXC9Ze09eu-align cityline-local-77-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php
									cityline_theme()->get( 'logo' )->render(
										array(
											'wrapper_class'    => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row cityline-front-header__k__0xSC3AT64-container cityline-local--container',
											'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  cityline-front-header__k__0xSC3AT64-image cityline-local--image',
											'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   cityline-front-header__k__0xSC3AT64-alternateImage cityline-local--alternateImage',
											'logo_text_class'  => 'position-relative wp-block-kubio-logo__text  cityline-front-header__k__0xSC3AT64-text cityline-local--text',
										)
									);
									?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container cityline-front-header__k__DJ3dK9XoVZ-container cityline-local-79-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-front-header__k__DJ3dK9XoVZ-inner cityline-local-79-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align cityline-front-header__k__DJ3dK9XoVZ-align cityline-local-79-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container cityline-front-header__k__mRmagmI3LJv-container cityline-local-80-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container cityline-front-header__k__ZEkYpBrx7RA-container cityline-local-81-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner cityline-front-header__k__ZEkYpBrx7RA-inner cityline-local-81-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align cityline-front-header__k__ZEkYpBrx7RA-align cityline-local-81-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
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
