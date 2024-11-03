<?php
/**
 * Title: Image with feature list and heading
 * Slug: spectra-one/feature
 * Categories: featured
 * Keywords: Image with feature list and heading
 */

 $get_url = trailingslashit(get_template_directory_uri());

 $images = [
    $get_url . "assets/image/placeholder-portrait.svg",
     $get_url . "assets/image/featured-1.svg",
     $get_url . "assets/image/featured-2.svg",
     $get_url . "assets/image/featured-3.svg",
 ];

 ?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-41" style="border-radius:8px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Full Site Editing', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"wp-block-heading"} -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Unleash the power of block editor', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Get online quickly with easy-to-use Full Site Editor builder', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"><!-- wp:image {"id":139,"width":24,"height":24,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large is-resized swt-duotone-primary"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-139" width="24" height="24"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"95%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="flex-basis:95%"><!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Easily Customizable', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Tailor your website to your liking with endless options to personalize the design and functionality.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"><!-- wp:image {"id":866,"width":24,"height":24,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large is-resized swt-duotone-primary"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-866" width="24" height="24"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"95%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="flex-basis:95%"><!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'Blazing Fast', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Experience lightning-fast page load speeds for optimal user experience and SEO ranking.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"><!-- wp:image {"id":867,"width":24,"height":24,"sizeSlug":"large","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}},"className":"swt-duotone-primary"} -->
<figure class="wp-block-image size-large is-resized swt-duotone-primary"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-867" width="24" height="24"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->
<!-- wp:column {"width":"95%","style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}}} -->
<div class="wp-block-column" style="flex-basis:95%"><!-- wp:heading {"level":6,"textColor":"heading","className":"wp-block-heading"} -->
<h6 class="wp-block-heading has-heading-color has-text-color"><?php esc_html_e( 'SEO Optimized', 'spectra-one' ); ?></h6>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Built with search engines in mind, achieve higher rankings and more traffic with optimized code.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->