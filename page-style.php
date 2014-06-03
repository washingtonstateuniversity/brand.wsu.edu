<?php get_header(); ?>

<script>

</script>

<style>

main section:first-of-type .column.one {
	padding-top: 100px;
	}
main section:first-of-type {
	background: url('/wp-content/themes/brand/images/pages/editorial-style/clearconciseconsistent.png') 75% -5px no-repeat;
	background-size: 225px auto;
	}
button.detail {
	height: auto;
	padding: 0px;
	overflow: visible;
	}
button.detail header {
	text-align: left;
	padding: 2em 0px;
	}
button.detail header h2 {
	padding: 0;
	}
button.detail header h3 {
	display: inline-block;
	margin: 0px;
	}
main section:nth-of-type(even) {
	background-color: #f4f4f5;
	}
main section ~ section button.detail {
	background-position: 750px center;
	border-right: 2em transparent solid;
	padding-left: 4em;
	padding-right: 6em;
	}
.size-lt-large main section ~ section button.detail {
	padding-left: 3em;
	}
.size-lt-large main section ~ section button.detail {
	background-position: 90% center;
	border-right-width: 1em;
	}
.details li {
	list-style: none;
	margin: 0px;
	padding: 0px 0px 1em 0px;
	}
#spelling strong {
	xcolor: #ADA400;
	}
.details ul li ul li  {
	padding-left: 1.5em;
	padding-bottom: 0px;
	padding-top: .2em;
	}
samp ul {
	padding-bottom: 0;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row side-right marginalize gutter wide">
	
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="padless">
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="quick-tips" class="row halves gutter wide">
	<button class="detail unbound recto" alt="disclose quick-tips">
	<header>
			<h2>Quick Tips: <small>answers to common questions</small></h2>
		</header>
	</button>
	<div class="details">
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
	</div><!--/.details-->

</section>

<section id="capitalization" class="row halves gutter wide">
	<button class="detail" alt="disclose capitalization">
		<header>
			<h2>Capitalization: <small>not always a capital idea</small></h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-2', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</article>
	</div><!--/.details-->
	
</section>


<section id="punctuation" class="row halves gutter wide">

	<button class="detail" alt="disclose punctuation">
		<header>
			<h2>Punctuation: <small>deliver the intended meaning</small></h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-4-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-4-2', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</article>
	</div><!--/.details-->

</section>

<section id="spelling" class="row single">

	<button class="detail">
		<header>
			<h2>Spelling: <small>it's good grooming</small></h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one row halves gutter wide">
		
		<p class="guttered wide">Consult <a href="http://www.merriam-webster.com/"><em>Merriam-Webster's Collegiate Dictionary</em></a> for spelling and word breaks. American spellings are preferred over British.</p>
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-5-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-5-2', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		
		</div>
	</article>
	</div><!--/.details-->

</section>

<section id="numbers" class="row halves gutter wide">
	<button class="detail" alt="disclose numbers">
		<header>
			<h2>Numbers: <small>a simple equation for readability</small></h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-6-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-6-2', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</article>
	</div><!--/.details-->

</section>

</main>

<?php get_footer(); ?>