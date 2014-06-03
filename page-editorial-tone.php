<?php get_header(); ?>

<script>
	

</script>

<style>

main section:first-of-type .column.one {
	padding-top: 100px;
	}
section > article {
	padding: 0px;
	}
section > article > header {
	font-size: 1.5em;
	padding: 15px 30px 0px 30px;
	}
#our-voice {
	padding-bottom: 20px;
	}
button.detail {
	height: auto;
	overflow: visible;
	}
button.detail header {
	text-align: left;
	}
button.detail header h3 {
	display: inline-block;
	margin: 0px;
	}
main section button.detail {
	background-position: 750px center;
	padding-left: 4em;
	}
.size-lt-large main section button.detail {
	background-position: 90% center;
	}
.detailed button.detail {
	padding-bottom: 1em;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="our-voice" class="row side-right gutter wide alternate">

	<div class="column one">
	<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="padless">
			<?php the_content(); ?>
		</article>
		
	<?php endwhile; ?>
	</div>
	<div class="column two padless">
		<aside class="serif striped">
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
		</aside>
	</div>

</section>

<section id="brand-drivers" class="row side-right gutter wide">
	<button class="detail unbound recto guttered">
		<header>
			<h2>key messages and benefits</h2>
		</header>
	</button>
	<div class="details">
	<article class="padless">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-2', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
		<div class="column two">
			
		</div>
	</article>
	</div><!--/.details-->

</section>

<section id="best-practices" class="row side-right gutter wide alternate">
	<button class="detail unbound recto guttered">
		<header>
			<h2>best practices</h2>
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
	</article>
	</div><!--/.details-->

</section>

</main>

<?php get_footer(); ?>