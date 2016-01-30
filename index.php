<?php get_header(); ?>

	
	<div role="img" class="hero-image home"></div>
	<div role="img" class="hero-image home extra"></div>
	<div class="page-title"><h1>Welcome</h1></div>
</header>


<section class="home">
	<p class="capital-ornate intro"><span class="T">T</span><span class="smallcaps">he Prayer Book Tradition</span>&mdash;
	A place to belong, a Faith to believe,
	and a Rule of life and worship.</p>

	<h1>Latest News</h1>

	<?php 
		global $post;
		$args = array('numberposts'=>4);
		$posts = get_posts($args);
		$i = 1;
	?>

	<?php foreach($posts as $post) : setup_postdata($post); ?>
		<?php if ($i==1) { ?>

		<article class="news">
		<header>
			<h1><a href="<?php the_permalink(); ?>#read"><?php the_title(); ?></a></h1>
			<time class="line" datetime="<?php echo get_the_date('Y-m-d'); ?>" title="<?php echo get_the_date('F j, Y'); ?>"><span role="img" class="fa fa-calendar"></span><?php echo get_the_date('F j, Y'); ?></time>
			<address><span role="img" class="fa fa-user"></span> by <span rel="author"><?php the_author(); ?></span></address>

			<time class="circle">
				<div class="top"><?php echo get_the_date('M'); ?></div>
				<div class="bottom"><?php echo get_the_date('d'); ?></div>
			</time>
		</header>
		<div class="p container">
		<?php the_content('read more &raquo;'); ?>
		</div>
		</article>

		<aside class="more">

		<div class="more-news">
			<div class="title">More News:</div>
			<ul>

		<?php 
			$i++;
			} else {
		?>

			<li><a href="<?php the_permalink(); ?>#read" class="item">
				<h2><?php the_title(); ?></h2>
				<p class="p"><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
				<time datetime="2015-06-2" title="July 2nd, 2015">
					<div class="top"><?php echo get_the_date('M'); ?></div>
					<div class="bottom"><?php echo get_the_date('d'); ?></div>
				</time>
			</a></li>
		<?php 
		}
	endforeach; ?>

	<li><a href="/news-archives/" class="all smallcaps">
		All news →
	</a></li>
	</ul>
	</div>

	<div class="more-aw">
		<h2 class="smallcaps">Anglican Way</h2>
		<time datetime="2015-12">Dec., 2015 <span>•</span> Vol. 38, No. 3</time>

		<a class="img" href="<?php bloginfo('template_url'); ?>/files/2015-03.pdf">
			<img class="AWcover" src="<?php bloginfo('template_url'); ?>/files/2015-03-cover.jpg" title="Anglican Way Print Magazine"/>
			<span class="zoom fa fa-search"></span>
		</a>

		<a class="more-vol smallcaps" href="/print-magazine/">All issues →</a>
	</div>

	</aside>


	<aside class="notice">
		<h1 class="smallcaps">The Society Announces a Series of Colloquia on Daily Prayer</h1>

		<div class="text">
			<h2>Stirred up to Godliness
			the Daily Office in Anglicanism</h2>

			<p class="p">The Society is pleased to announce that the first of two one day events on the theme of Daily Prayer will take place on 20th January (10 a.m - 5.30 p.m. in Dallas at the Church of the Holy Cross Herschel Avenue  with a second colloquium in Savannah in the second week after Easter.</p>

			<p class="p">Further details of how to register can be found <a href="http://www.pbsusa.org/a-series-of-colloquia-on-common-prayer/#read">here</a> !</p>
			<span class="arrow fa fa-reply-all fa-flip-horizontal"> </span>
		</div>

		<span class="close fa fa-times"> </span>
	</aside>
</section>

<script type="text/javascript">
	var $ = jQuery.noConflict();
	$(document).ready(function(){

	$(".notice .close").click(function() {
		$(".notice").css("height","0");
	});

  });
</script>

<section class="home map">
	<h1>What We Do</h1>

	<p class="capital-ornate"><span class="T">T</span><span class="smallcaps">he Society exists to promote</span> Anglican belief and worship as expressed in the Common Prayer tradition and Angli&shy;can formularies since the first Book of Common Prayer of 1549, in the Church of England, and on through the 1928 Prayer Book down to the present day: worship is at the heart of Chris&shy;tianity and the Common Prayer tradition is at the heart of Anglican worship.</p>

	<div class="map-title">Prayer Book Churches</div>
	<div id="mapBox"></div>

	<div class="map-benefits">
	    <div class="title">We —</div>
	    <ul>
	      <li>Help these communities grow</li>
	      <li>Support parishes with literature and brochures</li>
	      <li>Contribute to authentic Anglican revival</li>
	    </ul>
	</div>
	<a href="/about/" class="button">
		<span class="text smallcaps">About Us </span>
		<span class="arrow" role="img">→</span>
	</a>


	<!--dropdown-->
	<script type="text/javascript">
	  // Mapbox
	  L.mapbox.accessToken = 'pk.eyJ1IjoicGJzdXNhIiwiYSI6ImNpZ285ZmhuNzAwMXp0cGtucTV2ZGZtZmcifQ.EJhg1jhPVol-lYIJK1Vzjw';

	  var map = L.mapbox.map('mapBox', 'pbsusa.o3ghdgj0').setView([40.8595,-100.3203], 4);
	  map.scrollWheelZoom.disable();
	</script>


</section>

<section class="home ministry-list">
	<h1>Our Ministries</h1>

	<p class="capital-ornate N"><span class="N">N</span><span class="smallcaps">ew society ministries</span> dei lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. rest pretium tempor. Ut eget imperdiet neque. In veritatem volutpat ante semper diam et aliquam erat.</p>

	<div class="ministry-list">
		<input id="ac-1" type="radio" name="accordion-1" checked="">
		<label for="ac-1" class="anglicanway">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Anglican Way</h2>
					<p>Premier online magazine of 
						 Anglican faith and tradition.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Anglican Way</h2>
					<p>Premier online magazine of Anglican ...</p>
				</div>
			</div>
		</label>

		<input id="ac-2" type="radio" name="accordion-1">
		<label for="ac-2" class="print">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Print Edition</h2>
					<p>Print edition on the vital 
						 topics in the Church.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Print Edition</h2>
					<p>Print edition on the vital topics in the ...</p>
				</div>
			</div>
		</label>

		<input id="ac-3" type="radio" name="accordion-1">
		<label for="ac-3" class="ipray">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>I-Pray BCP App</h2>
					<p>You portable Daily office,
						 it goes everywhere you go.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>I-Pray BCP App</h2>
					<p>Your portable daily Office, it goes every...</p>
				</div>
			</div>
		</label>

		<input id="ac-4" type="radio" name="accordion-1">
		<label for="ac-4" class="catechesis">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Catechesis Project</h2>
					<p>Forming in Faith.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Catechesis Project</h2>
					<p>Forming in Faith.</p>
				</div>
			</div>
		</label>

		<input id="ac-5" type="radio" name="accordion-1">
		<label for="ac-5" class="scriptorium">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>New Scriptorium</h2>
					<p>Anglican classics now.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>New Scriptorium</h2>
					<p>Anglican classics now.</p>
				</div>
			</div>
		</label>
	</div>
</section>


<section class="home join">
  <h1 class="member-title">Become a Member</h1>

	<p class="capital-ornate"><span class="C">C</span><span class="smallcaps">ontribute to the work</span> of the Society lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

	<div class="member-benefits">
		<div class="grid-1-3">
		<div class="tout grow">
			<span class="floating one">1</span>
			<p class="p capital">R<span class="smallcaps">eceive</span> our theological and liturgical resources de&shy;signed to help strengthen both personal faith and parish life within the wider whole of our Anglican tradition.</p>
			<div role="img" class="image"></div>
		</div>
		</div>

		<div class="grid-1-3">
		<div class="tout support">
			<span class="floating two">2</span>
			<p class="p capital">S<span class="smallcaps">upport</span> the renewal of cla&shy;ssical Anglicanism with its profound theology, commitment to spirituality and worship of God in the beauty of holiness in the Prayer Books.</p>
			<div role="img" class="image"></div>
		</div>
		</div>

		<div class="grid-1-3">
		<div class="tout flourish">
			<span class="floating three">3</span>
			<p class="p capital">E<span class="smallcaps">nrich</span> and deepen your sense of unity with the daily prayer and devotions of An&shy;glicans around the world who re&shy;spond to the call to ‘a devout and holy life.’ (William Law)</p>
			<div role="img" class="image"></div>
		</div>
		</div>
	</div>

	<a href="/contribute/#join" class="button">
	<span>
		<span class="text smallcaps">Join</span> 
		<span class="arrow" role="img">→</span>
	</span>
	</a>

</section>


<?php get_footer(); ?>