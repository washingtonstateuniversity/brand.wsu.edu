<?php get_header(); ?>

<script>

</script>

<style>
main section:first-of-type .column.one {
	padding-top: 0;
	}
#attributes .column.one {
	padding-top: 0;
	}
.descriptors {
	padding-top: 4em;
	padding-bottom: 4em;
	}
.descriptors dl {
	padding: 15px 0px;
	}
.descriptors dl dt {
	color: #ecedee;
	font-size: 6em;
	letter-spacing: -5px;
	width: 100%;
	text-align: center;
	display: block;
	padding: 10px 0px;
	font-weight: 600;
	}
.descriptors dl dd {
	margin-top: -25px;
	color: #981e32;
	font-style: italic;
	font-size: 1.7em;
	display: block;
	position: absolute;
	width: 100%;
	text-align: center;
	}
.size-lt-medium .descriptors dl dd {
	font-size: 1.3em;
	}
	
.size-gt-small .descriptors dl:nth-of-type(1) dt { text-indent: -160px; }
.size-gt-small .descriptors dl:nth-of-type(2) dt { text-indent: 310px; }
.size-gt-small .descriptors dl:nth-of-type(3) dt { text-indent: -60px; }
.size-gt-small .descriptors dl:nth-of-type(4) dt { text-indent: 85px; }

.size-gt-small .descriptors dl:nth-of-type(1) dd { text-indent: 380px; }
.size-gt-small .descriptors dl:nth-of-type(2) dd { text-indent: -160px; }
.size-gt-small .descriptors dl:nth-of-type(3) dd { text-indent: 410px; }
.size-gt-small .descriptors dl:nth-of-type(4) dd { text-indent: -350px; }

ol li {
	margin-left: 50px;
	padding-left: 0px;
	padding-bottom: 3px;
	}
	
#applying {
	background: #f4f4f5;
	}
.size-gt-small .row.side-right .column.one {
	margin-left: 132px;
	}


</style>

<main>

<?php get_template_part('parts/headers'); ?>

<section class="row single">
	
	<div class="column one">
		
		<dl class="descriptors">
			<dl class="esteemed"><dt>esteemed</dt><dd class="serif">excellent, leading, passionate</dd></dl>
			<dl class="friendly"><dt>friendly</dt><dd class="serif">welcoming, authentic, spirited</dd></dl>
			<dl class="current"><dt>current</dt><dd class="serif">contemporary, leading edge</dd></dl>
			<dl class="simple"><dt>simple</dt><dd class="serif">clear, focused, minimalistic</dd></dl>
		</dl>
		
	</div>
	
</section>


<section id="attributes" class="row side-right marginalize gutter wide">
	
	
	<div class="column one">
	<article>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-2-1', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</article>	
	</div>
	
	
</section>

<section id="applying" class="row side-right unbound recto marginalize gutter wide">
	
	
	<div class="column one">
	<article>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-3-1', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	</article>
	</div>
	
	
</section>



</main>

<?php get_footer(); ?>