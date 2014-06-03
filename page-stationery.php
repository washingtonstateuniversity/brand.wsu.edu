<?php get_header(); ?>

<script>
	

</script>

<style>

	img {
		box-shadow: 0px 0px 5px rgba(0,0,0,0.2);
		}
	main section ~ section {
		padding-bottom: 50px;
		}
	xxmain section:first-of-type {
		padding-top: 75px;
		}
	section:nth-of-type(even) {
		background-color: #EFF0F1;
		}
	h2 {
		padding-top: .5em;
		padding-bottom: 1.5em;
		}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row side-right marginalize gutter wide">

	<div class="column one">
		<?php while ( have_posts() ) : the_post(); ?>
		<article class="intro padless">
			<?php the_content(); ?>
		</article>
		<?php endwhile; ?>
	</div>
	<div class="column two">
		<dl class="downloads" style="margin-top: 70px;">
			<dd><a href="http://publishing.wsu.edu/onlineorders.html">order</a></dd>
		</dl>
	</div>

</section>

<section class="row single marginalize gutter wide">

	<div class="fluid">
	<div class="row side-right column one">
	
			<h2>letterhead</h2>
			<img src="/wp-content/themes/brand/images/pages/stationery/letterhead.png" class="max-width" width="752px;" style="margin-bottom: 20px;">
			
			
				<div class="column one marginless padless">
					<p>For desktop printing onto pre-printed WSU letterhead, use this MS Word template to correctly position your content.</p>
				</div>
				<div class="column two marginless padless">
					<dl class="downloads">
						<dd><a href="/wp-content/themes/brand/downloads/stationery/WSU-letterhead-content-template.dotx.zip">download</a></dd>
					</dl>
				
			</div>
			</div>
	</div>
	

</section>

<section class="row single marginalize gutter wide">

	<div class="column one">
		<article class="padless">
			<h2>no.10 envelope</h2>
			<img src="/wp-content/themes/brand/images/pages/stationery/envelope.png" class="max-width" width="752px;">
		</article>
	</div>

</section>

<section class="row single marginalize gutter wide">

	<div class="column one">
		<article class="padless">
			<h2>business card</h2>
			<img src="/wp-content/themes/brand/images/pages/stationery/businesscard.png" class="max-width" width="380px;">		
		</article>
	</div>

</section>

<section class="row single marginalize wide">

	<div class="column one">
		<article class="padless">
			<p>Standard formats for additional correspondence materials, including Monarch letterhead and envelopes, note cards, and notepads, are being developed and will be available soon.</p>
		</article>
	</div>

</section>

</main>

<?php get_footer(); ?>