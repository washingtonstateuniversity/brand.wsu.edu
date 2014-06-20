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
main hr.topheavy {
	margin-bottom: 1em;
	}
main hr.bottomheavy {
	margin-top: 1em
	}
dd li {
	padding-bottom: 0;
	}
main section:nth-of-type(even) {
	background-color: #EFF0F1;
	}

xxmain section:nth-of-type(odd).detailed button,
xxmain section:nth-of-type(even).detailed button {
	border-bottom: 1px #EFF0F1 solid;
	}
xxmain section {
	padding-bottom: 4em;
	}
xxmain section ~ section {
	padding-top: 2em;
	}
main section dl:last-of-type {
	padding-bottom: 4em;
	}
	
/* In page navigation */
.parent > a[href*="#index"] {
	margin-top: 10px;
	}
a[href*="#index"] ~ ul {
	margin-bottom: 10px;
	}
a[href*="#index"] ~ ul {
	xxborder-width: 1px 0px;
	
	
	}
a[href*="#index"],
a[href*="#index"] ~ ul li a {
	border-width: 0px 0px 0px 1px !important;
	border-style: dotted;
	border-color: #b5babe;
	margin-left: -10px !important;
	padding-left: 10px !important;
	}
a[href*="#index"] ~ ul li {
	margin-left: 0 !important;
	}
a[href*="#index"] ~ ul li a {
	
	
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
dd .column:nth-of-type(1):before,
dd .column:nth-of-type(2):before {
	text-transform: lowercase;
	font-weight: bold;
	opacity: .5;
	font-size: 1.2em;
	display: block;
	}
.size-lt-medium dl:not(.column-headers) dd .column:nth-of-type(1):before {
	content: "Full Spine";
	}
.size-lt-medium dl:not(.column-headers) dd .column:nth-of-type(2):before {
	content: "Cropped Spine";
	}
	
.size-lt-medium main hr {
	margin-left: 2em;
	margin-right: 2em;
	}
.size-lt-medium main > h2 {
	padding-left: 32px;
	}
.size-lt-medium .column-headers {
	display: none;
	}
.size-lt-medium .gutter.wide .column,
.size-lt-medium .guttered.wide {
	padding-left: 2em;
	padding-right: 2em;
	}
.size-lt-medium button.detail {
	text-indent: 2em;
	}
</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section id="intro" class="row side-right gutter wide marginalize tall">

	<div class="column one">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
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

	<div class="row side-right gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'column', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl class="column-headers row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<h4>Full Spine</h4>
			</div>
			<div class="column">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr class="bottomheavy">
	
	<dl id="standard-positioning" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4>Positioning</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'positioning-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'positioning-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-scrolling" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4>Scrolling</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'scrolling-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'scrolling-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-dimensions" class="row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4>Dimensions</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'dimensions-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
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
			<h4>Colors</h4>
		</dt>
		<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'colors', true );
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
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'edges-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
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

	<!--<div class="row side-right gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'tools', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>-->
	
	<dl class="column-headers row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<h4>Full Spine</h4>
			</div>
			<div class="column">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-signature" class="row side-left cf">
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'tools-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'tools-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
	</dl>
	
	<hr>
	
	<dl id="standard-search" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Search</h4>
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
			<h4>Contact</h4>
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
			<h4>Share</h4>
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
			<h3>Print</h3>
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

	<div class="row side-right gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'navigation', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl class="column-headers row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<h4>Full Spine</h4>
			</div>
			<div class="column">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr class="bottomheavy">
	
	<dl id="standard-sitenav" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h3>Site Navigation</h3>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'sitenav-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'sitenav-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-offsitenav" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h3>Offsite Navigation</h3>
		</dt>
		<dd class="row halves column two guttered wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'offsitenav-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div></div>
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
	
	<?php $column = get_post_meta( get_the_ID(), 'footer', true );
		if( ! empty( $column ) ) : ?>
			<div class="row side-right gutter marginalize">
				<div class="column one">
					 <?php echo wp_kses_post( $column ); ?>
				</div>
			</div>
	<?php endif; ?>
	
	<dl class="column-headers row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h3></h3>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<h4>Full Spine</h4>
			</div>
			<div class="column">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-socialmedialinks" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h3>Social Media Links</h3>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'socialmedialinks-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'socialmedialinks-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>

	<hr class="topheavy">
	
	<dl id="standard-footer" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h3>Footer Links</h3>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'footer-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
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

<section id="fonts-colors">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>style</h3>
	</header>
</button>
<div class="details">

<div class="row side-right">
	
	<dt class=""></dt>
	<dd class="column one guttered wide">
		<?php 
		$column = get_post_meta( get_the_ID(), 'style', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</dd>
</div>

</section>

<section id="views">

<button class="detail" alt="disclose capitalization">
	<header>
		<h3>Views</h3>
	</header>
</button>
<div class="details">

	</dl>

	<div class="row side-right gutter wide">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'views', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</div>
	</div>
	
	<dl class="column-headers row side-left wide cf">
		
		<dt class="column one guttered wide">
			<h4></h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<h4>Full Spine</h4>
			</div>
			<div class="column">
				<h4>Cropped Spine</h4>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-smallview" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Small View</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'smallview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'smallview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-mediumview" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Medium View</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'mediumview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'mediumview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-largeview" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Large View</h4>
		</dt>
		<dd class="row halves column two gutter wide">
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'largeview-1', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column">
				<?php 
				$column = get_post_meta( get_the_ID(), 'largeview-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
		
	</dl>
	
	<hr>
	
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
		
		<dt class="column one guttered wide">
			<h4>X-Large View</h4>
		</dt>
		<dd class="column two guttered wide">
				<?php 
				$column = get_post_meta( get_the_ID(), 'xlargeview', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</dd>
		
	</dl>
	
	<hr>
	
	<dl id="standard-printview" class="row side-left cf">
		
		<dt class="column one guttered wide">
			<h4>Print View</h4>
		</dt>
		<dd class="column two guttered wide">
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

<div class="row side-right gutter wide">
	<div class="column one">
		<?php 
		$column = get_post_meta( get_the_ID(), 'page', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</div>
</div>

<!--<hr class="bottom-heavy">-->

<dl id="standard-columns" class="row side-left cf">
	
	<dt class="column one guttered wide">
		<h3>columns</h3>
	</dt>
	<dd class="column two row halves">
			<div class="guttered wide">
				<?php 
				$column = get_post_meta( get_the_ID(), 'columns', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column guttered wide">
				<?php 
				$column = get_post_meta( get_the_ID(), 'columns-2', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="column guttered wide">
				<?php 
				$column = get_post_meta( get_the_ID(), 'columns-3', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
			<div class="guttered wide marginalize-top" style="float:none; clear: both;">
				<?php 
				$column = get_post_meta( get_the_ID(), 'columns-4', true );
				if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
				?>
			</div>
		</dd>
	
</dl>

<hr>

<dl id="standard-responsiveness" class="row side-left cf">
	
	<dt class="column one guttered wide">
		<h3>responsiveness</h3>
	</dt>
	<dd class="column two guttered wide">
			<?php 
			$column = get_post_meta( get_the_ID(), 'responsiveness', true );
			if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
			?>
		</dd>
	
</dl>

</section>

</main>

<?php get_footer(); ?>