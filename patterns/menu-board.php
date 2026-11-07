<?php
/**
 * Title: Price list
 * Slug: mirror-glaze-lite/menu-board
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"44rem"},"tagName":"section","align":"full","className":"is-style-menu-board mg-section"} -->
<section class="wp-block-group alignfull is-style-menu-board mg-section">
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Price List', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Entremets', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Champagne Rose', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$22 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Pistachio Praline', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$21 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Dark Chocolate Caramel', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$20 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Yuzu Elderflower', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$23 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Viennoiserie', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Croissant Beurre', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.50', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Kouign-Amann', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Pain au Chocolat', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$5.75', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Escargot Pistache', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$6.50', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Chausson aux Pommes', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Macarons', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Rose Framboise', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Vanille Bourbon', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Chocolat Noir', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Seasonal Flavour', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( '$4.50 each', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__group"} -->
<div class="wp-block-group menu-board__group">
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html__( 'Gâteaux', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Fraisier', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( 'from $185', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Bûche de Noël', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( 'from $210', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Bespoke Wedding Gâteau', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( 'from $450', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"menu-board__item"} -->
<div class="wp-block-group menu-board__item">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"className":"menu-board__row"} -->
<div class="wp-block-group menu-board__row">
<!-- wp:paragraph {"className":"menu-board__name"} -->
<p class="menu-board__name"><?php echo esc_html__( 'Tarte aux Fruits', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"menu-board__price"} -->
<p class="menu-board__price"><?php echo esc_html__( 'from $62', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:list {"className":"is-style-chips menu-board__chips"} -->
<ul class="wp-block-list is-style-chips menu-board__chips">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"mg-muted mg-note","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size mg-muted mg-note"><?php echo esc_html__( 'Our atelier handles wheat, dairy, eggs and nuts, so we cannot promise any piece is free of them. Please ask about allergens before you order.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
