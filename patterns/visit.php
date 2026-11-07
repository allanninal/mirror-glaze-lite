<?php
/**
 * Title: Hours and location
 * Slug: mirror-glaze-lite/visit
 * Categories: mirror-glaze-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
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
<section class="wp-block-group alignfull mg-section" id="visit">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Horaires', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Hours &amp; Location', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-hours"} -->
<div class="wp-block-group mg-hours">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Lundi / Monday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( 'Fermé / Closed', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Mardi / Tuesday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '8:00 – 18:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Mercredi / Wednesday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '8:00 – 18:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Jeudi / Thursday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '8:00 – 18:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Vendredi / Friday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '8:00 – 19:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Samedi / Saturday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '8:00 – 19:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"mg-hours__row"} -->
<div class="wp-block-group mg-hours__row">
<!-- wp:paragraph {"className":"mg-hours__day"} -->
<p class="mg-hours__day"><?php echo esc_html__( 'Dimanche / Sunday', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-hours__time"} -->
<p class="mg-hours__time"><?php echo esc_html__( '9:00 – 14:00', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-muted mg-hours__note","fontSize":"small"} -->
<p class="has-small-font-size mg-muted mg-hours__note"><?php echo esc_html__( 'Samedi / Saturday: Seasonal tasting window 10–12', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-muted mg-hours__note","fontSize":"small"} -->
<p class="has-small-font-size mg-muted mg-hours__note"><?php echo esc_html__( 'Dimanche / Sunday: Sunday brunch selections', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Adresse', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Maison Véron', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '24 Rue Saint-Honoré, San Francisco, CA 94108', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="tel:+14155550291">+1 (415) 555-0291</a><br><a href="mailto:bonjour@maisonveron.example">bonjour@maisonveron.example</a>', 'mirror-glaze-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-label"} -->
<p class="mg-label"><?php echo esc_html__( 'Getting Here', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"mg-muted"} -->
<ul class="wp-block-list mg-muted">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Five minutes on foot from the nearest train station', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Three bus lines stop at the corner', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Metered street parking, and a public garage one block away', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
