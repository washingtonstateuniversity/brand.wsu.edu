<?php get_header(); ?>

<script>
	

</script>

<style>

main section:nth-of-type(odd) {
	background-color: #f4f4f5;
	}
main section {
	min-height: 300px;
	position: relative;
	}
main section h2 {
	font-size: 90px;
	line-height: 90px;
	position: absolute;
	z-index: 0;
	letter-spacing: -5px;
	padding: 0px;
	margin: 0px;
	pointer-events: none;
	}
#university {
	background: #f4f4f5 url('/wp-content/themes/brand/images/pages/misc/downarrow.png') left -25px no-repeat;
	}
#university h2 {
	color: #981e32;
	right: 0;
	text-align: right;
	padding-right: 20px;
	}

#university h2 small {
	font-size: 12px;
	letter-spacing: 0px;
	display: block;
	padding-right: 40px;
	line-height: 1em;
	}
#university h2 small span {
	padding-right: 7px;
	}
	
#campuses h2,
#colleges h2 {
	color: rgba(81,135,143,0.3);
	}
#campuses h2 {
	text-align: right;
	left: 60px;
	top: 130px;
	}
.size-lt-large #campuses h2 {
	top: 35px;
	}
#colleges h2 {
	right: 20px;
	top: 20px;
	}
	
#university dl.downloads {
	padding-top: 90px;
	padding-left: 35%;
	}
.size-lt-large #university dl.downloads {
	padding-top: 135px;
	}
.size-gt-small #university dl.downloads {
	width: 100%;
	text-align: center;
	left: 240px;
	top: 95px;
	}
dl.downloads {
	z-index: 100;
	xxposition: absolute;
	}
dl.downloads dd,
dl.downloads dd:nth-of-type(1n+1) {
	xmax-width: 150px;
	float: left;
	margin: 0px;
	clear: none !important;
	width: 9em;
	text-align: center;
	padding: 0px;
	}
dl.downloads dd a,
dl.downloads dd:only-of-type a {
	display: block;
	width: auto;
	
	}
#campuses dl.downloads {
	xwidth: 396px;
	xpadding-left: 12%;
	padding-top: 65px;
	text-align: right;
	}
.size-lt-medium #campuses dl.downloads {
	width: 100%;
	padding-left: 0%;
	padding-top: 100px;
	}
#campuses dl.downloads dd {
	float: none;
	margin-left: 15px;
	margin-bottom: 20px;
	}
	
#colleges dl.downloads {
	padding-top: 60px;
	padding-left: 50px;
	padding-right: 0px;
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	}

.size-lt-large #colleges dl.downloads {
	padding-top: 100px;
	padding-left: 0px;
	}

#colleges dl.downloads dd {
	float: left;
	margin-right: 20px;
	margin-bottom: 20px;
	}


</style>

<main>

<?php get_template_part('parts/headers'); ?>


<section id="university" class="row single marginalize gutter wide">

<article class="padless">

	<div class="column one">
		
		<h2>university <small> <span>signatures</span> <span>shield</span> <span>social media badges</span></small></h2>
		
		<dl class="downloads">
			<dd><a href="/wp-content/themes/brand/downloads/university/WSU-Univ-wide_Logos.zip" title="download university wide logos">university wide</a></dd>
		</dl>
		
	</div>
	
	<br class="clearfix">
	
</article>

</section>

<section id="campuses" class="row single marginalize gutter wide">

<article class="padless">

	<div class="column one">
		
		
		<h2>campus</h2>
		<dl id="downloads-campuses" class="downloads">
			<dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Spokane_Logos.zip" title="download Spokane logos">Spokane</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Tri-Cities_Logos.zip" title="download Tri-Cities logos">Tri-Cities</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Vancouver_Logos.zip" title="download Vancouver logos">Vancouver</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Global-Campus_Logos.zip" title="download Global Campus logos">Global Campus</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Extension_Logos.zip">Extension</a></dd>
		</dl>
		
		
	</div>
	
	<br class="clearfix">
	
</article>

</section>



<section id="colleges" class="row single marginalize gutter wide clearfix">

<article class="padless">

	<div class="column one clearfix">
		
		<h2>college</h2>
			
		<dl id="downloads-colleges" class="downloads clearfix">
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-CAHNRS_Logos.zip" title="download CAHNRS logos">CAHNRS</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Arts-Sciences_Logos.zip" title="download Arts & Sciences logos">Arts & Sciences</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Business_Logos.zip" title="download Business logos">Business</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Education_Logos.zip" title="download Education logos">Education</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Medical-Sciences_Logos.zip" title="download Medical Sciences logos">Medical Sciences</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Communication_Logos.zip" title="download Murrow logos">Murrow</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Engr-Arch_Logos.zip" title="download Eng. & Arch. logos">Eng. & Arch.</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Honors-College_Logos.zip" title="download Honors logos">Honors</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Nursing_Logos.zip" title="download Nursing logos">Nursing</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Pharmacy_Logos.zip" title="download Pharmacy logos">Pharmacy</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-VetMed_Logos.zip" title="download Veterinary Med. logos">Veterinary Med.</a></dd>
		</dl>
		
	</div>
	
</article>

</section>

<section id="colleges" class="row single marginalize gutter wide ">

<article class="padless">

	<div class="column one">
		
		<h3 style="display: inline-block; padding-right: 30px;">stationery and business cards </h3>
		<a class="brand-button" href="http://publishing.wsu.edu/onlineorders.html" title="order stationery and business cards">Order</a>

		
	</div>
	
	
	
</article>

</section>

</main>

<?php get_footer(); ?>