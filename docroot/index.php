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
			<h2 class="small-12 columns">
				We have a proven <strong>Methodology</strong>
			</h2>
			<p><img src="_template/Default/assets/images/homepage/methodology.png"></p>
			<p>
				<a class="large success button activatable-next" style="top:-60px" href="#Services">Learn More</a>
			</p>
		</div>
		<div>
			<h2 class="small-12 columns" style="top: -100px">
				We <strong style="display: inline">operate</strong> in the<br> entire licensing <br><strong style="display: inline">value chain</strong>
			</h2>
			<p><img src="_template/Default/assets/images/homepage/value-chain.png" style="margin-top:-140px"></p>
			<p>
				<a class="large success button activatable-next" style="top:-100px" href="#Services">Learn More</a>
			</p>
		</div>
		
		<div>
			<h2 class="small-12 columns" style="top:-40px">
				We are <strong style="display: inline">Hands on</strong> 
			</h2><p><img src="_template/Default/assets/images/homepage/hands-on.png" style="margin-top:-40px"></p>
			
				<a class="large success button activatable-next" style="top:20px" href="#Services">Learn More</a>
			</p>
		</div>

		
		<div>
			<h2 class="small-12 columns">
				Named top <strong style="display: inline">10 best</strong> licensing agencies <br>by licensing <br>magazine the past <br><strong style="display: inline">4 consecutive years</strong>
			</h2>
			
				<a class="large success button activatable-next" href="#Services">See our case studies</a>
			</p>
		</div>
	</div>
<!--	<div class="call-to-action">-->
<!--		<p class="slide-control">-->
<!--			<a class="activatable-next"><img src="_template/Default/assets/images/homepage/down-large.png" alt="More Services"></a>-->
<!--		</p>-->
<!--	</div>-->
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

		<div class="clear"></div>

	</div>
</div>

<div class="layer layer-anchor" id="Team">
	<div class="row">
		<div class="small-offset-1 small-10 columns">
			<section class="row">
				<aside class="small-12 large-5 columns">
					<img src="_template/Default/assets/images/team/ross.jpg"/>
				</aside>
				<div class="small-12 large-7 columns">
					<header>
						<strong>Ross Misher</strong>
						CEO
					</header>
					<p>
						Ross is an accomplished industry veteran with expertise in brand extension and creation, innovative partnerships, property acquisitions, and retail development.
					</p>
					<p>
						Ross began his career at the William Morris Agency. Thereafter, he spent 8 years in licensing serving as Licensing Director at the Marvel Entertainment Group and then Walt Disney Consumer Products.  Next, Ross was one of the founding employees at WeddingChannel.com, the Internet’s leading wedding website.
					</p>
					<p>
						In 2001, Ross founded Brand Central LLC and serves as CEO. Ross has been named one of the licensing industry’s 40 leaders of tomorrow and is an active member of the licensing industry’s association where he served on the  West Coast board. 
					</p>
				</div>
			</section>
			<section class="row">
				<aside class="small-12 large-5 large-push-7 columns">
					<img src="_template/Default/assets/images/team/rebekah.jpg"/>
				</aside>
				<div class="small-12 large-7 large-pull-5 columns">
					<header>
						<strong>Rebekah Belzer</strong>
						Vice President
					</header>
					<p>
						As Vice President of Licensing at Brand Central, Rebekah is responsible for developing and implementing brand extension strategies with a focus on business development, client management and marketing. Rebekah Belzer was formerly the Director of Licensing at Saban Brands building new strategic partnerships in the apparel and soft lines categories for brands such as Paul Frank and Power Rangers.  Prior to joining Saban Brands, Rebekah spent seven years at Disney Consumer Products launching popular brands such as Hannah Montana and High School Musical. Rebekah also previously worked for top retailers including The Gap, Gymboree and The Disney Store.
					</p>
				</div>
			</section>
			<section class="row">
				<aside class="small-12 large-5 columns">
					<img src="_template/Default/assets/images/team/jennifer.jpg"/>
				</aside>
				<div class="small-12 large-7 columns">
					<header>
						<strong>Jennifer Campbell</strong>
						Vice President
					</header>
					<p>
						With an extensive background in licensing, retail, and consumer products, Jennifer has a proven track record of consistently growing licensing programs across multiple categories and demographics with new and evergreen brands. 
					</p>
					<p>
						Jennifer recently led the licensing team for Hello Kitty (Sanrio brands). During her 5 year tenure at Sanrio growing the Hello Kitty business 200% during the time she led the licensing program at Sanrio.
					</p>
					<p>
						Prior to Sanrio, Jennifer spent ten years working in licensing and brand management for NASCAR through various positions including Mattel and The Upper Deck Company. Jennifer leads the agency’s office in North Carolina.
					</p>
				</div>
			</section>
			<section class="row">
				<aside class="small-12 large-5 large-push-7 columns">
					<img src="_template/Default/assets/images/team/jodi.jpg"/>
				</aside>
				<div class="small-12 large-7 large-pull-5 columns">
					<header>
						<strong>Jodi Bogdanoff</strong>
						Director
					</header>
					<p>
						Jodi Bogdanoff has over a decade of experience in licensing, brand development and marketing. As Licensing Director at Brand Central, Jodi is responsible for client management, new business acquisitions, and strategic sales initiatives as she leads the company’s east coast operations. 
					</p>
					<p>
						Jodi joined the Brand Central team with experience managing major licensing programs for brands such as Teenage Mutant Ninja Turtles, Spiderman and Justin Bieber. She has worked on numerous retail programs and has expertise across many merchandise categories. Before joining Brand Central, Jodi worked at Bravado Music Group, Marvel Entertainment and 4Kids Entertainment.
					</p>
				</div>
			</section>
			<section class="row">
				<aside class="small-12 large-5 large-push-7 columns">
					<img src="_template/Default/assets/images/team/megan.jpg"/>
				</aside>
				<div class="small-12 large-7 large-pull-5 columns">
					<header>
						<strong>Megan Orecchia</strong>
						Marketing and Creative Services
					</header>
					<p>
						Megan leads marketing and creative services department at Brand Central.  Megan and her team are responsible for building brand strategies, creating marketing and sales collateral, innovating new product concepts and handling all product approvals for our partners.  The team also is responsible for the Brand Central’s trend consulting clients including Target Stores. Megan joined the Brand Central team from Creative Artists Agency (CAA) where she worked in the brand development and licensing department building popular brands such as Bob Marley and Skinnygirl.
					</p>
				</div>
			</section>
			<section class="row">
				<aside class="small-12 large-5 large-push-7 columns">
					<img src="http://fpoimg.com/345x345"/>
				</aside>
				<div class="small-12 large-7 large-pull-5 columns">
					<header>
						<strong>Neena Gordon</strong>
						Finance and Royalty Compliance
					</header>
					<p>
						Neena is responsible for royalty reporting, collections and auditing of Brand Central’s licensing partners.  Her department also manages our Dependable Solutions software which tracks and manages all royalties and reports for our clients and partners. As former Vice President of Royalty Compliance for Equity Management Inc., Neena managed the audit programs for over 20 major licensors, including General Motors, Dr Pepper/7Up, Kawasaki and Whirlpool/Maytag. The core audit procedures and reporting format developed by Neena have become the procedural standard used by a number of the country’s top royalty audit firms.
					</p>
				</div>
			</section>
		</div>
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