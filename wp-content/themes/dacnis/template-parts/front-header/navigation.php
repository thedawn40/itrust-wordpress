<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> dacnis-front-header__k__Gp3qTlxXlu-outer dacnis-local-89-outer h-navigation_overlap" data-kubio="kubio/navigation" data-kubio-component="overlap" data-kubio-settings="true" id="navigation">
	<?php dacnis_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section  position-relative wp-block-kubio-navigation-section__nav dacnis-front-header__k__xLwdIMLPC_l-nav dacnis-local-106-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:true}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section dacnis-front-header__k__xLwdIMLPC_l-nav-section dacnis-local-106-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer dacnis-front-header__k__DqcL_YF9LKJ-outer dacnis-local-107-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container dacnis-front-header__k__MqErEXZ17Jm-container dacnis-local-108-container gutters-row-lg-3 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner dacnis-front-header__k__MqErEXZ17Jm-inner dacnis-local-108-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dacnis-front-header__k__SFXC9Ze09eu-container dacnis-local-109-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dacnis-front-header__k__SFXC9Ze09eu-inner dacnis-local-109-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align dacnis-front-header__k__SFXC9Ze09eu-align dacnis-local-109-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php dacnis_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row dacnis-front-header__k__0xSC3AT64-container dacnis-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  dacnis-front-header__k__0xSC3AT64-image dacnis-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   dacnis-front-header__k__0xSC3AT64-alternateImage dacnis-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  dacnis-front-header__k__0xSC3AT64-text dacnis-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container dacnis-front-header__k__It5Otf89N8-container dacnis-local-111-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dacnis-front-header__k__It5Otf89N8-inner dacnis-local-111-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dacnis-front-header__k__It5Otf89N8-align dacnis-local-111-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container dacnis-front-header__k__cW-fQui6k--container dacnis-local-112-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dacnis-front-header__k__ZEkYpBrx7RA-container dacnis-local-113-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dacnis-front-header__k__ZEkYpBrx7RA-inner dacnis-local-113-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-2">
								<div class="position-relative wp-block-kubio-column__align dacnis-front-header__k__ZEkYpBrx7RA-align dacnis-local-113-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php dacnis_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
