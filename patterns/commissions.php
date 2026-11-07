<?php
/**
 * Title: Bespoke commissions
 * Slug: mirror-glaze-lite/commissions
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"mg-section"} -->
<section class="wp-block-group alignfull mg-section" id="commissions">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Bespoke &amp; Catering Enquiries', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Commande Spéciale', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted"} -->
<p class="mg-muted"><?php echo esc_html__( 'For bespoke gâteaux, private catering and wholesale enquiries, send us your occasion, date and ideas. Our team responds within one business day. For urgent matters, call us directly.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_contact__"><?php echo esc_html__( 'Send an Enquiry', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+14155550291"><?php echo esc_html__( '+1 (415) 555-0291', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-step"} -->
<div class="wp-block-group mg-step">
<!-- wp:paragraph {"className":"mg-step__num"} -->
<p class="mg-step__num"><?php echo esc_html__( '01', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-step__text"} -->
<div class="wp-block-group mg-step__text">
<!-- wp:heading {"level":3,"className":"mg-step__title"} -->
<h3 class="wp-block-heading mg-step__title"><?php echo esc_html__( 'Send your enquiry', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Share your occasion, date, and vision. We respond within one business day.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-step"} -->
<div class="wp-block-group mg-step">
<!-- wp:paragraph {"className":"mg-step__num"} -->
<p class="mg-step__num"><?php echo esc_html__( '02', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-step__text"} -->
<div class="wp-block-group mg-step__text">
<!-- wp:heading {"level":3,"className":"mg-step__title"} -->
<h3 class="wp-block-heading mg-step__title"><?php echo esc_html__( 'Design consultation', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Hélène discusses flavour profiles, scale, and aesthetic direction in person or by video.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-step"} -->
<div class="wp-block-group mg-step">
<!-- wp:paragraph {"className":"mg-step__num"} -->
<p class="mg-step__num"><?php echo esc_html__( '03', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-step__text"} -->
<div class="wp-block-group mg-step__text">
<!-- wp:heading {"level":3,"className":"mg-step__title"} -->
<h3 class="wp-block-heading mg-step__title"><?php echo esc_html__( 'Tasting &amp; confirmation', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'A private tasting of your chosen flavours before we confirm the commission. Minimum 72 hours notice for gâteaux.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted mg-note","fontSize":"small"} -->
<p class="has-small-font-size mg-muted mg-note"><?php echo esc_html__( 'Occasions we make for: Wedding, Engagement, Private Dinner, Corporate Event, Birthday, Christening, Other.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
