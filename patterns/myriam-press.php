<?php
/**
 * Block Pattern: Myriam Press Quotes
 *
 * @package myriamgurba2024
 */


// Define the block pattern content.
$block_pattern_contents = <<<'HTML'
<!-- wp:cover {"overlayColor":"yellow","isUserOverlayColor":true,"isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-yellow-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:400"><strong><strong>A NATIONAL BOOK CRITICS CIRCLE FINALIST</strong></strong></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size" style="font-style:normal;font-weight:300"><strong><strong>A LAMBDA LITERARY AWARD winner</strong></strong></h2>
<!-- /wp:heading -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>“Myriam Gurba is the most fearless writer in America. And most generous and kind to those who have no champion, while setting fire to the towers of the villainous. Long may she reign."</p>
<!-- /wp:paragraph --><cite>Luis Alberto Urrea, Pulitzer Prize finalist and author of Good Night, Irene</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Boom! Myriam Gurba's writing is a nuclear explosion."</p>
<!-- /wp:paragraph --><cite>—Silvia Moreno-Garcia, bestselling author of Mexican Gothic</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>“Absorbing. . . [Gurba's] essays can be so darkly funny and artfully constructed and she has a voice that defies how women—especially Latinx women—are expected to write/sound.”</p>
<!-- /wp:paragraph --><cite>Carolina A. Miranda, Los Angeles Times</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Quite simply one of the best books of the decade."</p>
<!-- /wp:paragraph --><cite>Los Angeles Review of Books</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Gurba is mighty. Brilliant, Mexican, wry; a curate of liberation, Gurba pays homage to the survivors and the victims. This book is ceremony: beautiful, difficult and important."</p>
<!-- /wp:paragraph --><cite>Imani Perry, National Book Award-winning author of South to America</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"The mother of intersectional Latinx identity.</p>
<!-- /wp:paragraph --><cite>Cosmopolitan</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"[Creep] is governed by an indomitable spirit... Gurba catches us off guard with her unusual twinning of compassion and lacerating observation... She is an indelible contemporary voice, and we are the better for it."</p>
<!-- /wp:paragraph --><cite>Alta Online</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Witty, confident, and effortlessly provocative."</p>
<!-- /wp:paragraph --><cite>The Philadelphia Inquirer</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Brilliant... [Gurba] skins the myth of California as a progressive playground. In its place, she offers a blistering portrait of life in the golden state... Despite the degradations and horrors Creep chronicles, it’s a hopeful book. A hope rooted in the steadfast belief other worlds are possible."</p>
<!-- /wp:paragraph --><cite>The New York Observer</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Sharp, conversational cultural criticism... Gurba goes for the jugular."</p>
<!-- /wp:paragraph --><cite>Bustle's "Best New Books for Fall"</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Haunting and otherworldly, like reading Goosebumps under a flashlight. . . With an imaginative combination of rigorous archival resources, magical realism, and wit, Gurba gives us no choice but to read on in spite of feeling spooked."</p>
<!-- /wp:paragraph --><cite>Interview</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Haunting and otherworldly, like reading Goosebumps under a flashlight. . . With an imaginative combination of rigorous archival resources, magical realism, and wit, Gurba gives us no choice but to read on in spite of feeling spooked."</p>
<!-- /wp:paragraph --><cite>Interview</cite></blockquote>
<!-- /wp:quote -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p>"Gurba writes the personal and political with invigorating conviction... To read Gurba at her best is to feel both the triumph of defiant self-regard as well as the soft contours of the striving it takes to acquire, preserve and restore"</p>
<!-- /wp:paragraph --><cite>New York Times</cite></blockquote>
<!-- /wp:quote --></div></div>
<!-- /wp:cover -->
HTML;
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'myriamgurba2024/myriam-press',
		array(
			'title'         => __( 'Myriam Press', 'myriamgurba2024' ),
			'description'   => _x( 'Press quotes for the Myriam Gurba site.', 'Block pattern description', 'myriamgurba2024' ),
			'content'       => $block_pattern_contents,
			'categories'    => array( 'myriam-gurba' ),
			'viewportWidth' => 1000,
			'image'         => get_stylesheet_directory_uri() . '/assets/images/myriam-press-thumbnail.jpg',
		)
	);
}
