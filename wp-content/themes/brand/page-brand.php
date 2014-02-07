<?php get_header(); ?>

<script>
$(document).ready(function(){
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // assigning the object
     
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
             
            // Put together our final background position
            var coords = '50% '+ yPos + 'px';
 
            // Move the background
            $bgobj.css({ backgroundPosition: coords });
        }); 
    });    
});

$(document).ready(function(){

/*    var $window = $(window);
    var velocity = 0.4;
    function update() {
    	var pos = $window.scrollTop();
		$('.lax').each(function() {
			var $element = $(this);
			var height = $element.height();
			$(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px'); });
	};
    $window.bind('scroll', update); */

});

</script>

<style>
main {
	padding-bottom: 200px;
}

.large main section,
.xlarge main section {
	xxmin-width: 732px;
	}
main section article {
	xxmargin-top: 300px;
	}
main section figure {
	background-repeat: no-repeat;
	height: 300px;
	}
.size-gt-small main section figure {
	background-position: left top;
	background-size: 100% auto;
	}
.size-small main section figure {
	background-repeat: none;
	background-position: left top;
	background-size: auto 400px;
	}
main .single .column article {
	max-width: 732px;
	xwidth: 732px;
	}
main article {
	position: relative;
	}
main article > h2 {
	font-size: 64px;
	font-weight: 700;
	margin: 0px;
	position: absolute;
	top: -58px;
	color: white;
	xmargin-bottom: -48px;
	}
main section article ul li {
	list-style: none;
	font-size: 2em;
	line-height: 1.5em;
	color: #a6adb0;
	padding: 0px;
	margin: 0px;
	}
.size-gt-small #we-are article ul {
	margin-left: 220px;
	}
.size-gt-small #we-are article ul {
	margin-left: 220px;
	}
.size-gt-small #we-believe article ul {
	text-align: right;
	}
.size-gt-small #we-pursue article ul {
	margin-left: 80px;
	}


</style>

<main>

<section id="we-are" class="row single unbound recto">

<div class="column one row sidebar">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/cougcheek.jpg');">

</figure>

<article>

	<h2>we are</h2>

	<ul>
		<li>inquisitive</li>
		<li>knowledgeable</li>
		<li>enthusiastic</li>
		<li>genuine</li>
		<li>relational</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-1-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column two">
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-believe" class="row single unbound recto">

<div class="column one row sidebar">

<figure style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg');"></figure>

<article>

	<h2>we believe in</h2>

	<ul>
		<li>community</li>
		<li>challenging limits</li>
		<li>advancing knowledge</li>
		<li>making a better world</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-2-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-pursue" class="row single unbound recto">

<div class="column one nested thirds">

<figure class="lax" style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/weexpress.jpg');"></figure>

<article>

	<h2>we pursue</h2>

	<ul>
		<li>world-class faculty</li>
		<li>leading research</li>
		<li>challenging involvement</li>
		<li>premier experience</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column two">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-3-2', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
		<div class="column three">
			
		</div>
	</div><!--/.details-->
	
</article>

</div>

</section>

<section id="we-offer" class="row single unbound recto">

<div class="column one row sidebar">

<figure class="lax" style="background-image: url('/wp-content/themes/brand/images/pages/who-we-are/finally.jpg');"></figure>

<article>

	<h2>we offer</h2>

	<ul>
		<li>undergraduate degrees</li>
		<li>graduate and professional degrees</li>
		<li>groundbreaking research</li>
		<li>preparation to lead wisely</li>
	</ul>
	
	<button class="detail"></button>
	<div class="details">
		<div class="column one">
			<?php 
			$column = get_post_meta( get_the_ID(), 'section-4-1', true );
			if( ! empty( $column ) ) { echo $column; }
			?>
		</div>
	</div><!--/.details-->

</article>

</div>

</section>

<section id="we-promise" class="row single unbound recto">

<div class="column one">

<figure class="crimson-back">

	<!--<img class="fill-width" src="/wp-content/themes/brand/images/pages/who-we-are/eyeshield.jpg">-->

</figure>

<article>

	<h2>we promise</h2>

	<ul>
		<li>if you</li>
		<li>then we have</li>
		<li>for you</li>
	</ul>
	
	<button class="detail"></button>
	<section class="details">
		<?php 
		$section_one_one = get_post_meta( get_the_ID(), 'section-5-1', true );
		if( ! empty( $section_one_one ) ) { echo $section_one_one; }
		?>
	</section>

</article>

</div>

</section>

</main>

<?php get_footer(); ?>