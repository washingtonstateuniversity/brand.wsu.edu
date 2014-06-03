<?php get_header(); ?>

<script>
	

</script>

<style>

#letterforms figure {
	padding: 15px 0px;
	}
#letterforms {
	padding-top: 35px;
	}

.size-gt-small #stones figure {
	xxpadding-left: 30px;
	padding-bottom: 30px;
	}
.stonesans {
	
	}
xmain section ~ section {
	background: #f4f4f5;
	}
#stones h2 {
	padding-bottom: 1em;
	}
#webfonts strong {
	color: #4F868E;
	}
#webfonts p {
	padding-bottom: 0;
	}
#webfonts h5 {
	margin-top: 1em;
	}
hr {
	margin: 0 4em;
	}
h2 + h5 {
	margin-top: 0px; 
	padding-top: 0px;
	}
.column h4:first-child,
.column figure h2:first-child {
	padding-top: 0px;
	margin-top: 0px;
	}
button.detail header::after {
	content: "details";
	display: inline-block;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="letterforms" class="row equalize marginalize-bottom">

	<div class="column one four-twelfths" style="text-align: right;">
		<figure>
			<img src="/wp-content/themes/brand/images/pages/type/Aa.png" width="210px">
		</figure>
	</div>
	<div class="column two eight-twelfths">
		<figure>
			<img src="/wp-content/themes/brand/images/pages/type/letters.png" style="margin: 47px 0px 0px 20px;">
		</figure>
	</div>

</section>

<section id="stones" class="row single gutter wide marginalize-top alternate">

	<div class="column one">
		<figure>
			<h2 class="not-lowercase">ITC Stone Serif</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-serif.png">
		</figure>
	</div>

</section>

<section id="stones" class="row halves gutter wide alternate">

	<div class="column one">
		<figure>
			<h2 class="not-lowercase">ITC Stone Sans II</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-sans-col1.png">
		</figure>
	</div>
	<div class="column two">
		<figure>
			<h2>&nbsp;</h2>
			<img src="/wp-content/themes/brand/images/pages/type/stone-sans-col2.png">
		</figure>
	</div>
	
	

</section>

<section class="row single alternate">	
	
	<div class="column one row halves marginalize gutter wide">
	
	<button class="detail">
		<header></header>
	</button>
	
	<div class="details">
	
		<hr class="short">
		
		<article class="padless">
		
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			
		</article>
		
	</div><!--/details-->	
	
	</div>

</section>


<section id="webfonts" class="row single gutter wide marginalize">

	<div class="column one">
		<h2>web</h2>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-3-1', true );
		if( ! empty( $column ) ) { echo $column; }
		?>
	</div>

</section>

</main>

<?php get_footer(); ?>