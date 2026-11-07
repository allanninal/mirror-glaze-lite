<?php
/**
 * Title: Gallery
 * Slug: mirror-glaze-lite/gallery
 * Categories: mirror-glaze-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
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
<section class="wp-block-group has-surface-2-background-color has-background alignfull mg-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Galerie', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'L\'Atelier en Images', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"12rem"},"className":"mg-gallery"} -->
<div class="wp-block-group mg-gallery">
<!-- wp:image {"id":"__ID_entremet__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_entremet__" alt="<?php echo esc_attr__( 'A small entremet with a dark raspberry mirror glaze and a single raspberry on a gold board', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_entremet__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Raspberry Entremet', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_kouign-amann__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_kouign-amann__" alt="<?php echo esc_attr__( 'A kouign-amann with a deep caramelised crust held in an open hand', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_kouign-amann__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Kouign-Amann', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_macarons__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_macarons__" alt="<?php echo esc_attr__( 'Pastel macarons stacked on a dark surface', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_macarons__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Macarons', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_atelier__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_atelier__" alt="<?php echo esc_attr__( 'Hands kneading a soft dough on a floured board', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_atelier__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The Atelier', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_gateau__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_gateau__" alt="<?php echo esc_attr__( 'A three-tier white wedding gâteau with white roses and trailing greenery', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_gateau__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Wedding Gâteau', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_counter__","sizeSlug":"large","linkDestination":"none","className":"mg-tile"} -->
<figure class="wp-block-image size-large mg-tile"><img src="__SRC_counter__" alt="<?php echo esc_attr__( 'A glass pastry case filled with tarts, slices and small cakes', 'mirror-glaze-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_counter__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'The Counter', 'mirror-glaze-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
