<?php get_header(); ?>

<style>

.wireframe .row .column {
	min-height: 198px;
	xbox-shadow: inset -2px -2px 1px rgba(137,137,137,0.1);
	box-shadow: inset 0px 0px 1px rgba(137,137,137,0.6);
	}
.inset {
	box-shadow: inset 0px 0px 1px rgba(137,137,137,0.6);
	}
	
/* GRID */

/* ------------------- */

#binder {
	position: relative;
	}
x#cropping {
	background-color: #424a4f;
	height: 400px;
	}
	
button {
	width: auto;
	}	

#grid {
	display: none;
	}
.grid #grid {
	position: absolute;
	width: 990px;
	left: 0;
	top: 0;
	display: block;
	height: 3000px;
	z-index: 99999;
	background: transparent url('/wp-content/themes/brand/images/pages/wireframe/grid.png') repeat-y left top;
	}
.grid12 #grid {
	background: transparent url('/wp-content/themes/brand/images/pages/wireframe/grid12.png') repeat-y left top;
	}
	
main:not(.wireframe) .wireframe-only {
	display: none;
	}

.wireframe section.row::before {
	display: block;
	background: #5e6a71;
	padding: 0px 0px;
	text-indent: 5px;
	opacity: .5;
	position: absolute;
	right: 0px;
	width: 75px;
	z-index: 99;
	visibility: visible;
	height: auto;
	color: white;
	font-size: 10px;
	}
.wireframe .row.eighths::before { content: "eighths"; }
.wireframe .row.twelfths::before { content: "twelfths"; }
.wireframe .row.quarters::before { content: "quarters"; }
.wireframe .row.single::before { content: "single"; }
.wireframe .row.halves::before { content: "halves"; }
.wireframe .row.side-right::before { content: "side-right"; }
.wireframe .row.triptych::before { content: "triptych"; }
.wireframe .row.thirds::before { content: "thirds"; }
.wireframe .row.margin::before { content: "margin"; }

	
/* Column Numbering */
.wireframe .column:not(.note)::after { 
	color: rgba(255,255,255,0.5);
	background-color: rgba(182,188,191,0.5);
	padding: 5px 10px;
	position: absolute;
	right: 0; bottom: 0;
	}
.wireframe .row:not(.nest) .column.one::after { content:"1"; }
.wireframe .row:not(.nest) .column.two::after { content:"2"; }
.wireframe .row:not(.nest) .column.three::after { content:"3"; }
.wireframe .row:not(.nest) .column.four::after { content:"4"; }
.wireframe .row:not(.nest) .column.five::after { content:"5"; }
.wireframe .row:not(.nest) .column.six::after { content:"6"; }
.wireframe .row:not(.nest) .column.seven::after { content:"7"; }
.wireframe :not(.nest) .column.eight::after { content:"8"; }
.wireframe :not(.nest) .column.nine::after { content:"9"; }
.wireframe :not(.nest) .column.ten::after { content:"10"; }
.wireframe :not(.nest) .column.eleven::after { content:"11"; }
.wireframe :not(.nest) .column.twelve::after { content:"12"; }

.wireframe .row .column.one-twelfth::after { content:"1/12"; }
.wireframe .row .column.two-twelfths::after { content:"2/12"; }
.wireframe .row .column.three-twelfths::after { content:"3/12"; }
.wireframe .row .column.six-twelfths::after { content:"6/12"; }

/* Column Measurements */
.column::before { 
	color: black;
	padding: 2px 4px;
	position: absolute;
	opacity: .2;
	font-size: 10px;
	top: 0;	left: 0;
	width: 95%;
	margin: 0px auto;
	text-align: center;
	}
.wireframe .single .column::before { content:"\2190 792 \2192"; }
.wireframe .side-right .column.one::before { content:"\2190 528 \2192"; }
.wireframe .side-right .column.two::before,
.wireframe .thirds .column::before { content:"\2190 264 \2192"; }
.wireframe .margin .column.one::before { content:"\2190 594 \2192"; }
.wireframe .margin .column.two::before,
.wireframe .quarters .column::before,
.wireframe .triptych .column.one::before,
.wireframe .triptych .column.three::before,
.wireframe .halves .halves .column::before { content:"\2190 198 \2192"; }
.wireframe .halves .column::before,
.wireframe .triptych .column.two::before { content:"\2190 396 \2192"; }
.wireframe .halves .quarters .column::before { content:"\2190 99 \2192"; }
.wireframe .quarters .thirds .column::before { content:"\2190 66 \2192"; }
.wireframe .halves .thirds .column::before { content:"\2190 132 \2192"; }

.wireframe .row .row::after {
	display: block;
	background: #5e6a71;
	padding: 0px 0px;
	text-indent: 5px;
	opacity: .2;
	position: absolute;
	text-align: center;
	left: 50%;
	top: 50%;
	bottom: 50%;
	margin-top: -10px;
	margin-bottom: -10px;
	margin-left: -25px;
	width: 50px;
	height: 20px;
	xbottom: 0px;
	z-index: 99;
	visibility: visible;
	height: auto;
	color: white;
	font-size: 10px;
	content:"nested";
	}
	
.side-right .column.two ul {
	padding: 0px; margin: 0px;
	}
.side-right .column.two li {
	list-style: none;
	padding: 10px 0px;
	margin: 0px;
	}
.side-right .column.two li:last-of-type {
	border-bottom: none;
	}
	
.thirds.gutter .column {
   background-color: white; 
   border: none;
   }
.thirds.gutter .column article {
	padding: 0px;
	xborder: 1px #f2f4f5 solid;
	background: #f2f4f5;
	}

.gutter article p { opacity: .3em; }
	
#binder main .note::after {
	color: black;
	padding: 6px 10px;
	position: absolute;
	font-size: 12px;
	opacity: .8;
	top: 5px;
	left: 5px;
	width: auto;
	height: auto;
	text-align: left;
	display: none;
	z-index: 999631;
	line-height: 1em;
	background: white;
	visibility: visible !important;
	}
#binder main .note:hover::after {
	display: block;
	}
	
main section:nth-of-type(even):not(.wireframe-only):not(.hidden) {
	background: rgba(0,0,0,0.05)
	}
section > big {
	padding: 100px 100px 10px 100px;
	font-size: 2em;
	line-height: 1.1em;
	display: block;
	}
#unprecedented .column.one {
	padding-top: 100px;
	}
#unprecedented .column.two {
	position: relative;
	}
button {
	padding: 2px 4px;
	}
.size-lt-small #controls dl:first-of-type {
	margin-top: 150px;
	}

#controls dl {
	margin-top: 15px;
	padding-top: 5px;
	}
#controls dl ~ dl {
	border-top: 1px #D7DAD8 solid;
	}
#controls dl dt {
	display: block;
	}
dt a:hover {
	
	}
#controls dl dd {
	display: block; float: left;
	padding: 0px; margin: 0px 0px 2px 0px;
	}
#controls dl a.info {
	float: right;
	display: block;
	xtext-indent: -9000px;
	overflow: hidden;
	position: relative;
	color: white;
	opacity: .3;
	}
#controls dl a.info::before {
	font-family: "Iconography";
	content: "\2139";
	font-size: 1.4em;
	color: #b5babe;
	position: absolute;
	right: 0;
	top: 0;
	height: 16px;
	width: 30px;
	text-align: center;
	}
#controls dl a.info:hover::before {
	color: #5e6a71;
	}
.spine-colors dd {
	display: block;
	float: left;
	padding: 2px 0px;
	xwidth: 33%;
	}
.spine-wireframe button::before {
	content: "show ";
	}
.wireframe .spine-wireframe button::before {
	content: "hide ";
	}
pre,code {
	display: none;
	}
.wirefram pre, .wireframe code {
	display: block;
	}
pre {
	white-space: normal;
	}
pre code {
	font-style: italic;
	}

</style>

<script>

	$(document).ready(function(){

	// 
	$('.spine-behavior button').on('click', function() {
		var grid = $(this).attr('data-grid');
		$('#binder').removeClass('fluid fixed hybrid').addClass(grid);
		return false;
	});
	
	// Change Spine color
	$('.spine-colors button').on('click', function() {
		var color = $(this).attr('data-color');
		$('html').removeClass('spokane-signtaure tricities-signature vancouver-signature globalcampus-signature extension-signature');
		$('#spine').removeClass('white lightest lighter light gray dark darker darkest crimson transparent');
		$('#spine').addClass(color);
		return false;
	});
	
	// Folio Sizes
	$('.spine-sizes button').on('click', function() {
		var max = $(this).attr('data-max');
		$('#binder').removeClass('max-default max-1188 max-1386 max-1584 max-1782 max-1980');
		$('#binder').addClass('folio').addClass(max);
		return false;
	});
	
	
	
	// Change Campus
	$('.spine-campuses button').on('click', function() {
		$('#spine').removeClass('white lightest lighter light gray dark darker darkest crimson transparent');
		var campus = $(this).attr('data-campus');
			campus = campus + '-signature';
		$('html').removeClass('spokane-signtaure tricities-signature vancouver-signature globalcampus-signature extension-signature').addClass(campus);
		return false;
	});
	
	});

</script>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
	main { background-image: url(<?php echo esc_attr( $image[0] ); ?>); }
</style>
<?php endif; ?>

<span id="grid" onclick="$('#jacket').removeClass('grid').removeClass('grid12');"></span>

<main class="skeleton">

<?php get_template_part('parts/headers'); ?>

<section id="unprecedented" class="row side-right equalize gutter marginalize wide">

	<div class="column one">

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="article-header">
						<h1 class="article-title"><?php the_title(); ?></h1>
					</header>
					<?php the_content(); ?>
				</article>
			<?php endwhile; // end of the loop. ?>

	</div><!--/column-->

	<div id="controls" class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/www.png') 0% -10px no-repeat;">
		
			<dl class="spine-colors clearfix">
				<dt>spine colors <a class="info" href="#spine-colors">info</a></dt>
				<dd><button class="white-back gray-text inset" data-color="white">Default</button></dd> 
				<dd><button class="lightest-back gray-text inset" data-color="lightest">Lightest</button></dd>
				<dd><button class="lighter-back gray-text" data-color="lighter">Lighter</button></dd>
				<dd><button class="light-back lightly-text" data-color="light">Light</button></dd>
				<dd><button class="gray-back lighter-text" data-color="gray">Gray</button></dd>
				<dd><button class="dark-back lighter-text" data-color="dark">Dark</button></dd>
				<dd><button class="darker-back light-text" data-color="darker">Darker</button></dd>
				<dd><button class="darkest-back light-text" data-color="darkest">Darkest</button></dd>
				<dd><button class="crimson-back white-text" data-color="crimson">Crimson</button></dd>
				<dd><button class="transparent-back gray-lighter-text" data-color="transparent">Transparent</button></dd>
			</dl>
			
			<dl class="spine-column-options clearfix">
				<dt>spine options <a class="info" href="#cropping-bleeding">info</a></dt>
				<dd><button onclick="$('#spine').removeClass('cropped').addClass('gray').toggleClass('bleed');">bleeding</button></dd>
				<dd><button onclick="location.href = '#cropping-bleeding';">cropped</button></dd> 
			</dl>
			
			<dl class="spine-campuses clearfix">
				<dt>campus ready <a class="info" href="#campus-ready">info</a></dt>
				<dd><button data-campus="spokane">Spokane</button></dd>
				<dd><button data-campus="tricities">Tri-Cities</button></dd>
				<dd><button data-campus="vancouver">Vancouver</button></dd>
				<dd><button data-campus="globalcampus">Global Campus</button></dd>
				<dd><button data-campus="extension">Extension</button></dd>
			</dl>
			
			<dl class="spine-grids clearfix size-gt-medium-only">
				<dt>grid columns <a class="info hidden" href="info">info</a></dt>
				<dd><button onclick="$('#jacket').addClass('grid');">binder</button></dd> 
				<dd><button onclick="$('#jacket').addClass('grid').addClass('grid12');">page</button></dd>
			</dl>
			
			<dl class="spine-behavior clearfix">
				<dt>grid behavior <a class="info" href="#responsive">info</a></dt>
				<dd><button data-grid="fluid">fluid</button></dd>
				<dd><button data-grid="fixed">fixed</button></dd>
				<dd><button data-grid="hybrid">hybrid</button></dd>
			</dl>
			
			<dl class="spine-sizes clearfix wireframe-only">
				<dt>extra large sizes <a class="info hidden" href="#spine-sizes">info</a></dt>
				<dd><button data-max="max-990">default</button></dd>
				<dd><button data-max="max-1188">1188</button></dd>
				<dd><button data-max="max-1386">1386</button></dd>
				<dd><button data-max="max-1584">1584</button></dd>
				<dd><button data-max="max-1782">1782</button></dd>
				<dd><button data-max="max-1980">1980</button></dd>
			</dl>
			
			<dl class="spine-wireframe">
				<dt>under the hood</dt>
				<dd><button onclick="$('main').toggleClass('wireframe');">framework</button></dd>
			</dl>
					
	</div><!--/column-->

</section>

<section id="spine-behavior" class="row side-left marginalize gutter wide equalize">
	<style>
		#spine-behavior .column.one {
			background: url('/wp-content/themes/brand/images/pages/web/squarecircle.png') right center no-repeat;
			background-size: auto 60%; 
			}
		.size-lt-medium #spine-behavior .column.one {
			background-position: center bottom;
			background-size: auto 231px;
			}
	</style>
	<div class="column one">
		<br>
	</div>
	<div class="column two">
		<article class="marginalize">
		<header><h2>consistency and flexibility</h2></header>
		<p>The framework makes every effort to achieve consistent positioning, graphics, and behavior within the Spine's vertical column while at the same time preserving the greatest degree of flexibility besides. For example, with a switch, the Spine supports three kinds of commonly used grids: <strong>Fluid</strong>, <strong>Fixed</strong>, and <strong>Hybrid</strong>. Feel free to click one above and observe the page's behavior as you shrink your window size. The default is "hybrid".</p>
		</article>
	</div>
</section>

<section id="responsive" class="row side-right equalize marginalize gutter wide">
	<div class="column one">
	<article class="marginalize">
	<header><h2>responsive</h2></header>
	<p><b>Big brother, meet your kid brother, the smartphone. We love him too.</b> The Spine framework provides a responsive grid that enables sites to flex and fold to fit whatever device. The default width is comprised of fifteen 66 pixel columns, the main content area being twelve of those.</p>
	</article>
	</div>
	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/folds.png') center 10px no-repeat; background-size: auto 105%;"></div>
</section>



<section id="spine-colors" class="row side-right equalize reverse marginalize gutter wide">
	<style>
		#spine-palettes dd { padding: .25em .5em; margin-bottom: .25em; }
		#spine-palettes dd:hover { color: white; background-color: #A6192E; }
	</style>
	<div class="twelve-twelfths-max">
	<div class="column one">
		<article>
			<header><h2>spine colors</h2></header>
			<p><b>A chameleon of sorts</b>, to complement the style and tone of your design, the spine can be easily switched between several sets of tints and shades within our primary colors of gray and crimson.</p> <code>Notice that the column order at full size is 2 -> 1. A .reverse class on the parent section switches the float direction to right at full-size, but flips it back left at mobile sizes for an alternative ordering. One day this will be supplanted by flexbox order.</code>
		</article>
	</div>
	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/darkspine.png') right 20px no-repeat; background-size: 100%;">
		<br>
	</div>
	</div>
</section>

<section id="cropping-bleeding" class="row side-right equalize marginalize gutter wide">
	<style>
	#cropping-bleeding .column.two {
		background: url('/wp-content/themes/brand/images/pages/web/cropped.png') left -5px no-repeat;
		background-size: auto 85%;
		}
	#cropping-bleeding .column.two::before,
	#cropping-bleeding:hover .column.two {
		background: url('/wp-content/themes/brand/images/pages/web/murrow.png') left 20px no-repeat;
		background-size: auto 100%;
		}
	</style>
	<div class="column one">
		<article>
		<header><h2>cropping or bleeding</h2></header>
		<p><b>It's gruesome</b>, but for site cover pages, the Spine's head can be "severed" or cropped for an even blanker slate for your design. Alternatively, the spine — which by default is 198px wide and the full height of the browser's window — can be bled off the left side of the window, as it is here.</p>
		</article>
	</div>
	<div class="column two">
		<br>
	</div>
	
</section>

<section id="tool-belt" class="row side-left equalize marginalize gutter wide">
	
	<div class="column one" style="background: url('/wp-content/themes/brand/images/pages/web/tools.png') 70% center no-repeat; background-size: 80% auto;">
	</div>
	<div class="column two">
		<article>
		<header><h2>tool belt included</h2></header>
		<p>Out-of-the-box, the Spine includes local and WSU-wide <strong>search</strong>, a consistent presentation of <strong>contact</strong> information, easy <strong>sharing</strong> via the most popular social networks, and a <strong>print</strong> tool that automatically formats the page for letter-sized paper. <span class="wireframe-only"><code>Search solution can be customized with alternate sources or even replaced entirely.</code></span></p>
		</article>
	</div>
	
</section>

<section id="spine-sizes" class="row side-right equalize marginalize gutter wide hidden">
	
	<div class="column one" style="">
		<article>
		<header><h2>your goldilocks</h2></header>
		<p></p>
		</article>
	</div>
	<div class="column two">
		
	</div>
	
</section>

<section id="spine-sizes" class="row side-right equalize marginalize gutter wide hidden">
	
	<div class="column one" style="">
		<article>
		<header><h2>your goldilocks</h2></header>
		<p></p>
		</article>
	</div>
	<div class="column two">
		
	</div>
	
</section>

<section id="nesting" class="row halves reverse marginalize gutter wide">
	
	<div class="twelve-twelfths-max">
	<div class="column one">
		<article>
		<header><h2>nesting and grouping</h2></header>
		<p>Related articles and images can be nested so that they hang together in groups when the page flexes and folds for mobile. Notice how these nested color blocks hang together if you pull your browser window to a narrow width.</p>
		</article>
	</div>
	<div class="column two row thirds padless">
		<div class="column one orange-back four-twelfths-tall"></div>
		<div class="column two green-back four-twelfths-tall"></div>
		<div class="column three blue-back four-twelfths-tall"></div>
		<!--<div class="column four yellow-back three-twelfths-tall"></div>-->
	</div>
	</div>
	
</section>

<section id="resolution" class="row side-right gutter wide">
	<style>
	#resolution .column.two {
		background: url('http://repo.wsu.edu/spine/1/marks/wsu-signature-vertical.svg') center center no-repeat;
		background-size: auto; 
		}
	#resolution:hover .column.two {
		background-position: center 10px;
		background-size: 300%;
		}
	</style>
	<article class="padless">
	<div class="column one marginalized">
		<header><h2>resolution independence</h2></header>
		<p><b>Those whiskers are ticklish at life size.</b> The Spine is built entirely with vector based graphics so that it is prepared for high resolution displays and zooming.</p>
	</div>
	<div class="column two three-twelfths-tall min-height" style="xxoverflow: hidden;">
		<figure></figure>
	</div>
	</article>
</section>

<section class="row quarters wireframe-only">
	<div class="column one picture-frame"><img src="/wp-content/themes/brand/images/pages/wireframe/1.png" class="fill-width"></div>
	<div class="column two picture-frame"><img src="/wp-content/themes/brand/images/pages/wireframe/2.png" class="fill-width"></div>
	<div class="column three picture-frame"><img src="/wp-content/themes/brand/images/pages/wireframe/3.png" class="fill-width"></div>
	<div class="column four picture-frame"><img src="/wp-content/themes/brand/images/pages/wireframe/4.png" class="fill-width"></div>
</section>

<section class="row halves  wireframe-only">
	<div class="column one">

	</div>
	<div class="column two row">
		<div class="column four-twelfths"></div>
		<div class="column two-twelfths"></div>
	</div>
</section>

<section id="campus-ready" class="row side-left equalize marginalize gutter wide">

	<style>
		#campus-ready .column.one {
			background: url('http://repo.wsu.edu/spine/1/marks/wsu-spokane-signature-vertical.svg') center center no-repeat;
			background-size: auto; 
			}
		#campus-ready::before,
		#campus-ready:hover .column.one {
			background: url('http://repo.wsu.edu/spine/1/marks/wsu-globalcampus-signature-vertical.svg') center center no-repeat;
			}
	</style>
	
	<div class="column one">
		<br>
	</div>
	<div class="column two">
		
		<article>
		<header><h2>campus ready</h2></header>
		<p>The signatures for each urban campus and for other top level units are pre-baked into the Spine, both the vertical signature for large devices and the horizontal for small. <pre>The campus signatures are activated by adding, for example , a <code>.wsu-vancouver-signature</code> or <code>.wsu-tricities-signature</code> class to html or body.</pre></p>
		</article>
	</div>
	
</section>

<section class="row thirds gutter equalize wireframe-only">
	<div class="column one">
		<article>
		<strong>The skeleton grid eschews padding and margins by default to allow for seamless designs. However, adding a "gutter" class, as in this section, provides gutters for equally spaced column interior content (30px).</strong><hr>
		These columns have also been equalized with the "equalize" class to allow for aligning background images. Were using "border-box" box-sizing on our columns to enable padding without breaking our responsive math.<hr>
		<p>Vestibulum cursus ultricies tellus, sed fermentum mauris mattis vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam condimentum ligula ut dictum scelerisque. Aenean mattis erat ac tortor accumsan, vitae tincidunt dui feugiat. Vestibulum hendrerit metus id justo tristique, a pharetra nibh lobortis. Sed eu dolor nec metus blandit egestas ac at elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ac mollis mauris. Sed aliquet ipsum in dapibus euismod.</p></article>
	</div>
	<div class="marginalized column two">
		<article><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dolor neque, scelerisque quis mauris quis, fringilla eleifend est. Phasellus purus leo, commodo sit amet ipsum ac, lacinia auctor nulla. Nam sed nunc fermentum, condimentum ligula sit amet, facilisis urna. Vestibulum pharetra dui turpis, vitae elementum dui gravida in. Quisque ut lectus aliquet, lobortis risus vitae, placerat metus. Duis nisl eros, mattis non fermentum eget, luctus sed tortor. Nunc tempus nulla eget erat ornare, quis mattis turpis tincidunt. Vivamus semper elit at metus consequat, vitae dapibus urna posuere. Nunc iaculis arcu sed ante mollis, vitae varius orci rhoncus. Nullam luctus tristique pretium. Ut tincidunt, velit ullamcorper aliquet molestie, nisl lectus interdum felis, quis blandit nisi tortor non elit. Ut sit amet ipsum consectetur, tempor tellus at, ultrices elit. Sed a mauris enim. Sed vitae odio vestibulum massa vulputate lacinia.</p></article>
	</div>
	<div class="column three">
		<article><p>Nam a dolor diam. Sed bibendum sit amet arcu id vehicula. Duis dictum rhoncus velit vel porttitor. Nullam scelerisque fermentum massa. Proin suscipit facilisis tincidunt. Aenean et tempor augue. Nullam gravida feugiat diam, vel blandit turpis ornare et. Sed sed arcu quis augue ultricies porta id vitae ante. Donec at ante sed mauris mollis rutrum eu sit amet lectus. <hr> .equalize makes columns equally tall... or short</p></article>
	</div>
</section>

<!--

<section class="row thirds marginalize gutter equalize">
	<div class="column one">

	</div>
	<div class="column two">

	</div>
	<div class="column three">
		<ul>
		<li id="folio-samples"><strong>Large Formats: </strong>990 Container by <a href="#" data-max="max-default">default</a> with maximum widths of <a href="#" data-max="max-1188">1188</a>, <a href="#" data-max="max-1386">1386</a>, <a href="#" data-max="max-1584">1584</a>, <a href="#" data-max="max-1782">1782</a>, <a href="#" data-max="max-1980">1980</a></li>
		</ul>
	</div>
</section>

<section class="row triptych">
	<div class="column one"></div>
	<div class="column two"></div>
	<div class="column three"></div>
</section>



<section id="color-backs" class="row halves nest xxnote">
	
	<div class="column one row quarters">
		<div class="column one orange-back"></div>
		<div class="column two green-back"></div>
		<div class="column three blue-back"></div>
		<div class="column four yellow-back"></div>
	</div>
	<div class="column one row halves">
		<div class="column one crimson-back"></div>
		<div class="column two gray-back"></div>
	</div>
	
</section>



<footer class="local">
	<br>	
</footer>-->

</main><!--/#page-->

<?php get_footer(); ?>
