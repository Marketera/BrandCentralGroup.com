<?php
include_once('_includes/global.php');

// <head>
$page['Title'] = '';
$page['Description'] = '';
$page['CustomHead'] = <<<HTML
HTML;

// <body>
$page['BodyClasses'] = array();

Hark::Init();
?>

<div class="layer layer-anchor" id="Introduction" data-selector=".nav-link.home">
	<div class="Slideshow" data-seconds="5">
		<div class="active" style="background-image:url('_template/Default/assets/images/homepage/bubble-gum.jpg')"></div>
		<div style="background-image:url('http://i.imgur.com/uRBtadp.jpg');"></div>
		<div style="background-image:url('http://www.wallpele.com/wp-content/uploads/2014/03/funny-shark-pictures.jpg')"></div>
	</div>
	<div class="row content">
		<div class="small-12 large-offset-1 large-11 columns">
			<h1 class="">
				Brand is at
				<strong>the Center</strong>
				of All We Do.
			</h1>
			<div class="row">
				<p class="small-12 medium-7 large-5 columns">
					We deepened the emotional connection
					between your brand and consumers.
				</p>
			</div>
		</div>
	</div>
	<div class="call-to-action">
		<div class="text-center">
			<a class="large button" href="#Services" onclick="$('.nav-link.Services').click();return false;">Learn More</a>
		</div>
	</div>
</div>

<div class="layer layer-anchor" id="Services">
	<div class="row tabset-holder">
		<div class="active">
			<h2 class="small-12 columns">
				Our Proven
				<strong>Methodology.</strong>
			</h2>
			<p><img src="http://fpoimg.com/600x300"></p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn More</a>
			</p>
		</div>
		<div>
			<h2 class="small-12 columns">
				Our Proven
				<strong>Experience.</strong>
			</h2>
			<p><img src="http://fpoimg.com/600x300"></p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn Even More</a>
			</p>
		</div>
		<div>
			<h2 class="small-12 columns">
				Our Proven
				<strong>Leadership.</strong>
			</h2>
			<p><img src="http://fpoimg.com/600x300"></p>
			<p>
				<a class="large success button activatable-next" href="#Services">Seriously, Learn More</a>
			</p>
		</div>
		<div>
			<h2 class="small-12 columns">
				Our Proven
				<strong>Longevity.</strong>
			</h2>
			<p><img src="http://fpoimg.com/600x300"></p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn a Lot More</a>
			</p>
		</div>
		<div>
			<h2 class="small-12 columns">
				Our Proven
				<strong>Klingon Skills.</strong>
			</h2>
			<p><img src="http://fpoimg.com/600x300"></p>
			<p>
				<a class="large success button activatable-next" href="#Services">Latlh Ghoj</a><br/>
				<small>That's "Learn More" in Klingon</small>
			</p>
		</div>
	</div>
<!--	<div class="call-to-action">-->
<!--		<p class="slide-control">-->
<!--			<a class="activatable-next"><img src="_template/Default/assets/images/homepage/down-large.png" alt="More Services"></a>-->
<!--		</p>-->
<!--	</div>-->
</div>

<div class="layer layer-anchor ambient-slider add-controls" id="CaseStudies">
	<a id="brand-central-difference" href="javascript:alert('I need a place to go!');">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<h2>
					<strong>Brand Central Difference.</strong>
				</h2>
				<div class="row">
					<h3 class="small-12 medium-7 large-7 columns">
						We Bring Big Ideas,
						Innovation and
						Entrepreneurial Thinking
						to Everything We Do.
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-7 large-6 columns">
						Lorem ipsum dolor sit amet, you may consider
						leaving this text out. Less is more.
					</p>
				</div>
				<p>
					<span class="large success button deactivate-slider-spot">Learn More</span>
				</p>
			</div>
		</div>
	</a>
	<a id="brand-central-station" href="javascript:alert('I need a place to go!');">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<h2>
					<strong>Brand Central Station.</strong>
				</h2>
				<div class="row">
					<h3 class="small-12 medium-7 large-5 columns">
						We Bring Big Trains,
						Locomotives and
						The Great West
						into Everything We Do.
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-7 large-6 columns">
						Lorem ipsum dolor sit amet, you may consider
						leaving this text out. Less is more.
					</p>
				</div>
				<p>
					<span class="large success button deactivate-slider-spot">Choo! Choo!</span>
				</p>
			</div>
		</div>
	</a>
</div>


<div class="layer layer-anchor tabset-holder" id="Clients">
	<div class="row">
		<h2 class="small-offset-1 small-11 columns">
			Our Clients.
		</h2>

		<div class="small-offset-1 small-11 columns">
			<dl class="activatable-tabs activatable-carousel">
				<dd class="active"><a href="#food-beverage">Food &amp; Beverage</a></dd>
				<dd><a href="#lifestyle">Lifestyle &amp; Digital</a></dd>
				<dd><a href="#entertainment">Entertainment &amp; Pop Culture</a></dd>
				<dd><a href="#recreation">Outdoor Recreation</a></dd>
			</dl>
		</div>
	</div>
	<div class="customer-sections">
		<section id="food-beverage" class="active">
			<div class="row">
				<div class="small-offset-1 small-10 columns">
					<div class="row">
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/necco.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/the-chew.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/master-chef.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/coleman.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/adio.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/k2sports.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/marker.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/rawlings.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/weil.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/aw.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/canada-dry.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/crush.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="lifestyle">
			<div class="row">
				<div class="small-offset-1 small-10 columns">
					<div class="row">
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/adio.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/k2sports.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/the-chew.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/master-chef.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/coleman.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/marker.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/rawlings.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/weil.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/aw.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/canada-dry.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/crush.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/necco.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="entertainment">
			<div class="row">
				<div class="small-offset-1 small-10 columns">
					<div class="row">
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/master-chef.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/k2sports.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/marker.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/rawlings.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/weil.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/coleman.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/adio.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/aw.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/canada-dry.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/crush.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/necco.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/the-chew.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="recreation">
			<div class="row">
				<div class="small-offset-1 small-10 columns">
					<div class="row">
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/k2sports.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/marker.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/rawlings.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/weil.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/aw.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/canada-dry.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/coleman.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/adio.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/crush.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/necco.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/the-chew.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
						<div class="small-6 medium-4 large-3 columns">
							<img src="_template/Default/assets/images/homepage/clients/master-chef.png"
								 data-tooltip class="has-tip" title="Tooltips are awesome, you should totally use them!">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="layer layer-anchor" id="Contact">
	<div class="row">
		<h2 class="small-12 large-offset-1 large-11 columns">
			Get in Touch.
		</h2>
		<a class="small-12 medium-6 large-offset-1 large-6 columns" href="https://goo.gl/maps/exqo8" target="_blank">
			<img src="_template/Default/assets/images/homepage/map.png">
		</a>
		<div class="small-12 medium-6 large-5 columns">
			<h5>Address</h5>
			<p>
				10508 Santa Monica Blvd<br/>
				Los Angeles, CA 90025
			</p>
			<h5>Phone</h5>
			<p>
				310-268-1231
			</p>
			<h5>Fax</h5>
			<p>
				310-268-1239
			</p>
			<h5>Email</h5>
			<p>
				<a href="mailto:&#105;&#110;&#102;&#111;&#064;&#098;&#114;&#097;&#110;&#100;&#099;&#101;&#110;&#116;&#114;&#097;&#108;&#103;&#114;&#111;&#117;&#112;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#098;&#114;&#097;&#110;&#100;&#099;&#101;&#110;&#116;&#114;&#097;&#108;&#103;&#114;&#111;&#117;&#112;&#046;&#099;&#111;&#109;</a>
			</p>
		</div>
	</div>
</div>


<?php
Hark::Deploy($page);