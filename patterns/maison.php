<?php
/**
 * Title: The pastry chef
 * Slug: mirror-glaze-lite/maison
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"dark-bg","textColor":"ivory","className":"mg-section mg-dark"} -->
<section class="wp-block-group has-ivory-color has-text-color has-dark-bg-background-color has-background alignfull mg-section mg-dark" id="maison">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%">
<!-- wp:image {"id":"__ID_maison__","sizeSlug":"large","linkDestination":"none","className":"mg-maison__photo"} -->
<figure class="wp-block-image size-large mg-maison__photo"><img src="__SRC_maison__" alt="<?php echo esc_attr__( 'A pastry cook in gloves spreading cream over a row of tarts', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_maison__"/></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center","className":"mg-maison__name"} -->
<p class="has-text-align-center mg-maison__name"><?php echo esc_html__( 'Hélène Marchand', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"mg-maison__title"} -->
<p class="has-text-align-center mg-maison__title"><?php echo esc_html__( 'Maître Pâtissière &amp; Fondatrice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%">
<!-- wp:paragraph {"className":"is-style-eyebrow mg-eyebrow-light"} -->
<p class="is-style-eyebrow mg-eyebrow-light"><?php echo esc_html__( 'La Maison', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Maître Pâtissier', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-on-dark-muted"} -->
<p class="mg-on-dark-muted"><?php echo esc_html__( 'Hélène Marchand trained in Lyon and Paris before opening Maison Véron in San Francisco in 2018 — bringing the rigour of classical French technique to California\'s abundance of seasonal produce.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-on-dark-muted"} -->
<p class="mg-on-dark-muted"><?php echo esc_html__( 'Her philosophy is precise and uncompromising: every layer must serve a purpose; every flavour must earn its place. The result is pâtisserie that is simultaneously faithful to tradition and responsive to the season.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-label-light"} -->
<p class="mg-label-light"><?php echo esc_html__( 'How We Work', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"mg-ways"} -->
<ul class="wp-block-list mg-ways">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Butter from one dairy, laminated by hand every morning', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Fruit bought at the market, so the menu follows the season', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Nothing sold the day after it was made', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Gâteaux assembled to order, never frozen', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"10rem"},"className":"mg-stats"} -->
<div class="wp-block-group mg-stats">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-stat"} -->
<div class="wp-block-group mg-stat">
<!-- wp:paragraph {"className":"mg-stat__value"} -->
<p class="mg-stat__value"><?php echo esc_html__( '2018', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-stat__label"} -->
<p class="mg-stat__label"><?php echo esc_html__( 'Opened', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-stat"} -->
<div class="wp-block-group mg-stat">
<!-- wp:paragraph {"className":"mg-stat__value"} -->
<p class="mg-stat__value"><?php echo esc_html__( 'Lyon &amp; Paris', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-stat__label"} -->
<p class="mg-stat__label"><?php echo esc_html__( 'Training', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-stat"} -->
<div class="wp-block-group mg-stat">
<!-- wp:paragraph {"className":"mg-stat__value"} -->
<p class="mg-stat__value"><?php echo esc_html__( '≤ 40', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-stat__label"} -->
<p class="mg-stat__label"><?php echo esc_html__( 'Daily Entremets', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-stat"} -->
<div class="wp-block-group mg-stat">
<!-- wp:paragraph {"className":"mg-stat__value"} -->
<p class="mg-stat__value"><?php echo esc_html__( '12 kg', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-stat__label"} -->
<p class="mg-stat__label"><?php echo esc_html__( 'Butter (weekly)', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
