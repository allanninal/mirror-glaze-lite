<?php
/**
 * Title: Hero
 * Slug: mirror-glaze-lite/hero
 * Categories: mirror-glaze-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package mirror-glaze-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"mg-section mg-hero"} -->
<section class="wp-block-group alignfull mg-section mg-hero" id="hero">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'San Francisco · Est. 2018', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"mg-hero__title"} -->
<h1 class="wp-block-heading mg-hero__title"><?php echo wp_kses_post( __( 'L\'art de la<br><em>pâtisserie</em><br>française.', 'mirror-glaze-lite' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-hero__lede mg-muted"} -->
<p class="mg-hero__lede mg-muted"><?php echo esc_html__( 'Entremets, viennoiserie, macarons, and bespoke gâteaux — crafted daily by Maître Pâtissière Hélène Marchand using classical French technique and California\'s finest seasonal produce.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_collection__"><?php echo esc_html__( 'Discover the Collection', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_commissions__"><?php echo esc_html__( 'Commission a Gâteau', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"mg-facts"} -->
<div class="wp-block-group mg-facts">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-fact"} -->
<div class="wp-block-group mg-fact">
<!-- wp:paragraph {"className":"mg-fact__label"} -->
<p class="mg-fact__label"><?php echo esc_html__( 'Opened', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-fact__value"} -->
<p class="mg-fact__value"><?php echo esc_html__( '2018', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-fact"} -->
<div class="wp-block-group mg-fact">
<!-- wp:paragraph {"className":"mg-fact__label"} -->
<p class="mg-fact__label"><?php echo esc_html__( 'Baked', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-fact__value"} -->
<p class="mg-fact__value"><?php echo esc_html__( 'Twice daily, 8 &amp; 11 am', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-fact"} -->
<div class="wp-block-group mg-fact">
<!-- wp:paragraph {"className":"mg-fact__label"} -->
<p class="mg-fact__label"><?php echo esc_html__( 'Gâteaux', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-fact__value"} -->
<p class="mg-fact__value"><?php echo esc_html__( 'Made to order', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:image {"id":"__ID_hero__","sizeSlug":"large","linkDestination":"none","className":"is-hero mg-hero__photo"} -->
<figure class="wp-block-image size-large is-hero mg-hero__photo"><img src="__SRC_hero__" alt="<?php echo esc_attr__( 'Three small pink entremets topped with strawberries and berries', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_hero__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
