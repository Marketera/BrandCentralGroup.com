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

<div class="row" id="Introduction">
	<div class="large-12 columns">
		<h1>
			Brand is at
			<strong>the Center</strong>
			of What We Do.
		</h1>
		<p>
			We deepened the emotional connection
			between your brand and consumers.
		</p>
		<p class="call-to-action">
			<a class="large button" href="#ProvenMethodology">Learn More</a>
		</p>
	</div>
</div>

<div class="row vertical-slides" id="ProvenMethodology">
	<div class="large-12 columns">
		<h2>
			We Have a Proven
			<strong>Methodology.</strong>
		</h2>
		<p class="call-to-action">
			<a class="ProvenMethodology-next" href="#ProvenMethodology"><img src="_template/Default/assets/images/homepage/down-large.png"></a>
			<a class="large success button" href="javascript:alert('I need a place to go!');">Learn More</a>
		</p>
	</div>
	<div class="large-12 columns">
		<h2>
			We Have a Proven
			<strong>Track Record.</strong>
		</h2>
		<p class="call-to-action">
			<a class="ProvenMethodology-next" href="#ProvenMethodology"><img src="_template/Default/assets/images/homepage/down-large.png"></a>
			<a class="large success button" href="javascript:alert('I need a place to go!');">Learn More</a>
		</p>
	</div>
</div>
<div class="row ambient-slider">
	<a href="javascript:alert('I need a place to go!');" id="brand-central-difference" class="large-12 columns">
		<h2>
			<strong>Brand Central Difference</strong>
		</h2>
		<h4>
			We Bring Big Ideas,
			Innovation and
			Entrepreneurial Thinking
			to Everything We Do.
		</h4>
		<p>
			Lorem ipsum dolor sit amet, you may consider
			leaving this text out. Less is more.
		</p>
		<p>
			<span class="large success button deactivate-slider-spot">Learn More</span>
		</p>
	</a>
	<a href="javascript:alert('I need a place to go!');" id="brand-central-station" class="large-12 columns">
		<h2>
			<strong>Brand Central Station</strong>
		</h2>
		<h4>
			We Bring Big Trains,
			Locomotives and
			Western-ish Thinking
			to Everything We Do.
		</h4>
		<p>
			Lorem ipsum dolor sit amet, you may consider
			leaving this text out. Less is more.
		</p>
		<p>
			<span class="large success button deactivate-slider-spot">Learn More</span>
		</p>
	</a>
</div>


<div class="row" id="OurClients">
	<div class="large-12 columns">
		<h2>
			Our Clients.
		</h2>
		<ul>
			<li><a class="activatable activated" href="#food-beverage">Food &amp; Beverage</a></li>
			<li><a class="activatable" href="#lifestyle">Lifestyle &amp; Digital</a></li>
			<li><a class="activatable" href="#entertainment">Entertainment &amp; Pop Culture</a></li>
			<li><a class="activatable" href="#recreation">Outdoor Recreation</a></li>
		</ul>
		<section id="food-beverage" class="activated">
			<img src="_template/Default/assets/images/homepage/clients/necco.png">
			<img src="_template/Default/assets/images/homepage/clients/the-chew.png">
			<img src="_template/Default/assets/images/homepage/clients/master-chef.png">
			<img src="_template/Default/assets/images/homepage/clients/coleman.png">
			<img src="_template/Default/assets/images/homepage/clients/adio.png">
			<img src="_template/Default/assets/images/homepage/clients/k2sports.png">
			<img src="_template/Default/assets/images/homepage/clients/marker.png">
			<img src="_template/Default/assets/images/homepage/clients/rawlings.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/canada-dry.png">
			<img src="_template/Default/assets/images/homepage/clients/crush.png">
		</section>
		<section id="lifestyle">
			<img src="_template/Default/assets/images/homepage/clients/necco.png">
			<img src="_template/Default/assets/images/homepage/clients/the-chew.png">
			<img src="_template/Default/assets/images/homepage/clients/master-chef.png">
			<img src="_template/Default/assets/images/homepage/clients/coleman.png">
			<img src="_template/Default/assets/images/homepage/clients/adio.png">
			<img src="_template/Default/assets/images/homepage/clients/k2sports.png">
			<img src="_template/Default/assets/images/homepage/clients/marker.png">
			<img src="_template/Default/assets/images/homepage/clients/rawlings.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/canada-dry.png">
			<img src="_template/Default/assets/images/homepage/clients/crush.png">
		</section>
		<section id="entertainment">
			<img src="_template/Default/assets/images/homepage/clients/necco.png">
			<img src="_template/Default/assets/images/homepage/clients/the-chew.png">
			<img src="_template/Default/assets/images/homepage/clients/master-chef.png">
			<img src="_template/Default/assets/images/homepage/clients/coleman.png">
			<img src="_template/Default/assets/images/homepage/clients/adio.png">
			<img src="_template/Default/assets/images/homepage/clients/k2sports.png">
			<img src="_template/Default/assets/images/homepage/clients/marker.png">
			<img src="_template/Default/assets/images/homepage/clients/rawlings.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/canada-dry.png">
			<img src="_template/Default/assets/images/homepage/clients/crush.png">
		</section>
		<section id="recreation">
			<img src="_template/Default/assets/images/homepage/clients/necco.png">
			<img src="_template/Default/assets/images/homepage/clients/the-chew.png">
			<img src="_template/Default/assets/images/homepage/clients/master-chef.png">
			<img src="_template/Default/assets/images/homepage/clients/coleman.png">
			<img src="_template/Default/assets/images/homepage/clients/adio.png">
			<img src="_template/Default/assets/images/homepage/clients/k2sports.png">
			<img src="_template/Default/assets/images/homepage/clients/marker.png">
			<img src="_template/Default/assets/images/homepage/clients/rawlings.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/aw.png">
			<img src="_template/Default/assets/images/homepage/clients/canada-dry.png">
			<img src="_template/Default/assets/images/homepage/clients/crush.png">
		</section>
	</div>
</div>

<div class="row" id="Contact">
	<h2 class="large-12 columns">
		Get in Touch.
	</h2>
	<a class="large-7 columns" href="http://maps.google.com" target="_blank">
		<img src="_template/Default/assets/images/homepage/map.png">
	</a>
	<div class="large-5 columns">
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


<?php
Hark::Deploy($page);