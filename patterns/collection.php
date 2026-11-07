<?php
/**
 * Title: The collection
 * Slug: mirror-glaze-lite/collection
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
<section class="wp-block-group alignfull mg-section" id="collection">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'La Collection', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our Pâtisserie', 'mirror-glaze-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"mg-lede mg-muted"} -->
<p class="has-text-align-center mg-lede mg-muted"><?php echo esc_html__( 'Four disciplines. One unwavering standard. Every piece assembled fresh each morning.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"mg-cat__title"} -->
<h3 class="wp-block-heading mg-cat__title" id="collection-entremet"><?php echo esc_html__( 'Entremets', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted mg-cat__desc"} -->
<p class="mg-muted mg-cat__desc"><?php echo esc_html__( 'Multi-layered mousse cakes with mirror glazes and sculpted finishes. Each is assembled over two days and limited to eight portions.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"},"className":"mg-cards"} -->
<div class="wp-block-group mg-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Champagne Rose', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Champagne &amp; Rose', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$22 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Champagne mousse, rose-litchi gelée, almond dacquoise, and a blush mirror glaze dusted with edible silver. Our most requested creation.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Pistachio Praline', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Pistache &amp; Praline', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$21 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Sicilian pistachio mousse over feuilletine croustillant, hazelnut praline insert, and a pistachio velvet finish.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Dark Chocolate Caramel', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Chocolat &amp; Caramel', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$20 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( '72% dark chocolate mousse, salted caramel insert, chocolate biscuit joconde, mirror glaze. Intense and deeply satisfying.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Yuzu Elderflower', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Yuzu &amp; Fleur de Sureau', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$23 / slice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Yuzu curd mousse, elderflower panna cotta insert, genoise légère, and a pale gold glaze. Spring–summer only.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'Available April – September', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"mg-cat__title"} -->
<h3 class="wp-block-heading mg-cat__title" id="collection-viennoiserie"><?php echo esc_html__( 'Viennoiserie', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted mg-cat__desc"} -->
<p class="mg-muted mg-cat__desc"><?php echo esc_html__( 'Hand-laminated pastry using 84% cultured butter and a 72-hour cold-ferment process. Baked in two rounds — 8 AM and 11 AM.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"},"className":"mg-cards"} -->
<div class="wp-block-group mg-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Croissant Beurre', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$5.50', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'The foundation. 27 alternating layers of dough and cultured butter. Shatters on touch, melts on the palate.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Kouign-Amann', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Breton laminated dough folded with cane sugar and salted butter. Deeply caramelised crust, tender center. Twelve made daily.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'Limited to 12 per day', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Pain au Chocolat', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$5.75', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Two batons of 66% dark chocolate encased in laminated dough. Slightly bitter counterpoint to the butter.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Escargot Pistache', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$6.50', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Rolled croissant dough spiralled with pistachio frangipane and candied orange. A Maison Véron original.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Chausson aux Pommes', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Rough-puff pastry enclosing compote of Granny Smith apples, vanilla, and a touch of calvados. Weekend only.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'Saturday &amp; Sunday only', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:heading {"level":3,"className":"mg-cat__title"} -->
<h3 class="wp-block-heading mg-cat__title" id="collection-macarons"><?php echo esc_html__( 'Macarons', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted mg-cat__desc"} -->
<p class="mg-muted mg-cat__desc"><?php echo esc_html__( 'French meringue macarons aged overnight for the ideal chew. A rotating seasonal selection with four permanent signatures.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"},"className":"mg-cards"} -->
<div class="wp-block-group mg-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Rose Framboise', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Rose &amp; Framboise', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Rose-scented shell, raspberry and rose ganache, a crystallised rose petal. The house signature.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Vanille Bourbon', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Madagascan bourbon vanilla bean infused into a Swiss meringue buttercream. Pale ivory and flawlessly simple.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Chocolat Noir', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Chocolat Intense', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$4 each · $22 / 6', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( '70% dark chocolate ganache, a touch of fleur de sel. For those who prefer depth over sweetness.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Seasonal Flavour', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Saveur de Saison', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( '$4.50 each', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Changes with the market. Yuzu tart, fig &amp; honey, saffron mango, wild blackcurrant — ask at the counter.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
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
<!-- wp:heading {"level":3,"className":"mg-cat__title"} -->
<h3 class="wp-block-heading mg-cat__title" id="collection-gateaux"><?php echo esc_html__( 'Gâteaux', 'mirror-glaze-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-muted mg-cat__desc"} -->
<p class="mg-muted mg-cat__desc"><?php echo esc_html__( 'Whole cakes for celebrations and ceremonies. Each is assembled to order and requires 72 hours minimum notice.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"18rem"},"className":"mg-cards"} -->
<div class="wp-block-group mg-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Fraisier', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Fraisier de Saison', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( 'from $185', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Génoise légère, mousseline cream, fresh-market strawberries, mirror glaze. Spring–summer. Serves 8–10.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'April – August only', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Bûche de Noël', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( 'from $210', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Holiday log cake in rotating flavours. Champagne &amp; pear, chestnut &amp; praline, or dark chocolate. Serves 10.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Limited', 'mirror-glaze-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'November – January', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Bespoke Wedding Gâteau', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Pièce Montée', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( 'from $450', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Multi-tiered celebration cake designed in consultation with our maître pâtissier. Custom flavour profiles, décor, and scale. For weddings, galas, and milestone events.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"mg-tags mg-item__note"} -->
<p class="mg-tags mg-item__note"><?php echo esc_html__( 'Consultation required — min. 2 weeks notice', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"mg-card"} -->
<div class="wp-block-group mg-card">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"mg-item__head"} -->
<div class="wp-block-group mg-item__head">
<!-- wp:group {"layout":{"type":"default"},"className":"mg-item__names"} -->
<div class="wp-block-group mg-item__names">
<!-- wp:heading {"level":4,"className":"mg-item__name"} -->
<h4 class="wp-block-heading mg-item__name"><?php echo esc_html__( 'Tarte aux Fruits', 'mirror-glaze-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"mg-item__french"} -->
<p class="mg-item__french"><?php echo esc_html__( 'Tarte aux Fruits de Saison', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-price"} -->
<p class="mg-price"><?php echo esc_html__( 'from $62', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"mg-muted","fontSize":"small"} -->
<p class="has-small-font-size mg-muted"><?php echo esc_html__( 'Pâte sucrée shell, vanilla pastry cream, seasonal market fruit arranged in the classic Parisian style. Available in 20cm and 26cm.', 'mirror-glaze-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"is-style-chips mg-tags"} -->
<ul class="wp-block-list is-style-chips mg-tags">
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
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"mg-cta"} -->
<div class="wp-block-buttons mg-cta">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|collection__"><?php echo esc_html__( 'Order from the Collection', 'mirror-glaze-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo mirror_glaze_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
