<?php get_header(); ?>

<style>

section figure {
	background-repeat: no-repeat;
	height: 500px;
	background-position: center 0px;
	background-size: cover;
	}
.size-lt-medium main section figure {
	background-repeat: none;
	}
main section article {
	height: 340px;
	}

main section article ul:first-of-type {
	padding-top: 30px;
	}
main section article ul {
	padding-left: 0;
	padding-right: 0;
	}

main section article ul li {
	list-style: none;
	font-size: 1.7rem;
	line-height: 1.5em;
	color: #a6adb0;
	padding: .1rem 0;
	margin: 0px;
	background: none;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	}
article ul:first-of-type {
	margin-left: 4rem;
	}
.size-small article ul:first-of-type {
	margin-left: 2rem;
	}
.size-gt-small #we-are article ul { margin-left: 220px; }
.size-gt-small #we-believe article ul { text-align: right; }
.size-gt-small #we-emphasize article ul { margin-left: 80px; }
.size-gt-small #we-offer article ul { margin-left: 260px; }
.size-gt-small #we-promise article ul { margin-left: 280px; }

.details .column.one {
	padding-bottom: 40px;
	}
button.detail::after {
	content: "more";
	display: inline-block;
	}
.detailed button.detail::after {
	content: "";
	}
	
.size-gt-medium #we-offer ul li:nth-of-type(1) {  }
.size-gt-medium #we-offer ul li:nth-of-type(2) { padding-left: 1rem; }
.size-gt-medium #we-offer ul li:nth-of-type(3) { padding-left: 2rem; }
.size-gt-medium #we-offer ul li:nth-of-type(4) { padding-left: 3rem; }

</style>

<main>

<section id="we-are" class="row single max-width">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/cougcheek.jpg');" data-0="background-position: center 0px;" data-500="background-position: center -100px;">
	<figcaption><big>we are</big></figcaption>
</figure>

<div class="column one row side-right gutter wide">

<article class="padless">

	<header class="hidden">we are</header>

	<ul>
		<li>knowledgeable</li>
		<li>trailblazers</li>
		<li>hands-on</li>
		<li>inclusive</li>
		<li>genuine</li>
	</ul>
	
	<button class="detail" alt="disclose we are"></button>
	<div class="details">
	
		<hr>
		
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-believe" class="row single max-width">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/protection.jpg');" data-0="background-position: center 0px;" data-top="background-position: center -100px;">
	<figcaption><big>we believe in</big></figcaption>
</figure>

<div class="column one row side-right">

<article class="padless">

	<header class="hidden">we believe in</header>
	<ul>
		<li>creating a better future</li>
		<li>challenging limits</li>
		<li>driving innovation</li>
		<li>broadening beliefs</li>
		<li>nurturing community</li>
	</ul>

</article>

</div>

</section>

<section id="we-emphasize" class="row single max-width">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/shrooms.jpg');" data-0="background-position: center 100px;" data-top="background-position: center -100px;">
	<figcaption><big>we emphasize</big></figcaption>
</figure>

<div class="column one row halves gutter wide">

<article class="padless">
	
	<header class="hidden">we emphasize</header>
	<ul>
		<li>eminent faculty</li>
		<li>life-changing research</li>
		<li>engaged learning</li>
		<li>enriching experiences</li>
		<li>informed graduates</li>
	</ul>
	
	<button class="detail" alt="disclose we emphasize"></button>
	<div class="details">
		
		<hr>
	
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

	</div><!--/.details-->
	
</article>

</div>

</section>

<section id="we-offer" class="row single max-width">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/gradjump.jpg');" data-0="background-position: center 0px;" data-top="background-position: center -100px;">
	<figcaption><big>we offer</big></figcaption>
</figure>

<div class="column one row side-right">

<article class="padless">

	<header class="hidden">we offer</header>

	<ul>
		<li>undergraduate degrees</li>
		<li>graduate and professional degrees</li>
		<li>leadership opportunities</li>
		<li>committed citizens</li>
	</ul>

</article>

</div>

</section>

<section id="we-promise" class="row single max-width">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/brand/foreground.jpg');" data-0="background-position: center 100px;" data-top="background-position: center -100px;">
	<figcaption><big>we promise</big></figcaption>
</figure>

<div class="column one">

<article class="padless">

	<header class="hidden">we promise</header>

	<ul>
		<li>if you seek to do good in the world, </li>
		<li>our learning community will</li>
		<li>engage, challenge, and equip you</li>
		<li>for life-long success</li>
	</ul>

</article>

</div>

</section>

</main>

<script type="text/javascript">
    var s = skrollr.init();
</script>

<?php get_footer(); ?>