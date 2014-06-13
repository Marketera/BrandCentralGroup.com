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

<div class="layer layer-anchor ambient-slider add-controls" id="CaseStudies" data-selector=".nav-link.home">
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/01-cupcake-club-monoco.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: Cupcakes and Cashmere
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We create winning collaborations that generate national publicity.</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						We negotiated an exclusive fashion collection with retailer Club Monaco and popular blog Cupcakes and Cashmere.
					</p>
				</div>
				<p class="small-only-text-center">
					<a href="javascript:alert('I need a place to go!');" class="large success button deactivate-slider-spot">Watch the Video</a>
				</p>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/02-e-news-store.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: E! Entertainment Network
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We bring big ideas and entrepreneurial thinking to everything we do.</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						Secured 10 year partnership with Hudson News for E! News branded airport stores.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/03-wrigley-gum.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: Dr Pepper Snapple Group
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We create powerful partnerships with world class brands</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						We extended iconic soda flavors into a co-branded gum product line with Wrigley.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/04-cronut.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: The Cronut by Dominque Ansel
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>Central means we are in the know</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						Whether its viral phenomenon Cronut or toy craze Rainbow Loom, we build the biggest brands in pop culture.
					</p>
				</div>
				<p class="small-only-text-center">
					<a href="javascript:alert('I need a place to go!');" class="large success button deactivate-slider-spot">Watch the Cronut Phenomenon</a>
				</p>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/05-k2.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: K2 Sports
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We bring U.S. Brands to Global Markets</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						We created a direct to retail partnership between global ski powerhouse K2 Sports and South American retailer Falabela to create dedicated retail shops.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/06-5th-grader.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: Mark Burnett Productions
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We know speed to market.</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						In under 18 months, we generated over $80MM in retail sales for hit show “Are you Smarter Than a Fifth Grader?”
					</p>
				</div>
				<p class="small-only-text-center">
					<a href="javascript:alert('I need a place to go!');" class="large success button deactivate-slider-spot">Hasbro commercial</a>
				</p>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/07-target.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: Target Corporation
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We help retailers discover the next big thing</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						We are pop culture consultants for the retailer identifying emerging trends for their marketing and buying teams
					</p>
				</div>
			</div>
		</div>
	</section>
	<section style="background-image:url('_template/Default/assets/images/homepage/case-studies/08-andrew-weil.jpg')">
		<div class="row">
			<div class="small-offset-1 small-10 columns">
				<div class="row">
					<h4 class="small-12 medium-10 large-7 columns">
						Client: Andrew Weil, M.D.
					</h4>
				</div>
				<div class="row">
					<h3 class="small-12 medium-10 large-7 columns">
						<strong>We go beyond traditional licensing to create innovative brand partnerships</strong>
					</h3>
				</div>
				<div class="row">
					<p class="small-12 medium-10 large-7 columns">
						We brought Dr. Andrew Weil to Simmons Mattress to leverage his medical authority in a new healthy mattress collection.
					</p>
				</div>
				<p class="small-only-text-center">
					<a href="javascript:alert('I need a place to go!');" class="large success button deactivate-slider-spot">Watch the Commercial</a>
				</p>
			</div>
		</div>
	</section>
</div>

<!--div class="layer layer-anchor" id="Introduction" data-selector=".nav-link.home">
	<div class="Slideshow" data-seconds="5">
		<div class="active" style="background-image:url('_template/Default/assets/images/homepage/hero-01-hubba-bubba.jpg')"></div>
		<div style="background-image:url('_template/Default/assets/images/homepage/hero-02-snapple.jpg')"></div>
		<div style="background-image:url('_template/Default/assets/images/homepage/hero-03-fifth-grader.jpg')"></div>
		<div style="background-image:url('_template/Default/assets/images/homepage/hero-04-e-entertainment.jpg')"></div>
		<div style="background-image:url('_template/Default/assets/images/homepage/hero-05-pulp-fiction.jpg')"></div>
	</div>
	<div class="row content">
		<div class="small-12 large-offset-1 large-11 columns">
			<h1 class="" stlye="display: inline">
				<strong style="display: inline">Brand</strong> is at <br>the <strong style="display: inline">center</strong> <br>of what we do.
			</h1>
			<div class="row">
				<p class="small-12 medium-7 large-5 columns">
					We deepen the emotional connection between your brand and consumers.
				</p>
			</div>
		</div>
	</div>
	<div class="call-to-action">
		<div class="text-center">
			<a class="large button" href="#Services" onclick="$('.nav-link.Services').click();return false;">Learn More</a>
		</div>
	</div>
</div-->

<div class="layer layer-anchor" id="Services">
	<div class="row tabset-holder">
		<div class="active">
			<div class="row">
				<h2 class="small-12 large-push-2 large-8 columns">
					We have a proven <strong>Methodology</strong>
				</h2>
			</div>
			<p>
				<img src="_template/Default/assets/images/homepage/methodology.png">
			</p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn More</a>
			</p>
		</div>
		<div>
			<div class="row">
				<h2 class="small-12 large-push-2 large-8 columns">
					We <strong style="display: inline">operate</strong> in the<br> entire licensing <br><strong style="display: inline">value chain</strong>
				</h2>
			</div>
			<p>
				<img src="_template/Default/assets/images/homepage/value-chain.png">
			</p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn More</a>
			</p>
		</div>
		
		<div>
			<div class="row">
				<h2 class="small-12 large-push-2 large-8 columns">
					We are <strong style="display: inline">Hands on</strong>
				</h2>
			</div>
			<p>
				<img src="_template/Default/assets/images/homepage/hands-on.png">
			</p>
			<p>
				<a class="large success button activatable-next" href="#Services">Learn More</a>
			</p>
		</div>

		
		<div>
			<div class="row">
				<h2 class="small-12 large-push-2 large-8 columns">
					Named top <strong style="display: inline">10 best</strong> licensing agencies <br>by licensing <br>magazine the past <br><strong style="display: inline">4 consecutive years</strong>
				</h2>
			</div>
			<p>
				<a class="large success button activatable-next" href="#Services">See Our Case Studies</a>
			</p>
		</div>
	</div>
</div>

<div class="layer layer-anchor tabset-holder" id="Clients">
	<div class="row">
		<h2 class="small-offset-1 small-11 columns">
			World Class Brands.
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

		<div class="clear"></div>

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