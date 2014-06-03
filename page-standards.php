<?php get_header(); ?>

<script>
	

</script>

<style>

section.single header {
	color: #EFF0F1;
	font-size: 3em;
	line-height: .8em;
	padding-left: 1.25em;
	padding-top: 1em;
	}
section.single ol {
	background: #EFF0F1;
	padding: 20px 30px;
	}
section.single ol li {
	list-style: none;
	padding: .8em 0px;
	}
section.single ol li::before {
	color: #981e32;
	font-size: 2em;
	position: absolute;
	left: 20px;
	display: block;
	}
section.single ol li:nth-of-type(1)::before { content: "1"; }
section.single ol li:nth-of-type(2)::before { content: "2"; }
section.single ol li:nth-of-type(3)::before { content: "3"; }
section.single ol li:nth-of-type(4)::before { content: "4"; }

main section:first-of-type {
	background: url('/wp-content/themes/brand/images/pages/standards/brand.png') 60% 0px no-repeat;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row side-right gutter wide">

	<div class="column one" style="padding-top: 9.5em;">
	<article class="padless">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-1', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</article>
	</div>
	<div class="column two nav-top">
		<aside class="serif striped padless">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
		</aside>
	</div>

</section>

<section class="row single unbound recto">

		<header>brand consistency checklist</header>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-2-1', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>

</section>

</main>

<?php get_footer(); ?>