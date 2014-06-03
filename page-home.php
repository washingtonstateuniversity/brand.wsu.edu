<?php get_header(); ?>

<script>

</script>

<style>

section#our-brand .column.one {
	background: rgba(0,0,0,0.55);
	
	padding: 0;
	}
.column > article p {
	color: white;
	font-size: 2.5em;
	line-height: 3em;
	padding-left: 200px;
	padding-top: 2em;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	}
body,main {
	background: black;
	padding-bottom: 0;
	}
section#our-brand {
	background-image: url('/wp-content/themes/brand/images/pages/home/confetti.jpg');
	background-position: left top;
	background-repeat: no-repeat;
	background-size: 100% auto;
	background-size: 978px 714px;
	min-height: 650px;
	}

section#our-brand article {
	background-image: url('/wp-content/themes/brand/images/pages/home/ourbrand.png');
	background-repeat: no-repeat;
	background-position: 50px 32px;
	background-size: auto 630px;
	font-size: 12px;
	min-height: 710px;
	}
.size-lt-medium section#our-brand {
	background-position: right bottom;
	background-size: auto 100%;
	min-height: 600px;
	}
.size-lt-medium section#our-brand article {
	background-position: 20px 32px;
	background-size: auto 480px;
	min-height: 600px;
	}
.size-lt-medium .column > article p {
	font-size: 2em;
	padding-left: 140px;
	line-height: 3em;
	padding-top: 2em;
	}
.size-gt-large section#our-brand {
	background-position: left bottom;
	background-size: 110% auto;
	}
.size-gt-large section#our-brand article {
	min-height: 690px;
	}

	
</style>

<main>

<section id="our-brand" class="row side-right unbound recto">
		
	<div class="column one">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article>
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section class="row marginalize wide">

	<div class="column one">

		<article class="gray-darker-text">
				<!--<?php 
				$column = get_post_meta( get_the_ID(), 'section-2-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>-->
		</article>

	</div>

</section>

</main>

<?php get_footer(); ?>