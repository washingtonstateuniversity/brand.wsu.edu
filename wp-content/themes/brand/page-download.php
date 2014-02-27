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
	font-size: 14px;
	letter-spacing: 0px;
	display: block;
	padding-right: 60px;
	line-height: 1em;
	}
#university h2 small span {
	padding-right: 10px;
	}
	
#campuses h2,
#colleges h2 {
	color: rgba(81,135,143,0.3);
	}
#campuses h2 {
	text-align: right;
	left: 60px;
	top: 20px;
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
	xposition: absolute;
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
	width: 496px;
	padding-left: 18%;
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
	margin-left: 20px;
	margin-bottom: 20px;
	}
	
#colleges dl.downloads {
	padding-top: 60px;
	width: 100%;
	max-width: 100%;
	}

.size-lt-large #colleges dl.downloads {
	padding-top: 100px;
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
			<dd><a href="/wp-content/themes/brand/downloads/university/WSU-Univ-wide_Logos.zip">university wide</a></dd>
		</dl>
		
	</div>
	
</article>

</section>

<section id="campuses" class="row single marginalize gutter wide">

<article class="padless">

	<div class="column one">
		
		<h2>campus</h2>
		
		<dl id="downloads-campuses" class="downloads">
			<dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Spokane_Logos.zip">Spokane</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Tri-Cities_Logos.zip">Tri-Cities</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Vancouver_Logos.zip">Vancounver</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Global-Campus_Logos.zip">Global Campus</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Health-Sciences_Logos.zip">Health Sciences</a></dd>
		    <!--<dd><a href="/wp-content/themes/brand/downloads/campus/WSU-Extension_Logos.zip">Extension</a></dd>-->
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
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-CAHNRS_Logos.zip">CAHNRS</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Arts-Sciences_Logos.zip">Arts & Sciences</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Business_Logos.zip">Business</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Education_Logos.zip">Education</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Communication_Logos.zip">Murrow</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Engr-Arch_Logos.zip">Eng. & Arch.</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Honors-College_Logos.zip">Honors</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Nursing_Logos.zip">Nursing</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-Pharmacy_Logos.zip">Pharmacy</a></dd>
		    <dd><a href="/wp-content/themes/brand/downloads/college/WSU-VetMed_Logos.zip">Veterinary Med.</a></dd>
		</dl>
		
	</div>
	
</article>

</section>

<section id="colleges" class="row single marginalize gutter wide ">

<article class="padless">

	<div class="column one">
		
		<h3 style="display: inline-block; padding-right: 30px;">stationery and business cards </h3>
		<a class="brand-button" href="http://publishing.wsu.edu/onlineorders.html">Order</a>

		
	</div>
	
	
	
</article>

</section>

</main>

<?php get_footer(); ?>