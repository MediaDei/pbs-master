<?php get_header(); ?>

	
	<div role="img" class="hero-image home"></div>
	<div role="img" class="hero-image home extra"></div>
	<div class="page-title"><h1>Welcome</h1></div>
</header>


<section class="home">
	<p class="capital-ornate intro"><span class="T">T</span><span class="smallcaps">he Prayer Book Tradition</span>&mdash; <br>
	A place to belong, a Faith to believe, <br>
	and a Rule of life and worship.</p>

	<h1>Latest News</h1>


	<article class="news">
		<header>
			<h1><a href="#">New Prayer Book Society website!</a></h1>
		
			<time datetime="2015-12-1" title="December 1st, 2015"><span role="img" class="fa fa-calendar"></span> December 8, 2015</time>
			<address><span role="img" class="fa fa-user"></span> by <a rel="author" href="/author/pbs-official">Prayer Book Society</a></address>

			<aside>
				<span class="top">Dec</span>
				<span class="bottom">8</span>
			</aside>
		</header>
		<div role="img" class="photo"></div>
		<p class="p capital">The Prayer Book Society USA is delighted to launch a completely new website. This combines a modern clarity and simplicity of design with visual and typographical features that draw from the rich aesthetic of the historic Prayer Books themselves.  The site provides a highly accessible overview of the Society’s aims and ministries, along with interactive features, such as the page for finding congregations that offer Prayer Book services. It also links to extensive new catechetical resources for teaching our faith as well as the promotion of daily Morning and Evening prayer and an expanding portal into  online editions of the works by Anglican divines since the sixteenth Century.</p>
	</article>


	<div class="more-title">More News:</div>
	<section class="more-news">
		<ul>
			<li><a href="#/" class="item">
				<h2>The new Catechesis project</h2>
				<p>by Rev. Gavin Dunbar, President of Prayer Book Society</p>
				<time datetime="2015-06-2" title="July 2nd, 2015">
					<div class="top">Jul</div>
					<div class="bottom">2</div>
				</time>
			</a></li>
			<li><a href="#/" class="item">
				<h2>I-Pray BCP iPad app has new daily prayers</h2>
				<p>by Canon Alistair Macdonald-Radcliff</p>
				<time datetime="2015-05-17" title="June 17th, 2015">
					<div class="top">Jun</div>
					<div class="bottom">17</div>
				</time>
			</a></li>
			<li><a href="#/" class="item">
				<h2>Big updates coming for the Anglican Way</h2>
				<p>by Roberta Bayer, Ph.D., editor of "Anglican Way"</p>
				<time datetime="2015-05-17" title="June 17th, 2015">
					<div class="top">Jun</div>
					<div class="bottom">17</div>
				</time>
			</a></li>
			<li><a href="#/" class="load">
				...
			</a></li>
	</section>
</section>

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
	<div class="button-gold"><span>Learn More</span></div>


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

  <div class="benefits">
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

  <aside class="member-partners">
    <div class="title">Our Partners</div>
    <a class="partner afl" href="http://anglicansforlife.org/"></a>
    <a class="partner ird" href="https://theird.org/"></a>
    <a class="partner acna" href="http://anglicanchurch.net"></a>
    <a class="partner jji" href="http://www.johnjayinstitute.org/"></a>
    <a class="partner ba" href="http://barnabasaid.org/"></a>
  </aside>

  <div class="join-bg">

  	<a href="#/" class="button-gold">
  	<span>
  	  <span class="logo" role="img"></span> 
  	  <span class="text">Join</span> 
  	  <span class="arrow" role="img">→</span>
  	</span>
  	</a>

  	<a href="#/" class="join-offline">See Offline Ways to Join</a>

    
  </div>

</section>


<?php get_footer(); ?>