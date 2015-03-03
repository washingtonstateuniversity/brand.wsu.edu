<?php get_header(); ?>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row side-right alternate pad gutter wide boundless">
	
	<div class="column one nav-top">
		
		<?php while ( have_posts() ) : the_post(); ?>
		
		<article class="intro padless">
			<?php the_content(); ?>
		</article>
		
		<?php endwhile; ?>
		
	</div>
	
</section>

<section id="campaign" class="row halves pad gutter wide boundless">

	<article class="padless">
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
	</article>

</section>

<section id="anniversary" class="row halves pad gutter wide boundless alternate">

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
			
			<dl class="downloads">
				<dt>125th Marks</dt>
				<dd><a href="/wp-content/themes/brand/downloads/campaign/WSU125-Marks.zip">Download</a></dd>
			</dl>
		</div>
		
		<hr>
		
		<div class="column one clear-both">
			<h3>The 125th anniversary mark</h3>
			<ul>
				<li>The 125th anniversary mark should not be altered in any way.</li>
				<li>A stroke or border should not be added to the 125th mark.</li>
				<li>Colors should be Crimson and Gray.</li>
				<li>The mark should not be reproduced in any color other than Crimson and Gray or reversed out to white. When using the revered 125th anniversary mark, the “125” remains in Crimson as long as it is contrastive and legible upon the background color. (1)</li>
				<li>Do not reduce the size of the 125th anniversary mark smaller than 1” in width.</li>
			</ul>
		</div>
		<div class="column two">
			<figure>
				<img src="/wp-content/themes/brand/images/125th/125th-marks.png" alt="examples-appropriate" width="100%" />
			</figure>
		</div>
		
		<div class="column one">
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
		
		<div class="row single column padded wide">
			<h3>combining the 125th mark with the WSU Signature</h3>
			<ul>
				<li>The 125th anniversary mark should always be used in conjunction with another WSU logo and never be used by itself. (2) The 125th anniversary mark and WSU Signature can be similar in size or the WSU Signature can be larger. The 125th mark
should never be larger than the WSU Signature. (3)</li>
				<li>When using both the WSU Signature and the 125th mark together — side by side, or stacked — use the same color arrangement for both. (4) When vertically stacking marks, the WSU Signature should be placed above the 125th anniversary mark. (5)</li>
				<li>Keep required white space between the 125th mark and the WSU Signature. Treat them as distinct elements.</li>
				<li>The mark and signature should not be used in a way that feels as though the two marks are combining to make a single mark. (6)
				A line, or pipe, should not be used to separate the two marks; use white space to provide proper separation and distinctness between
				the 125th anniversary mark and a Signature. (7)</li>
			</ul>
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
		
	</article>
	
</section>

</main>

<?php get_footer(); ?>