<?php get_header(); ?>

	<main role="main">
		<section class="pwh-hero">
			<div class="pwh-logo">
				<img src="<?php bloginfo('template_url'); ?>/img/powerhouse-brewery.svg"  alt="Powerhouse Brewing Company" />
			</div>
			<div class="pwh-coming-soon">
				<img src="<?php bloginfo('template_url'); ?>/img/coming-soon-shadow.svg" alt="Coming Soon" />
			</div>
			<div class="pwh-badge-wrapper">
				<div class="pwh-badge">
					<img src="<?php bloginfo('template_url'); ?>/img/craft-badge-shadow.svg" alt="Premium Quality Craft Beer" />
				</div>
			</div>
		</section>
		<section class="pwh-main-content">
			<div class="mdev-main-wrapper">
			<section class="pwh-intro">
				<h1>
					What Powers Us?
				</h1>
				<p>Fresh flavours are coming! A great brew can bring together a community, which is why we’ve chosen to build our new home in the revitalized 100 Kelloggs Factory in London Ontario’s Old East Village. We’re family-owned and operated, using quality, Canadian-made equipment. We’ll be offering tours, tastes, and memorable dining experiences. We look forward to hosting you and your friends, family and fellow villagers! </p>
			</section>
			<section class="pwh-outro flex flex-row flex-hor-between">
				<div class="pwh-subscribe">
					<h3>Want the inside track?</h3>
					<h2>Join Our Mailing List</h2>
					<div class="pwh-subscribe-wrapper">
						<?php echo do_shortcode('[mc4wp_form id="4"]'); ?>
						<div class="pwh-subscribe-disclaimer">
							<p>Don't worry, we don't send thousands of emails, we'll only send updates about things you actually care about, like new products and great events!</p>
						</div>
					</div>
				</div>
				<div class="pwh-social">
					<h3>We've got a lot brewing!</h3>
					<h2>Share our Story</h2>
					<ul class="flex flex-row flex-hor-between flex-vert-center;">
						<a href="https://www.instagram.com/power_house_brewing_co/"><li><img src="<?php bloginfo('template_url'); ?>/img/icon-IG.svg" alt="Instagram" /></li></a>
						<a href="https://www.facebook.com/powerhousebrewingco/"><li><img src="<?php bloginfo('template_url'); ?>/img/icon-FB.svg" alt="Facebook" /></li></a>
						<a href="https://www.twitter.com"><li><img src="<?php bloginfo('template_url'); ?>/img/icon-twitter.svg" alt="Twitter" /></li></a>
					</ul>
				</div>
			</section>
			</div>
			<section class="pwh-gallery flex flex-row flex-hor-between">
				<div class="image-tile">
					<img src="<?php bloginfo('template_url'); ?>/img/powerhouse-tanks1.jpg" alt="Brewery Tanks" />
				</div>
				<div class="image-tile">
					<img src="<?php bloginfo('template_url'); ?>/img/powerhouse-tanks-2.jpg" alt="Brewery Tanks 2" />
				</div>
				<div class="image-tile">
					<img src="<?php bloginfo('template_url'); ?>/img/powerhouse-brewery.jpg" alt="Brewery Overview" />
				</div>
			</section>

		</section>
	</main>

<?php get_footer(); ?>
