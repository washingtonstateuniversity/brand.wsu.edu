<?php get_header(); ?>

<script>

</script>

<style>
main {
	padding-bottom: 200px;
	}

main section figure {
	background-repeat: no-repeat;
	height: 400px;
	}
xmain section ~ section figure {
	margin-top: 20px;
	}

.photo .column.two {
	color: #a6adb0;
	font-size: 1.3em;
	line-height: 1.3em;
	min-height: 25px;
	}
.photo .column.two ul li {
	padding-bottom: .1em;
	}

.size-gt-small main section figure {
	background-position: center center;
	background-size: 100% auto;
	position: relative !important;
	}
.size-small main section figure {
	background-repeat: none;
	background-position: center center;
	background-size: auto 500px;
	}
figcaption {
	
	}
figcaption big {
	font-size: 100px !important;
	padding: 0px !important;
	margin: 0px !important;
	line-height: 1em;
	left: 30px;
	bottom: -42px;
	color: rgba(255,255,255,0.7);
	}

#library {
	background-color: #f4f4f5;
	}
	
.column.two.marginalize {
	padding: 2em 2em 6em 0em !important;
	}
.size-lt-medium .column.two.marginalize {
	padding: 2em !important;
	}

</style>

<main>

<section id="esteemed" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/esteemed-3.jpg');">
		<figcaption><big>esteemed</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">esteemed</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-1-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="current" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/current-1.jpg');">
		<figcaption><big>current</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">current</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-2-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="friendly" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/friendly-3.jpg');">
		<figcaption><big>friendly</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">friendly</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-3-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="impactful" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/impactful-3.jpg');">
		<figcaption><big>impactful</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">impactful</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-4-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="enthusiastic" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/enthusiastic-3.jpg');">
		<figcaption><big>enthusiastic</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">enthusiastic</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-5-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="handson" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/handson-3.jpg');">
		<figcaption><big>hands-on</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
	
	<div class="column two marginalize">
	
		<header class="hidden">hands-on</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-6-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>


<section id="creative" class="row halves photo">

	<article class="padless">

	<figure style="background-image: url('/wp-content/themes/brand/images/pages/photography/creative-3.jpg');">
		<figcaption><big>creative</big></figcaption>
	</figure>
	
	<div class="column one">&nbsp;</div>
		
	<div class="column two marginalize">
	
		<header class="hidden">hands-on</header>
		<?php  $column = get_post_meta( get_the_ID(), 'section-7-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

<section id="library" class="row side-right marginalize gutter wide equalize">

	<style>
		dl.downloads { height: 50px; }
	</style>

	<article class="padless">
	
	<div class="column one">
		
		<?php  $column = get_post_meta( get_the_ID(), 'section-8-1', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
		
	</div>
	
	<div class="column two center absolutely">
			
		<?php  $column = get_post_meta( get_the_ID(), 'section-8-2', true ); if( ! empty( $column ) ) { echo wp_kses_post( $column ); } ?>
	
	</div>
	
	</article>

</section>

</main>

<?php get_footer(); ?>