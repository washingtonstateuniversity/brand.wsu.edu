<?php get_header(); ?>

<style>

dl dt, dl dd {
	float: left;
	display: block;
	padding-right: 0;
	}
.side-left {
	max-width: 792px;
	}
.side-left .column.one {
	width: 34%;
	}
.side-left .column.two {
	width: 66%;
	}
.row.halves .column {
	width: 50%;
	}
xxhr {
	border-top: 1px solid gray;
	padding-top: 10px;
	margin-top: 10px;
	}
main hr {
	box-sizing: border-box;
	max-width: 792px;
	margin: 2em 4em;
	}
dd li {
	padding-bottom: 0;
	}
main section:nth-of-type(even) {
	background-color: #EFF0F1;
	}
xxmain section {
	padding-bottom: 4em;
	}
xxmain section ~ section {
	padding-top: 2em;
	}

a[href*="#index"] ~ ul {
	border-width: 1px 0px;
	border-style: dotted;
	border-color: #b5babe;
	}
a[href*="#index"] ~ ul li {
	margin-left: 0 !important;
	}
a[href*="#index"] ~ ul li a,
a[href*="#index"] ~ ul li .active a {
	color: gray !important;
	font-weight: normal !important;
	}
a[href*="#index"] {
	color: #981e32 !important;
	font-weight: bold;
	
	}
a[href*="#index"] ~ ul li a:hover,
a[href*="#index"] ~ ul li .active a:hover {
	color: #981e32 !important;
	}
button.detail {
	text-align: left;
	background-position: 770px center;
	text-indent: 4em;
	xpadding-bottom: 0;
	}
main > h2 {
	color: white;
	padding: 1em 2em;
	background: #8d959a;
	}

</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="intro" class="row side-right gutter wide marginalize tall">

	<div class="column one">
	
		<big>The following standards</big> are informed by mandate to provide a foundation of consistent form and function across the WSU web ecosystem.
	
	</div>

</section>

<h2>The Spine</h2>

<section id="column">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Column</h3>
	</header>
</button>
<div class="details">

	<div class="row single gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'column', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl id="standard-columns" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column one">
				<h4>Full Spine</h4>
			</div>
			<div class="column two">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-positioning" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4>Positioning</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'positioning-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'positioning-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr class="short">
	
	<dl id="standard-dimensions" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4>Dimensions</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'dimensions-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'dimensions-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-background" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Background</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'background', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-edges" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Edges</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'edges-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'edges-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-signature" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>WSU Signature</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'signature', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
</div><!--/details-->

</section>

<section id="tools">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Tools</h3>
	</header>
</button>
<div class="details">

	<div class="row single gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'tools', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<hr>
	
	<dl id="standard-search" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Search Tool</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'search', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-contact" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Contact Tool</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'contact', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-share" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Share Tool</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'share', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-print" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h3>Print Tool</h3>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'print', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>

	</div><!--/details-->

</section>

<section id="navigation">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Navigation</h3>
	</header>
</button>
<div class="details">

	<div class="row single gutter">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'navigation', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl id="standard-columns" class="row side-left wide cf">
		
		<dt class="column one guttered"></dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<h4>Full Spine</h4>
			</div>
			<div class="column two">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-sitenav" class="row side-left cf">
		
		<dt class="column one guttered">
			<h3>Site Navigation</h3>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'sitenav-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'sitenav-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-offsitenav" class="row side-left cf">
		
		<dt class="column one guttered">
			<h3>Offsite Navigation</h3>
		</dt>
		<dd class="column two guttered">
			<?php 
			$column = get_post_meta( get_the_ID(), 'offsitenav-1', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
</div><!--/details-->

</section>

<section id="footer">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Footer</h3>
	</header>
</button>
<div class="details">

	<div class="row single gutter marginalize">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'footer', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl id="standard-columns" class="row side-left wide cf">
		
		<dt class="column one guttered">
			<h3></h3>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<h4>Full Spine</h4>
			</div>
			<div class="column two">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-socialmedialinks" class="row side-left cf">
		
		<dt class="column one guttered">
			<h3>Social Media Links</h3>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'socialmedialinks-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'socialmedialinks-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>

	<hr>
	
	<dl id="standard-footer" class="row side-left cf">
		
		<dt class="column one guttered">
			<h3>Footer Links</h3>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'footer-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'footer-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>

</div><!--/details-->

</section>

<h2>The Page</h2>

<section id="views">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Views</h3>
	</header>
</button>
<div class="details">

	<div class="row single gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'views', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl id="standard-columns" class="row side-left wide cf">
		
		<dt class="column one guttered">
			<h3></h3>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<h4>Full Spine</h4>
			</div>
			<div class="column two">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-smallview" class="row side-left cf">
		
		<dt class="column one guttered">
			<h4>Small View</h4>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'smallview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'smallview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-mediumview" class="row side-left cf">
		
		<dt class="column one guttered">
			<h4>Medium View</h4>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'mediumview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'mediumview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-largeview" class="row side-left cf">
		
		<dt class="column one guttered">
			<h4>Large View</h4>
		</dt>
		<dd class="row halves column two gutter">
			<div class="column one">
				<?php 
				$column = get_post_meta( get_the_ID(), 'largeview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column two">
				<?php 
				$column = get_post_meta( get_the_ID(), 'largeview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr><hr>
	
	<!--<div class="row single gutter marginalize">
		<div class="column one">
			<h2>Additional Views</h2>
			<?php 
			$column = get_post_meta( get_the_ID(), 'views-additional', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>-->
	
	<dl id="standard-xlargeview" class="row side-left cf">
		
		<dt class="column one guttered">
			<h4>X-Large View</h4>
		</dt>
		<dd class="column two guttered">
				<?php 
				$column = get_post_meta( get_the_ID(), 'xlargeview', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-printview" class="row side-left cf">
		
		<dt class="column one guttered">
			<h4>Print View</h4>
		</dt>
		<dd class="column two guttered">
			<?php 
			$column = get_post_meta( get_the_ID(), 'printview', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
		
	</dl>
	
</div><!--/details-->

</section>

<section id="page">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Grid</h3>
	</header>
</button>
<div class="details">

<div class="row single gutter wide">
	<div class="column one">
		<?php 
		$column = get_post_meta( get_the_ID(), 'page', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</div>
</div>

<dl id="standard-grid" class="row side-left cf">
	
	<dt class="column one guttered">
		<h3>columns</h3>
	</dt>
	<dd class="column two guttered">
			<?php 
			$column = get_post_meta( get_the_ID(), 'columns', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
	
</dl>

<dl id="standard-grid" class="row side-left cf">
	
	<dt class="column one guttered">
		<h3>responsiveness</h3>
	</dt>
	<dd class="column two guttered">
			<?php 
			$column = get_post_meta( get_the_ID(), 'responsiveness', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
	
</dl>

</section>

</main>

<?php get_footer(); ?>