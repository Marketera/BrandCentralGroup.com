<?php
include_once('_includes/global.php');

// <head>
$page['Title'] = 'Our Executive Team';
$page['Description'] = 'Meet and learn about Brand Central\'s executive team.';
$page['CustomHead'] = <<<HTML
HTML;

// <body>
$page['BodyClasses'] = array();

Hark::Init();
?>

<div class="layer layer-anchor Team" id="Team">
	<div class="row">
		<h2 class="small-12 large-offset-1 large-11 columns">
			Our Executive Team.
		</h2>
	</div>
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


<?php
Hark::Deploy($page);