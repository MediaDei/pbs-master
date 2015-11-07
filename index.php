<?php get_header(); ?>

	
	<div role="img" class="hero-image home"></div>
	<div role="img" class="hero-image home extra"></div>
	<div class="page-title"><h1>Welcome</h1></div>
</header>


<section class="home">
	<p class="capital-ornate T intro"><span class="smallcaps">The liturgy</span> is at the heart of Christian worship;
	<br> and the <span class="smallcaps">Prayerbook</span> is at the heart of the Liturgy.</p>

	<h1>Latest News</h1>


	<article class="news">
		<header>
			<h1><a href="#">New Prayer Book Society website!</a></h1>
		
			<time datetime="2015-12-1" title="December 1st, 2015" class="fa fa-calendar">December 1, 2015</time>
			<address class="fa fa-user">by <a rel="author" href="/author/pbs-official">Prayer Book Society</a></address>

			<aside>
				<span class="top">Dec</span>
				<span class="bottom">8</span>
				</span>
			</aside>
		</header>
		<div role="img" class="photo"></div>
		<p class="p"><span class="smallcaps">A new website</span> for dapibus nisl vitae elit fringilla rutrum. Lores sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa. Vestibulum sed metus in lorem tristique ullamcorper id vitae erat.</p>

		<p class="p">Vivamus facilisis dolor et massa placerat, at vestibulum nisi muegestas. Nullam rhoncus lacus non odio luctus, eu condimentum mauris ultrices. Praesent blandit, augue a posuere aliquam, arcus tortor feugiat turpis, quis lacinia augue sapien at tellus.</p>
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

	<p class="capital-ornate T"><span class="smallcaps">The Mission of the Society</span> lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam et aliquam erat.</p>

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

	<p class="capital-ornate N"><span class="smallcaps">New society ministries</span> dei lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. rest pretium tempor. Ut eget imperdiet neque. In veritatem volutpat ante semper diam et aliquam erat.</p>

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
						 going everywhere you go.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>I-Pray BCP App</h2>
					<p>Your portable daily Office, going every...</p>
				</div>
			</div>
		</label>

		<input id="ac-4" type="radio" name="accordion-1">
		<label for="ac-4" class="catechesis">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Catechesis Project</h2>
					<p>What is whispered in the classrooms,
						 will be uttered on the streets.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>Catechesis Project</h2>
					<p>What is whispered in the classrooms, ...</p>
				</div>
			</div>
		</label>

		<input id="ac-5" type="radio" name="accordion-1">
		<label for="ac-5" class="scriptorium">
			<div class="large">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>New Scriptorium</h2>
					<p>Anglican classics online,
						 for today's generation.</p>
				</div>
			</div>
			<div class="small">
				<div class="bg-blur" aria-hidden="true"></div>
				<div class="text">
					<h2>New Scriptorium</h2>
					<p>Anglican classics online, for today's gene...</p>
				</div>
			</div>
		</label>
	</div>
</section>


<section class="home join">
	<p class="capital-ornate C"><span class="smallcaps">Contribute to the work</span> of the Society lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

  <h1 class="member-title">Become a Member</h1>

  <div class="benefits">
    <div class="grid-1-3">
    <div class="tout grow">
    	<p class="floating one">1</p>
    	<p class="p capital G"><span class="smallcaps">Grow</span> auris non tempor quam, et lacinia satis. Mauris accumlans eros eget libero posuere vulputate. Iam elit, elementum sed varius at, adipiscing vitae.</p>
    	<div role="img" class="image"></div>
    </div>
    </div>

    <div class="grid-1-3">
    <div class="tout support">
    	<p class="floating two">2</p>
      <p class="p capital S"><span class="smallcaps">Support</span> uris non tempor quam, et lacinia satis. Mauris accumlans eros eget libero posuere vulputate. Iam elit, elementum sed varius at, adipiscing vitae.</p>
    	<div role="img" class="image"></div>
    </div>
    </div>

    <div class="grid-1-3">
    <div class="tout flourish">
	    <p class="floating three">3</p>
      <p class="p capital F"><span class="smallcaps">Flourish</span> uris non tempor quam, et lacinia satis. Mauris accumlans eros eget libero posuere vulputate. Iam elit, elementum sed varius at, adipiscing vitae.</p>
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