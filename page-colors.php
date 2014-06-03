<?php get_header(); ?>

<style>
body {
	background-color: #f9f9f9;
	}
main {
	background-image: none;
	}
.colors .column {
	min-height: 400px;
	}
.column figure {
	display: block;
	}
.colors .column figure {
	float: left;
	}
.controls {
	padding: 30px 0px 30px 0px;
	}
.controls dl {
	padding: 6px 0px 2px 0px;
	font-size: 1.2em;

	}
.controls dl {
	margin-left: 4em;
	}
.controls dl dt {
	width: 100px;
	text-align: right;
	padding-right: 10px;
	}

/* Swatches */
figure.color dl dd {
	height: 50px;
	display: block;
	margin: 0px;
	padding: 0px;
	}
figure.color.invisible {
	display: none;
	}
.unvalued dd.value {
	background-color: transparent;
	}
.unaccented dd.accent {
	display: none;
	}
.accented dd.accent {
	display: block;
	}
dl.secondaries dd:hover,
dl.tertiaries dd:hover,
dl.backgrounds dd:hover {
	cursor: pointer;
	}
dl.secondaries dd.on:hover,
dl.secondaries dd.off,
dl.tertiaries dd.off,
dl.tertiaries dd.on:hover { opacity: 1; }
dl.secondaries dd.off:hover,
dl.tertiaries dd.off:hover { opacity: 1; }

dl.secondaries dd:before,
dl.tertiaries dd:before {
	content: "";
	overflow: hidden;
	border-radius: 10px;
	border-width: 3px;
	border-style: solid;
	border-color: rgba(255,255,255,0.85);
	box-shadow: 1px 0px 0px rgba(94,106,113,0.3), 0px 1px 0px rgba(94,106,113,1), 0px -1px 0px rgba(94,106,113,0.4), -1px 0px 0px rgba(94,106,113,0.4);
	/* outline: 1px solid #b67233; */
	height: 10px;
	width: 10px;
	padding: 0px;
	background: transparent;
	margin-right: 5px;
	display: inline-block;
	margin-bottom: -3px;
	-moz-background-clip: content;
	-webkit-background-clip: content;
	background-clip: content-box; 
	}
dl.secondaries dd.orange-text:before {
	background: #b67233;
	box-shadow: 1px 0px 0px rgba(181,114,51,0.3), 0px 1px 0px rgba(181,114,51,1), 0px -1px 0px rgba(181,114,51,0.4), -1px 0px 0px rgba(181,114,51,0.4);
	}
dl.secondaries dd.green-text:before {
	background: #8f7e35;
	box-shadow: 1px 0px 0px rgba(143,126,53,0.3), 0px 1px 0px rgba(143,126,53,1), 0px -1px 0px rgba(143,126,53,0.4), -1px 0px 0px rgba(143,126,53,0.4);
	}
dl.secondaries dd.blue-text:before {
	background: #4f868e;
	box-shadow: 1px 0px 0px rgba(81,135,143,0.3), 0px 1px 0px rgba(81,135,143,1), 0px -1px 0px rgba(81,135,143,0.4), -1px 0px 0px rgba(81,135,143,0.4);
	}
dl.secondaries dd.yellow-text:before {
	background: #c69214;
	box-shadow: 1px 0px 0px rgba(199,145,20,0.3), 0px 1px 0px rgba(199,145,20,1), 0px -1px 0px rgba(199,145,20,0.4), -1px 0px 0px rgba(199,145,20,0.4);
	}
dl.tertiaries dd.on:before {
	background: #5e6a71;
	}
dl.secondaries dd.off:before,
dl.tertiaries dd.off:before {
	background: white;
	}

dl.backgrounds {
	text-align: right;
	white-space: nowrap;
	position: absolute;
	right: -264px;
	}
dl.backgrounds dt dd{
	float: right;
	}
.bg-clear {
	display: none;
	}
main.gray-darkest-back .bg-clear,
main.gray-back .bg-clear,
main.gray-er-back .bg-clear {
	display: inline-block;
	}
main.gray-darkest-back dd.bg-black {
	display: none;
	}
main.gray-er-back dd.bg-white {
	display: none;
	}
main.gray-back dd.bg-gray {
	display: none;
	}

/* specified */
#secondary-palettes figure {
	width: 25%;
	}

#secondary-palettes figure.color.gray,
#secondary-palettes figure.color.crimson {
	position: absolute;
	z-index: 0;
	width: 51%;
	}
#secondary-palettes figure.color.gray {
	right: 0;
	}
center {
	
	}
	
center figure {
	float: left;
	text-align: left;
	}
center {
	display: block;
	width: 100%;
	height: 100%;
	width: 264px;
	display: block;
	margin: 0px auto;
	}
center .half {
	width: 50%;
	xxmin-width: 50%;
	height: 100%;
	float: left;
	}
.visible-1 center { width: 66px; }
.visible-2 center { width: 132px; }
.visible-3 center { width: 196px; }

#secondary-palettes.visible-1 center figure { width: 100%; }
#secondary-palettes.visible-2 center figure { width: 50%; }
#secondary-palettes.visible-3 center figure { width: 33%; }
#secondary-palettes.visible-4 center figure { width: 25%; }

xcenter .half:last-of-type {
	float: right;
	}
center .half:first-of-type figure {
	float: right;
	}
center {
	background-color: #981e32;
	}
center .half:last-of-type figure {
	float: left;
	}

.size-small #secondary-palettes .crimson-back,
.size-small #secondary-palettes .crimson-back {
	display: none;
	}
.specified .colors .column,
.size-small .colors .column {
	min-height: 1px;
	}
.specified center,
.size-small center,
.size-small center .half,
.specified center .half {
	width: 100%;
	}
.specified #secondary-palettes figure.color,
.size-small #secondary-palettes figure.color {
	float: none;
	width: 100%;
	}
button#switcher::before{
	content: "specs";
	}
.specified button#switcher::before{
	content: "swatches";
	}
.size-small button#switcher {
	display: none;
	padding: 3px 6px;
	}
.specified .row.thirds .halves .column,
.size-small .row.thirds .halves .column {
	width: 100%;
	float: none;
	}
.specified section#palettes .column.one,
.specified section#palettes .column.two,
.specified section#palettes .column.three,
.size-small section#palettes .column.one,
.size-small section#palettes .column.two,
.size-small section#palettes .column.three {
	width: 100%;
	clear: both;
	}
.specified .column.two .column figure.color,
.size-small .column.two .column figure.color {
	width: 100%;
	clear: both;
	float: none;
	height: auto;
	}
.specified figure dl dd,
.size-small figure dl dd {
	height: auto;
	float: none;
	}
dl.specs {
	display: none;
	}
.specified .spot dl.specs,
.specified .valued .value dl.specs,
.specified .accented .accent dl.specs,
.size-small .spot dl.specs,
.size-small .valued .value dl.specs,
.size-small .accented .accent dl.specs,
.size-lt-small .spot dl.specs dd,
.size-lt-small .valued .value dl.specs dd,
.size-lt-small .accented .accent dl.specs dd {
	display: block;
	}
figure.color dl.specs dd {
	font-size: 12px;
	text-transform: uppercase;
	display: inline-block;
	padding: 0px 0px 0px 10px;
	width: 115px;
	white-space: nowrap;
	}
figure.color dl.specs dd.rgb {
	width: 9em;
	}
figure.color dl.specs dd.hex {
	width: 7.5em;
	text-transform: lowercase;
	position: relative;
	}
xxfigure.color dl.specs dd.hex:after {
	pointer-events: none;
	position: absolute;
	bottom: 0;
	right: 0;
	height: 20px;
	width: 100px;
	background: pink;
	z-index: 99164;
	display: block;
	content: "";
	}

figure.color dl.specs.selected dd {
	width: 100%;
	}
figure.color.unvalued.accented dl dd.spot dl:not(.selected),
main:not(.specified) figure.color.valued dl dd.spot,
.valued.unaccented dl dd.spot dl,
.valued.accented dl dd.spot dl { padding-top: 75px; }

dl.specs {
	padding: 5px 0px;
	}
dl.specs.selected,
.accented dd.spot dl.specs.selected {
	padding: 10px 0px;
	}
figure.color dl.specs.selected dd,
.accented dd.spot dl.specs.selected dd {
	padding-top: 5px;
	padding-bottom: 5px;
	}
.rgb::before,
.cmyk::before,
.hex::before,
.tone::before {
	font-weight: bold;
	}	
.rgb::before { content: "RGB "; width: 120px; }
.cmyk::before { content: "CMYK "; width: 140px; }
.hex::before { content: "HEX "; text-transform: uppercase;	}
.tone::before { content: "SPOT "; }
	
figure.color dd dl {
	color: rgba(255,255,255,.4);
	}
figure.color dd:hover dl {
	color: rgba(255,255,255,.7);
	}
figure.color dd[class*="light"] dl,
figure.color dd.accent dl {
	color: rgba(0,0,0,0.3);
	}
figure.color dd[class*="light"]:hover dl {
	color: rgba(0,0,0,0.7);
	}
figure.color dl.specs.selected dd {
	font-size: 4em;
	line-height: .8em;
	display: block;
	color: rgba(255,255,255,.4);
	}
figure.color dd[class*="light"] dl.specs.selected dd {
	color: rgba(0,0,0,0.2);
	}
figure.color dd.crimson-back dl.specs.selected dd,
figure.color dd.crimson-er-back dl.specs.selected dd {
	color: rgba(255,255,255,1);
	}
figure.color.crimson-back dd dl,
figure.color.crimson-back dd:hover dl {
	color: white;
	}
figure.color dl.specs.selected dd::before {
	color: rgba(0,0,0,0.3);
	}
figure.color .gray-darkest-back dl.specs.selected dd::before {
	color: rgba(255,255,255,0.2);
	}
.size-gt-small main:not(.specified) #crimson-palette figure.color dl dd:first-of-type dl.specs.selected dd,
.size-gt-small main:not(.specified) #gray-palette figure.color dl dd:first-of-type dl.specs.selected dd {
	font-size: 2.5em;
	display: block;
	width: auto;
	}
.size-gt-small main:not(.specified) #crimson-palette figure.color dl dd:first-of-type dl.specs.selected dd::before,
.size-gt-small main:not(.specified) #gray-palette figure.color dl dd:first-of-type dl.specs.selected dd::before {
	font-size: .5em;
	display: block;
	padding-top: 15px;
	width: auto;
	}
dd.bg {
	text-align: -9000px;
	overflow: hidden;
	border-radius: 15px;
	border: 1px transparent solid;
	height: 10px;
	width: 10px;
	padding: 0px;
	}
dl.tertiaries dd.bg::before {
	content: "";
	}
dd.bg-white {
	border: 1px black solid;
	}
	
#primary-secondary .column.two {
	padding-top: 100px;
	text-align: center;
	}
	
.color.crimson.highlight {
	transition: background 0.2s ease;
	background: red;
	}
	

</style>

<script>
$(document).ready(function() {

$('.switch').click( function() { $(this).toggleClass('on off'); } );

$('body').click(function() {
	var visible_secondaries = $( "figure.visible" ).length;
	$('#secondary-palettes').removeClass('visible-0 visible-1 visible-2 visible-3 visible-4').addClass('visible-'+visible_secondaries);
	console.log(visible_secondaries);
});

$('dl.specs').click(function() {
	$('.selected').removeClass('selected');
	$(this).not('.selected').toggleClass('selected');
	});
$("dl.specs dd.hex").click(function(e) {
    e.stopPropagation();
	});


/* $('.secondaries .switch.yellow-text').click( function() {
	if ( $('figure.yellow-back').hasClass('visible') ) {
		$('#gray-palette figure').clone().addClass('yellow-gray').appendTo('center');
	} else {
		$('.yellow-gray').remove();
	}
	$('figure.yellow-back').toggleClass('visible invisible');
});

$('.secondaries .switch.blue-text').click( function() {
	if ( $('figure.blue-back').hasClass('visible') ) {
		$('#gray-palette figure').clone().addClass('blue-gray').appendTo('center');
	} else {
		$('.blue-gray').remove();
	}
	$('figure.blue-back').toggleClass('visible invisible');
});

$('.secondaries .switch.orange-text').click( function() {
	if ( $('figure.orange-back').hasClass('visible') ) {
		$('#gray-palette figure').clone().addClass('orange-gray').appendTo('center');
	} else {
		$('.orange-gray').remove();
	}
	$('figure.orange-back').toggleClass('visible invisible');
});

$('.secondaries .switch.green-text').click( function() {
	if ( $('figure.green-back').hasClass('visible') ) {
		$('#gray-palette figure').clone().addClass('green-gray').appendTo('center');
	} else {
		$('.green-gray').remove();
	}
	$('figure.green-back').toggleClass('visible invisible');
}); */


});


</script>

<main>

<?php get_template_part('parts/headers'); ?> 

<section id="" class="row side-right controls equalize">

	<div class="column one">
		
		<dl class="primaries">
			<dt>primary</dt>
			<dd class="crimson-text" onclick="$('.color.crimson').toggleClass('highlight');" style="padding-left: 2px;">crimson</dd><span class="black-text">and</span> 
			<dd class="gray-text" onclick="$('figure.orange-back.visible, figure.green-back.visible, figure.blue-back.visible, figure.yellow-back.visible').toggleClass('visible invisible'); $('figure.color.unvalued').toggleClass('unvalued valued');">gray</dd>
		</dl>
		<dl class="secondaries">
			<dt>secondary</dt>
			<dd class="switch on orange-text" onclick="$('figure.orange-back').toggleClass('visible invisible');" title="show hide orange">orange</dd>
			<dd class="switch on green-text" onclick="$('figure.green-back').toggleClass('visible invisible');" title="show hide green">green</dd>
			<dd class="switch on blue-text" onclick="$('figure.blue-back').toggleClass('visible invisible');" title="show hide blue">blue</dd>
			<dd class="switch on yellow-text" onclick="$('figure.yellow-back').toggleClass('visible invisible');" title="show hide yellow">yellow</dd>
		</dl>
		<dl class="tertiaries">
			<dt></dt>
			<dd class="switch off accents" onclick="$('figure.color').toggleClass('unaccented accented');" title="show hide accents">acc<span class="darkest-text">é</span>nts</dd>
			<dd class="switch off values" onclick="$('figure.color').toggleClass('unvalued valued');" title="show hide values"><span class="darkest-text">v</span><span class="darker-text">a</span><span class="dark-text">l</span><span class="gray-text">u</span><span class="light-text">e</span><span class="lighter-text">s</span></dd>
		</dl>
		<dl class="backgrounds size-gt-medium-only">
			<dt></dt>
			<dd class="bg bg-white gray-er-back" onclick="$('main').removeClass('gray-darkest-back gray-back white-text').addClass('gray-er-back');" title="switch to white background"></dd>
			<dd class="bg bg-black gray-darkest-back" onclick="$('main').removeClass('gray-er-back gray-back white-text').addClass('gray-darkest-back');" title="switch to black background"></dd>
			<dd class="bg bg-gray gray-back" onclick="$('main').removeClass('gray-er-back gray-darkest-back').addClass('gray-back white-text');" title="switch to gray background"></dd>
			<dd class="bg-clear gray-lightly-text" onclick="$('main').removeClass('gray-back gray-er-back gray-darkest-back white-text')" style="position: relative; top: -1px; left: 2	px;" title="switch to default background">x</dd>
			<!--<dd class="switch off gray-text values" onclick="$('main').css('background-color','#981e32');">on crimson</dd>-->
		</dl>
		
	</div>
	
	<div class="column two center guttered wide size-gt-medium-only">
	
		<button id="switcher" class="centered-absolutely" onclick="$('main').toggleClass('specified');"> </button>
	
	</div>
	
</section>

<div class="fluid">

<section id="palettes" class="row thirds unequaled colors">

	<div id="crimson-palette" class="column one unequaled">
	
		<figure class="color crimson crimson-back unvalued unaccented">
		<dl>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back spot"><dl class="specs"><dd class="cmyk">0 100 65 34</dd> <dd class="rgb">152 30 50</dd> <dd class="hex">#981e32</dd> <dd class="tone">201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-er-back accent"><dl class="specs"><dd class="cmyk">0 100 81 4</dd> <dd class="rgb">198 12 48</dd> <dd class="hex">#c60c30</dd> <dd class="tone">186</dd></dl></dd>
		</dl>
		</figure>
	
	</div>
	
	<div id="secondary-palettes" class="column two unequaled">
	
	<figure class="color crimson crimson-back unvalued unaccented underling">
		<dl>
			<dd class="crimson-back"> </dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back spot"><dl class="specs"><dd class="cmyk">0 100 65 34</dd> <dd class="rgb">152 30 50</dd> <dd class="hex">#981e32</dd> <dd class="tone">201</dd></dl></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-back"></dd>
			<dd class="crimson-er-back accent"><dl class="specs"><dd class="cmyk">0 100 81 4</dd> <dd class="rgb">198 12 48</dd> <dd class="hex">#c60c30</dd> <dd class="tone">186</dd></dl></dd>
		</dl>
		</figure>
		
	<figure class="color spectrum gray gray-back unvalued unaccented underling">
		<dl> 
			<dd class="gray-lightest-back value"><dl class="specs"><dd class="cmyk">1 0 0 3</dd> <dd class="rgb">239 240 241</dd> <dd class="hex">#eff0f1</dd> <dd class="tone">5% 431</dd></dl></dd>
			<dd class="gray-lightly-back value"><dl class="specs"><dd class="cmyk">2 0 0 10</dd> <dd class="rgb">215 218 219</dd> <dd class="hex">#d7dadb</dd> <dd class="tone">15% 431</dd></dl></dd>
			<dd class="gray-lighter-back value"><dl class="specs"><dd class="cmyk">4 0 0 26</dd> <dd class="rgb">181 186 190</dd> <dd class="hex">#b5babe</dd> <dd class="tone">40% 431</dd></dl></dd>
			<dd class="gray-light-back value"><dl class="specs"><dd class="cmyk">8 0 0 45</dd> <dd class="rgb">141 149 154</dd> <dd class="hex">#8d959a</dd> <dd class="tone">70% 431</dd></dl></dd>
			<dd class="gray-gray-back spot"><dl class="specs"><dd class="cmyk">11 0 0 65</dd> <dd class="rgb">94 106 113</dd> <dd class="hex">#5e6a71</dd> <dd class="tone">431</dd></dl></dd>
			<dd class="gray-dark-back value"><dl class="specs"><dd class="cmyk">27 18 17 72</dd> <dd class="rgb">70 78 84</dd> <dd class="hex">#464e54</dd> <dd class="tone">431+26%k</dd></dl></dd>
			<dd class="gray-darker-back value"><dl class="specs"><dd class="cmyk">46 37 37 79</dd> <dd class="rgb">42 48 51</dd> <dd class="hex">#2a3033</dd> <dd class="tone">431+55%k</dd></dl></dd>
			<dd class="gray-darkest-back value"><dl class="specs"><dd class="cmyk">0 0 0 100</dd> <dd class="rgb">0 0 0</dd> <dd class="hex">#000</dd> <dd class="tone">100% blk</dd></dl></dd>
			<dd class="gray-er-back accent"><dl class="specs"><dd class="cmyk">0 0 0 0</dd> <dd class="rgb">255 255 255</dd> <dd class="hex">#fff</dd> <dd class="tone">white</dd></dl></dd>
		</dl>
	</figure>
	
	<center>
	
	
			
		<figure class="color spectrum green green-back visible unvalued unaccented">
			<dl>
				<dd class="green-lightest-back value"><dl class="specs"><dd class="cmyk">1 1 4 2</dd> <dd class="rgb">244 242 235</dd> <dd class="hex">#f4f2eb</dd> <dd class="tone">5% 7768</dd></dl></dd>
				<dd class="green-lightly-back value"><dl class="specs"><dd class="cmyk">2 3 12 7</dd> <dd class="rgb">227 223 205</dd> <dd class="hex">#e3dfcd</dd> <dd class="tone">15% 7768</dd></dl></dd>
				<dd class="green-lighter-back value"><dl class="specs"><dd class="cmyk">6 7 33 18</dd> <dd class="rgb">203 196 162</dd> <dd class="hex">#cbc4a2</dd> <dd class="tone">40% 7768</dd></dl></dd>
				<dd class="green-light-back value"><dl class="specs"><dd class="cmyk">11 13 57 31</dd> <dd class="rgb">175 163 112</dd> <dd class="hex">#afa370</dd> <dd class="tone">70% 7768</dd></dl></dd>
				<dd class="green-green-back spot"><dl class="specs"><dd class="cmyk">15 19 82 45</dd> <dd class="rgb">143 126 53</dd> <dd class="hex">#8f7e35</dd> <dd class="tone">7768</dd></dl></dd>
				<dd class="green-dark-back value"><dl class="specs"><dd class="cmyk">21 24 80 50</dd> <dd class="rgb">114 101 42</dd> <dd class="hex">#72652a</dd> <dd class="tone">7768+10%K</dd></dl></dd>
				<dd class="green-darker-back value"><dl class="specs"><dd class="cmyk">33 34 77 59</dd> <dd class="rgb">86 76 32</dd> <dd class="hex">#564c20</dd> <dd class="tone">7768+30%K</dd></dl></dd>
				<dd class="green-darkest-back value"><dl class="specs"><dd class="cmyk">45 44 74 68</dd> <dd class="rgb">57 50 21</dd> <dd class="hex">#393215</dd> <dd class="tone">7768+50%K</dd></dl></dd>
				<dd class="green-er-back accent"><dl class="specs"><dd class="cmyk">14 6 100 24</dd> <dd class="rgb">173 164 0</dd> <dd class="hex">#ada400</dd> <dd class="tone">398</dd></dl></dd>
			</dl>
		</figure>
		<figure class="color spectrum orange orange-back visible unvalued unaccented">
			<dl> 
				<dd class="orange-lightest-back value"><dl class="specs"><dd class="cmyk">0 2 5 2</dd> <dd class="rgb">248 241 235</dd> <dd class="hex">#f8f1eb</dd> <dd class="tone">5% 7572</dd></dl></dd>
				<dd class="orange-lightly-back value"><dl class="specs"><dd class="cmyk">0 7 14 5</dd> <dd class="rgb">237 220 204</dd> <dd class="hex">#eddccc</dd> <dd class="tone">15% 7572</dd></dl></dd>
				<dd class="orange-lighter-back value"><dl class="specs"><dd class="cmyk">0 20 37 13</dd> <dd class="rgb">221 190 161</dd> <dd class="hex">#ddbea1</dd> <dd class="tone">40% 7572</dd></dl></dd>
				<dd class="orange-light-back value"><dl class="specs"><dd class="cmyk">0 35 65 22</dd> <dd class="rgb">203 155 110</dd> <dd class="hex">#cb9b6e</dd> <dd class="tone">70% 7572</dd></dl></dd>
				<dd class="orange-orange-back spot"><dl class="specs"><dd class="cmyk">0 50 93 32</dd> <dd class="rgb">182 114 51</dd> <dd class="hex">#b67233</dd> <dd class="tone">7572</dd></dl></dd>
				<dd class="orange-dark-back value"><dl class="specs"><dd class="cmyk">7 52 90 38</dd> <dd class="rgb">146 91 41</dd> <dd class="hex">#925b29</dd> <dd class="tone">7572+10%K</dd></dl></dd>
				<dd class="orange-darker-back value"><dl class="specs"><dd class="cmyk">23 55 85 50</dd> <dd class="rgb">109 68 31</dd> <dd class="hex">#6d441f</dd> <dd class="tone">7572+30%K</dd></dl></dd>
				<dd class="orange-darkest-back value"><dl class="specs"><dd class="cmyk">38 59 80 61</dd> <dd class="rgb">73 46 20</dd> <dd class="hex">#492e14</dd> <dd class="tone">7572+50%K</dd></dl></dd>
				<dd class="orange-er-back accent"><dl class="specs"><dd class="cmyk">2 58 96 10</dd> <dd class="rgb">211 130 53</dd> <dd class="hex">#d38235</dd> <dd class="tone">7412</dd></dl></dd>
			</dl>
		</figure>
		
		
		<figure class="color spectrum blue blue-back visible unvalued unaccented">
			<dl>     
				<dd class="blue-lightest-back value"><dl class="specs"><dd class="cmyk">3 1 1 2</dd> <dd class="rgb">237 243 244</dd> <dd class="hex">#edf3f4</dd> <dd class="tone">5% 5483</dd></dl></dd>
				<dd class="blue-lightly-back value"><dl class="specs"><dd class="cmyk">10 2 4 4</dd> <dd class="rgb">211 225 227</dd> <dd class="hex">#d3e1e3</dd> <dd class="tone">15% 5483</dd></dl></dd>
				<dd class="blue-lighter-back value"><dl class="specs"><dd class="cmyk">26 4 10 11</dd> <dd class="rgb">174 199 203</dd> <dd class="hex">#aec7cb</dd> <dd class="tone">40% 5483</dd></dl></dd>
				<dd class="blue-light-back value"><dl class="specs"><dd class="cmyk">45 8 18 19</dd> <dd class="rgb">130 169 175</dd> <dd class="hex">#82a9af</dd> <dd class="tone">70% 5483</dd></dl></dd>
				<dd class="blue-blue-back spot"><dl class="specs"><dd class="cmyk">65 11 25 27</dd> <dd class="rgb">79 134 142</dd> <dd class="hex">#4f868e</dd> <dd class="tone">5483</dd></dl></dd>
				<dd class="blue-dark-back value"><dl class="specs"><dd class="cmyk">66 17 29 33</dd> <dd class="rgb">63 107 114</dd> <dd class="hex">#3f6b72</dd> <dd class="tone">5483+10%K</dd></dl></dd>
				<dd class="blue-darker-back value"><dl class="specs"><dd class="cmyk">68 28 38 46</dd> <dd class="rgb">47 80 85</dd> <dd class="hex">#2f5055</dd> <dd class="tone">5483+30%K</dd></dl></dd>
				<dd class="blue-darkest-back value"><dl class="specs"><dd class="cmyk">70 40 46 59</dd> <dd class="rgb">32 54 57</dd> <dd class="hex">#203639</dd> <dd class="tone">5483+50%K</dd></dl></dd>
				<dd class="blue-er-back accent"><dl class="specs"><dd class="cmyk">92 0 34 0</dd> <dd class="rgb">0 165 189</dd> <dd class="hex">#00a5bd</dd> <dd class="tone">2228</dd></dl></dd>
			</dl>
		</figure>		
		<figure class="color spectrum yellow yellow-back visible unvalued unaccented">
			<dl>    
				<dd class="yellow-lightest-back value"><dl class="specs"><dd class="cmyk">1 2 5 1</dd> <dd class="rgb">249 244 231</dd> <dd class="hex">#f9f4e7</dd> <dd class="tone">5% 1245</dd></dl></dd>
				<dd class="yellow-lightly-back value"><dl class="specs"><dd class="cmyk">1 5 15 3</dd> <dd class="rgb">241 228 196</dd> <dd class="hex">#f1e4c4</dd> <dd class="tone">15% 1245</dd></dl></dd>
				<dd class="yellow-lighter-back value"><dl class="specs"><dd class="cmyk">2 14 39 7</dd> <dd class="rgb">229 205 147</dd> <dd class="hex">#e5cd93</dd> <dd class="tone">40% 1245</dd></dl></dd>
				<dd class="yellow-light-back value"><dl class="specs"><dd class="cmyk">4 24 69 13</dd> <dd class="rgb">215 178 88</dd> <dd class="hex">#d7b258</dd> <dd class="tone">70% 1245</dd></dl></dd>
				<dd class="yellow-yellow-back spot"><dl class="specs"><dd class="cmyk">6 35 99 18</dd> <dd class="rgb">198 146 20</dd> <dd class="hex">#c69214</dd> <dd class="tone">1245</dd></dl></dd>
				<dd class="yellow-dark-back value"><dl class="specs"><dd class="cmyk">11 38 96 25</dd> <dd class="rgb">158 117 16</dd> <dd class="hex">#9e7510</dd> <dd class="tone">1245+10%K</dd></dl></dd>
				<dd class="yellow-darker-back value"><dl class="specs"><dd class="cmyk">25 45 90 40</dd> <dd class="rgb">119 88 12</dd> <dd class="hex">#77580c</dd> <dd class="tone">1245+30%K</dd></dl></dd>
				<dd class="yellow-darkest-back value"><dl class="specs"><dd class="cmyk">40 51 83 54</dd> <dd class="rgb">79 58 8</dd> <dd class="hex">#4f3a08</dd> <dd class="tone">1245+50%K</dd></dl></dd>
				<dd class="yellow-er-back accent"><dl class="specs"><dd class="cmyk">0 31 98 0</dd> <dd class="rgb">255 184 28</dd> <dd class="hex">#ffb81c</dd> <dd class="tone">1235</dd></dl></dd>
			</dl>
		</figure>
		
	</center>
		
	</div>
	
	<div id="gray-palette" class="column three">
	
		<figure class="color spectrum gray gray-back unvalued unaccented">
			<dl> 
				<dd class="gray-lightest-back value"><dl class="specs"><dd class="cmyk">1 0 0 3</dd> <dd class="rgb">239 240 241</dd> <dd class="hex">#eff0f1</dd> <dd class="tone">5% 431</dd></dl></dd>
				<dd class="gray-lightly-back value"><dl class="specs"><dd class="cmyk">2 0 0 10</dd> <dd class="rgb">215 218 219</dd> <dd class="hex">#d7dadb</dd> <dd class="tone">15% 431</dd></dl></dd>
				<dd class="gray-lighter-back value"><dl class="specs"><dd class="cmyk">4 0 0 26</dd> <dd class="rgb">181 186 190</dd> <dd class="hex">#b5babe</dd> <dd class="tone">40% 431</dd></dl></dd>
				<dd class="gray-light-back value"><dl class="specs"><dd class="cmyk">8 0 0 45</dd> <dd class="rgb">141 149 154</dd> <dd class="hex">#8d959a</dd> <dd class="tone">70% 431</dd></dl></dd>
				<dd class="gray-gray-back spot"><dl class="specs"><dd class="cmyk">11 0 0 65</dd> <dd class="rgb">94 106 113</dd> <dd class="hex">#5e6a71</dd> <dd class="tone">431</dd></dl></dd>
				<dd class="gray-dark-back value"><dl class="specs"><dd class="cmyk">27 18 17 72</dd> <dd class="rgb">70 78 84</dd> <dd class="hex">#464e54</dd> <dd class="tone">431+26%k</dd></dl></dd>
				<dd class="gray-darker-back value"><dl class="specs"><dd class="cmyk">46 37 37 79</dd> <dd class="rgb">42 48 51</dd> <dd class="hex">#2a3033</dd> <dd class="tone">431+55%k</dd></dl></dd>
				<dd class="gray-darkest-back value"><dl class="specs"><dd class="cmyk">0 0 0 100</dd> <dd class="rgb">0 0 0</dd> <dd class="hex">#000</dd> <dd class="tone">100% blk</dd></dl></dd>
				<dd class="gray-er-back accent"><dl class="specs"><dd class="cmyk">0 0 0 0</dd> <dd class="rgb">255 255 255</dd> <dd class="hex">#fff</dd> <dd class="tone">white</dd></dl></dd>
			</dl>
		</figure>

	</div>

</section>

</div>

<section id="primary-secondary" class="row side-right marginalize gutter wide">
	
	<div class="column one">
		
		<article>
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-1', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
		</article>
		
	</div>
	
	<div class="column two">
	
		<?php 
		$column = get_post_meta( get_the_ID(), 'section-1-2', true );
		if( ! empty( $column ) ) { echo wp_kses_post( $column ); }
		?>
	
	</div>
	
</section>

</main>

<?php get_footer(); ?>