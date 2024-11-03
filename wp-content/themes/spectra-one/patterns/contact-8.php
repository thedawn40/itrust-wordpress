<?php
/**
 * Title: Teams four columns square
 * Slug: spectra-one/contact-8
 * Categories: contact
 * Keywords: teams four columns square
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/avatar-square-1.jpg",
    $get_url . "assets/image/avatar-square-2.jpg",
    $get_url . "assets/image/avatar-square-3.jpg",
    $get_url . "assets/image/avatar-square-4.jpg",
];

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"2px","textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'Meet the team', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'The talent driving our success', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Meet our dedicated team of professionals who are passionate about providing top-notch service and delivering exceptional results.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"0"},"border":{"width":"1px"}},"borderColor":"outline"} -->
<div class="wp-block-column has-border-color has-outline-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1188,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[0] ); ?>" alt="" class="wp-image-1188"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Wade Warren', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Creative Director', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"borderColor":"outline","backgroundColor":"background"} -->
<div class="wp-block-column has-border-color has-outline-border-color has-background-background-color has-background" style="border-width:1px"><!-- wp:image {"align":"center","id":1189,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-1189"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Leslie Alexander', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Product Manager', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"borderColor":"outline"} -->
<div class="wp-block-column has-border-color has-outline-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1190,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[2] ); ?>" alt="" class="wp-image-1190"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Esther Howard', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Senior Product Designer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"blockGap":"0"}},"borderColor":"outline"} -->
<div class="wp-block-column has-border-color has-outline-border-color" style="border-width:1px"><!-- wp:image {"align":"center","id":1190,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-style-default"><img src="<?php echo esc_url( $images[3] ); ?>" alt="" class="wp-image-1190"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"heading","className":"wp-block-heading"} -->
<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color"><?php esc_html_e( 'Jacob Jones', 'spectra-one' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php esc_html_e( 'Senior Developer', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--primary)","size":"has-small-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->