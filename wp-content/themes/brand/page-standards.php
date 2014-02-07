<?php get_header(); ?>

<script>
	

</script>

<style>

section.single header {
	color: #EFF0F1;
	font-size: 3em;
	line-height: .8em;
	padding-left: 30px;
	}
section.single {
	
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
	left: 30px;
	display: block;
	}
section.single ol li:nth-of-type(1)::before { content: "1"; }
section.single ol li:nth-of-type(2)::before { content: "2"; }
section.single ol li:nth-of-type(3)::before { content: "3"; }
section.single ol li:nth-of-type(4)::before { content: "4"; }

main section:first-of-type {
	background: url('/wp-content/themes/brand/images/pages/standards/brand.png') right 0px no-repeat;
	}

main section:first-of-type .column.one article {
	padding-top: 135px;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row sidebar">

	<div class="column one">
	<article>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
	</article>
	</div>
	<div class="column two">
		<aside class="serif">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
		</aside>
	</div>

</section>

<section class="row single">

	<div class="column one">
		<header>brand consistency checklist</header>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-2-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
	</div>

</section>

</main>

<?php get_footer(); ?>