<?php
/**
 * Block Pattern: Myriam Hero
 *
 * @package myriamgurba2024
 */

// Define the block pattern content.
$block_pattern_contents = '
<!-- wp:cover {"url":"/wp-content/uploads/2022/02/myriam-cover-04.jpg","id":3185,"dimRatio":30,"focalPoint":{"x":"0.44","y":"0.35"},"isDark":false,"className":"front-cover","noTopMargin":true} -->
<div class="wp-block-cover is-light front-cover mt-0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3185" alt="" src="/wp-content/uploads/2022/02/myriam-cover-04.jpg" style="object-position:44% 35%" data-object-fit="cover" data-object-position="44% 35%"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"20rem"} -->
<div style="height:20rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"5rem","className":"mobi-hide"} -->
<div style="height:5rem" aria-hidden="true" class="wp-block-spacer mobi-hide"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center" id="myriam-es-una-diosa-furiosa">"Myriam es una diosa furiosa"</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">-LUIS ALBERTO URREA</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"15rem","className":"mobi-hide"} -->
<div style="height:15rem" aria-hidden="true" class="wp-block-spacer mobi-hide"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->
';
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'myriamgurba2024/myriam-hero',
		array(
			'title'         => __( 'Myriam Hero', 'myriamgurba2024' ),
			'description'   => _x( 'Hero image for the Myriam Gurba site.', 'Block pattern description', 'myriamgurba2024' ),
			'content'       => $block_pattern_contents,
			'categories'    => array( 'myriam-gurba' ),
			'viewportWidth' => 1000,
			'image'         => get_stylesheet_directory_uri() . '/assets/images/myriam-hero-thumbnail.jpg',
		)
	);
}

error_log( 'Myriam Hero pattern loaded' );
