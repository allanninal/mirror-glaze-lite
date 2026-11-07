<?php
/**
 * Title: The season
 * Slug: mirror-glaze-lite/season
 * Categories: mirror-glaze-lite
 * Viewport Width: 1400
 *
 * @package mirror-glaze-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface-2","className":"mg-section"} -->
<section class="wp-block-group has-surface-2-background-color has-background alignfull mg-section" id="season">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Summer 2026', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'La Collection Estivale', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"mg-muted"} -->
<p class="has-text-align-center mg-muted"><?php echo esc_html__( 'Each season, our maître pâtissier curates a limited collection around the finest market arrivals. Summer 2026 centres on white peach, lavender, and verbena — delicate, floral, and ephemeral. Available through September.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"},"className":"mg-cards mg-pieces"} -->
<div class="wp-block-group mg-cards mg-pieces">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-piece"} -->
<div class="wp-block-group mg-piece">
<!-- wp:paragraph {"className":"mg-badge"} -->
<p class="mg-badge"><?php echo esc_html__( 'Available now', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mg-piece__name"} -->
<h3 class="wp-block-heading mg-piece__name"><?php echo esc_html__( 'Pêche Blanche &amp; Verveine', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'White peach mousse, verbena gelée, lemon sablé breton.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-piece"} -->
<div class="wp-block-group mg-piece">
<!-- wp:paragraph {"className":"mg-badge"} -->
<p class="mg-badge"><?php echo esc_html__( 'Available now', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mg-piece__name"} -->
<h3 class="wp-block-heading mg-piece__name"><?php echo esc_html__( 'Lavande &amp; Miel de Provence', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Lavender honey ganache, fleur de sel caramel, almond streusel.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-piece"} -->
<div class="wp-block-group mg-piece">
<!-- wp:paragraph {"className":"mg-badge mg-badge\u002d\u002dsoon"} -->
<p class="mg-badge mg-badge--soon"><?php echo esc_html__( 'Coming soon', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mg-piece__name"} -->
<h3 class="wp-block-heading mg-piece__name"><?php echo esc_html__( 'Figue &amp; Fromage Blanc', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Slow-roasted fig compote, fromage blanc mousse, walnut crumble. Coming August.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"mg-cta"} -->
<div class="wp-block-buttons mg-cta">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_contact__"><?php echo esc_html__( 'Ask About the Collection', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
