<?php get_header(); ?>

<style>

section:not(.detailed) button.detail header::after {
	content: "details";
	display: inline-block;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row side-right alternate pad-ends gutter wide boundless">
	
	<div class="column one nav-top">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="intro padless">
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="anniversary" class="row halves pad-ends gutter boundless">

		<div class="column one" style="padding-bottom: 0px;">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<figure>
				<img src="/wp-content/themes/brand/images/125th/125th-marks.png" alt="125th Marks" width="100%" />
			</figure>
		</div>
		
		<button class="detail" alt="125th mark details" style="max-width: 792px;">
			<header></header>
		</button>
		
		<div class="details">
		
		<div class="column one clear-both">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-4-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<h3>Clear space</h3>
			<figure>
				<img src="/wp-content/themes/brand/images/125th/125th-clearspace.png" alt="125th Clearspace" width="100%" />
			</figure>
		</div>
		
		<div class="column one clear-both">
			<h3>Appropriate Variants</h3>
			<figure style="text-align: center; padding-top: 40px;" class="twelve-twelfths-max">
				<img src="/wp-content/themes/brand/images/125th/125th-alts.png" alt="125th Marks" width="100%" />
			</figure>
		</div>
		<div class="column two">
			<h3>Inappropriate Variants</h3>
			<figure>
				<img src="/wp-content/themes/brand/images/125th/125th-ixnay.png" alt="125th Marks Ixnay" width="100%" />
			</figure>
		</div>
		
		<div class="row single column pad-ends wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-5-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		
		<div class="row single column gutterless padded wide">
			<h3>Appropriate combinations</h3>
			<figure style="text-align: center; padding-top: 40px;" class="twelve-twelfths-max">
				<img src="/wp-content/themes/brand/images/125th/examples-appropriate.png" alt="examples-appropriate" width="100%" />
			</figure>
		</div>
		<div class="row single column gutterless padded wide">
			<h3>Inappropriate combinations</h3>
			<figure style="text-align: center; padding-top: 40px;" class="twelve-twelfths-max">
				<img src="/wp-content/themes/brand/images/125th/examples-inappropriate.png" alt="examples-appropriate" width="100%" />
			</figure>
		</div>
		
		</div><!-- /details -->
			
</section>

<section id="campaign" class="row halves pad-ends gutter boundless alternate">

		<figure style="text-align: center; padding-top: 40px;" class="twelve-twelfths-max"><img src="/wp-content/themes/brand/images/pages/campaigns/campaign.png"></figure>
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<p>The campaign brand standards are in effect until its projected conclusion in the fall 2015.</p>
			<dl class="downloads">
				<dt>campaign standards</dt>
				<dd><a href="/wp-content/themes/brand/downloads/campaign/WSU-Campaign-Guide.pdf">PDF</a></dd>
			</dl>
		</div>

</section>

</main>

<?php get_footer(); ?>