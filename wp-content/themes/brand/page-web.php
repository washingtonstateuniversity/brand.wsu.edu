<?php /* Template Name: Wires */ ?>

<?php get_header(); ?>

<style>

.wireframe .row .column {
	min-height: 198px;
	xbox-shadow: inset -2px -2px 1px rgba(137,137,137,0.1);
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
	background: transparent url('http://nbj.me/wp-content/themes/dev/depot/images/elements/grid.png') repeat-y left top;
	}
.grid12 #grid {
	background: transparent url('http://nbj.me/wp-content/themes/dev/depot/images/elements/grid12.png') repeat-y left top;
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
.wireframe .row.sidebar::before { content: "sidebar"; }
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
.wireframe .sidebar .column.one::before { content:"\2190 528 \2192"; }
.wireframe .sidebar .column.two::before,
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
	
.sidebar .column.two ul {
	padding: 0px; margin: 0px;
	}
.sidebar .column.two li {
	list-style: none;
	padding: 10px 0px;
	margin: 0px;
	}
.sidebar .column.two li:last-of-type {
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
#full-image.note::after {
	content: ".picture-frame sets line-height to 0, .fill-width sets width to 100% and height to auto";
	}
#binder main #color-backs.note::after {
	content: "standard colors can be applied with classes like .crimson-back and .green-back";
	}
	
main section:nth-of-type(even) {
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
#unprecedented .column.two aside {
	position: absolute;
	bottom: 0px;
	padding-bottom: 20px;
	}
	
button {
	padding: 2px 4px;
	}
	
</style>

<script>

	$(document).ready(function(){

	// 
	$('#flexible button').on('click', function() {
		var grid = $(this).attr('data-grid');
		$('#binder').removeClass('fluid fixed hybrid').addClass(grid);
		return false;
	});
	
	// Change Spine color
	$('#spine-palettes dd').on('click', function() {
		var color = $(this).attr('data-color');
		$('#spine').removeClass('white lightest lighter light gray dark darker darkest crimson transparent');
		$('#spine').addClass(color);
		return false;
	});
	
	// Folio Sizes
	$('li#folio-samples a').on('click', function() {
		var max = $(this).attr('data-max');
		$('#binder').removeClass('max-default max-1188 max-1386 max-1584 max-1782 max-1980');
		$('#binder').addClass('folio').addClass(max);
		return false;
	});
	
	// Change Campus
	$('#campus-ready button').on('click', function() {
		var campus = $(this).attr('data-campus');
			campus = campus + '-signature';
		$('#jacket').removeClass().addClass(campus);
		return false;
	});
	
	});

</script>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<style>
	main { background-image: url(<?php echo $image[0]; ?>); }
</style>
<?php endif; ?>

<span id="grid" onclick="$('#jacket').removeClass('grid').removeClass('grid12');"></span>

<main class="skeleton">

<?php get_template_part('parts/headers'); ?>

<section id="unprecedented" class="row sidebar equalize">

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

	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/www.png') 0% -10px no-repeat;">
		
		<aside>
		<h5>Under the hood</h5>
		<p>The Spine includes an underlying framework which is responsible for providing the mobile friendly responsive design and more.
			<button onclick="$('main').toggleClass('wireframe');">show framework</button>
			
		</aside>

	</div><!--/column-->

</section>

<section id="flexible" class="row sideleft equalize">
	<div class="column one" style="background: url('/wp-content/themes/brand/images/pages/web/squarecircle.png') center center no-repeat; background-size: auto 80%">
	</div>
	<div class="column two">
		<article class="marginalize">
		<header><h2>consistency and flexibility</h2></header>
		<p>The framework makes every effort to achieve consistent positioning, graphics, and behavior within the Spine's vertical column while at the same time preserving the greatest degree of flexibility besides. For example, with a switch, the Spine supports three kinds of commonly used grids: <button data-grid="fluid">Fluid</button>, <button data-grid="fixed">Fixed</button>, and <button data-grid="hybrid">Hybrid</button>. Feel free to click one and observe its behavior as you shrink your window size. The default is "hybrid".</p>
		</article>
	</div>
</section>

<section id="responsive" class="row sidebar equalize">
	<div class="column one">
	<article class="marginalize">
	<header><h2>responsive</h2></header>
	<p><b>Big brother, meet your kid brother, the smartphone. We love him too.</b> The Spine framework provides a responsive grid that enables sites to flex and fold to fit whatever device. The default width is comprised of <button onclick="$('#jacket').addClass('grid');">fifteen</button> 66 pixel columns, the main content area being <button onclick="$('#jacket').addClass('grid').addClass('grid12');">twelve</button> of those.</p>
	</article>
	</div>
	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/folds.png') center 10px no-repeat; background-size: auto 105%;"></div>
</section>



<section id="spine-palettes" class="row sidebar equalize reverse">
	<style>
	#spine-palettes dd { padding: .25em .5em; margin-bottom: .25em; }
	#spine-palettes dd:hover { color: white; background-color: #A6192E; }
	</style>
	<div class="twelve-twelfths-max">
	<div class="column one">
		<article>
		<header><h2>spine palettes</h2></header>
		<p>To complement the style and tone of your design, the Spine can be easily switched between six sets of tints within our primary colors of gray and crimson. <strong>Try it out ...</strong></p>
		
		<dl>
			<dd class="lightest-back light-text" data-color="lightest" style="box-shadow: inset 0 0 1px black;">Lightest</dd>
			<dd class="lighter-back gray-text" data-color="lighter">Lighter</dd>
			<dd class="light-back dark-text" data-color="light">Light</dd>
			<dd class="gray-back lightly-text" data-color="gray">Gray</dd>
			<dd class="dark-back lighter-text" data-color="dark">Dark</dd>
			<dd class="darker-back light-text" data-color="darker">Darker</dd>
			<dd class="darkest-back light-text" data-color="darkest">Darkest</dd>
			<dd class="crimson-back white-text" data-color="crimson">Crimson</dd><br>
			<dd class="white-back" data-color="white">Default White</dd> 
			<dd style="transparent-back" data-color="transparent">Transparent</dd>
		</dl>
		</article>
	</div>
	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/darkspine.png') right 20px no-repeat; background-size: 100%;">
		
		<br>
		
	</div>
	</div>
</section>

<section id="cropping-bleeding" class="row sidebar equalize">
	
	<div class="column one">
		<article>
		<header><h2>cropping and bleeding</h2></header>
		<p><b>It may be gruesome</b>, but for site cover pages, the Spine's head can be "severed" or <em><button onclick="$('#spine').removeClass('bleed').toggleClass('cropped');$('#jacket').prepend('<div id=cropping></div>');">cropped</button></em> leaving the full horizontal width of the page for design. Additionally, the Spine can be set to <button onclick="$('#spine').addClass('dark').addClass('bleed');">bleed</button> off the left edge of the browser window, <button onclick="$('#spine').removeClass('bloodless bleed');">or not</button>.</p>
		</article>
	</div>
	<div class="column two" style="background: url('/wp-content/themes/brand/images/pages/web/cropped.png') left 10px no-repeat; background-size: 130% auto;">
		<br>
	</div>
	
</section>

<section id="tool-belt" class="row sideleft equalize">
	
	<div class="column one" style="background: url('/wp-content/themes/brand/images/pages/web/tools.png') 70% center no-repeat; background-size: 80% auto;">
	</div>
	<div class="column two">
		<article>
		<header><h2>tool belt included</h2></header>
		<p>Out-of-the-box, the Spine includes local and WSU-wide <strong>search</strong>, a consistent spot for <strong>contact</strong> information, easy access to <strong>share</strong> to the principal social networks, and a <strong>print</strong> tool that automatically formats the page for the printer.</p>
		</article>
	</div>
	
</section>

<section id="nesting" class="row halves reverse">
	
	<div class="twelve-twelfths-max">
	<div class="column one">
		<article>
		<header><h2>nesting and grouping</h2></header>
		<p>Related articles and images can be nested so that they hang together in groups when the page flexes and folds for mobile. Notice how these nested color blocks hang together if you pull your browser window to a narrow width.</p>
		</article>
	</div>
	<div class="column two row thirds">
		<div class="column one orange-back three-twelfths-tall"></div>
		<div class="column two green-back three-twelfths-tall"></div>
		<div class="column three blue-back three-twelfths-tall"></div>
		<!--<div class="column four yellow-back three-twelfths-tall"></div>-->
	</div>
	</div>
	
</section>

<section id="resolution" class="row sidebar">
	<style>
	
	#resolution .column.two { background: url('http://repo.wsu.edu/spine/1/marks/wsu-signature-vertical.svg') center center no-repeat; background-size: auto;  }
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

<section id="campus-ready" class="row sideleft">
	
	<div class="column one">
		<br>
	</div>
	<div class="column two">
		
		<article>
		<header><h2>campus ready</h2></header>
		<p>Related articles and images can be nested so that they hang together in groups when the page flexes and stacks for mobile: <button data-campus="extension">Extension</button>, <button data-campus="globalcampus">Global Campus</button>, <button data-campus="spokane">Spokane</button>, <button data-campus="tricities">Tri-Cities</button>, <button data-campus="vancouver">Vancouver</button></p>
		</article>
	</div>
	
</section>

<!--<section class="row thirds gutter equalize">
	<div class="column one">
		<article>
		<strong>The skeleton grid eschews padding and margins by default to allow for seamless designs. However, adding a "gutter" class, as in this section, provides gutters for equally spaced column interior content (30px).</strong><hr>
		These columns have also been equalized with the "equalize" class to allow for aligning background images. Were using "border-box" box-sizing on our columns to enable padding without breaking our responsive math.<hr>
		<p>Vestibulum cursus ultricies tellus, sed fermentum mauris mattis vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam condimentum ligula ut dictum scelerisque. Aenean mattis erat ac tortor accumsan, vitae tincidunt dui feugiat. Vestibulum hendrerit metus id justo tristique, a pharetra nibh lobortis. Sed eu dolor nec metus blandit egestas ac at elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ac mollis mauris. Sed aliquet ipsum in dapibus euismod.</p></article>
	</div>
	<div class="column two">
		<article><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dolor neque, scelerisque quis mauris quis, fringilla eleifend est. Phasellus purus leo, commodo sit amet ipsum ac, lacinia auctor nulla. Nam sed nunc fermentum, condimentum ligula sit amet, facilisis urna. Vestibulum pharetra dui turpis, vitae elementum dui gravida in. Quisque ut lectus aliquet, lobortis risus vitae, placerat metus. Duis nisl eros, mattis non fermentum eget, luctus sed tortor. Nunc tempus nulla eget erat ornare, quis mattis turpis tincidunt. Vivamus semper elit at metus consequat, vitae dapibus urna posuere. Nunc iaculis arcu sed ante mollis, vitae varius orci rhoncus. Nullam luctus tristique pretium. Ut tincidunt, velit ullamcorper aliquet molestie, nisl lectus interdum felis, quis blandit nisi tortor non elit. Ut sit amet ipsum consectetur, tempor tellus at, ultrices elit. Sed a mauris enim. Sed vitae odio vestibulum massa vulputate lacinia.</p></article>
	</div>
	<div class="column three">
		<article><p>Nam a dolor diam. Sed bibendum sit amet arcu id vehicula. Duis dictum rhoncus velit vel porttitor. Nullam scelerisque fermentum massa. Proin suscipit facilisis tincidunt. Aenean et tempor augue. Nullam gravida feugiat diam, vel blandit turpis ornare et. Sed sed arcu quis augue ultricies porta id vitae ante. Donec at ante sed mauris mollis rutrum eu sit amet lectus. <hr> .equalize makes columns equally tall... or short</p></article>
	</div>
</section>

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

<section class="row quarters picture-frame">
	<div class="column one"><img src="/wp-content/themes/spine/images/eg/1.png" class="fill-width"></div>
	<div class="column two"><img src="/wp-content/themes/spine/images/eg/2.png" class="fill-width"></div>
	<div class="column three"><img src="/wp-content/themes/spine/images/eg/3.png" class="fill-width"></div>
	<div class="column four"><img src="/wp-content/themes/spine/images/eg/4.png" class="fill-width"></div>
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

<section class="row halves">
	<div class="column one">

	</div>
	<div class="column two row">
		<div class="column four-twelfths"></div>
		<div class="column two-twelfths"></div>
	</div>
</section>

<footer class="local">
	<br>	
</footer>-->

</main><!--/#page-->

<?php get_footer(); ?>
