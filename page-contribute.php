<?php get_header(); ?>

	
	<div role="img" class="hero-image contribute"></div>
	<div class="page-title"><h1>Contribute</h1></div>
</header>


<section class="contribute">
	<p class="capital-ornate"><span class="C">C</span><span class="smallcaps">ontribute to the work</span> of the Society lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

  <h1 class="member-title">Become a Member</h1>

  <div class="member-benefits">
    <div class="grid-1-3">
    <div class="tout image grow">
    	<p class="p capital">R<span class="smallcaps">eceive</span> our theological and litur&shy;gical resources designed to help strengthen both personal faith and parish life within the wider whole of our Anglican tradition.</p>
    </div>
    </div>

    <div class="grid-1-3">
    <div class="tout image support">
      <p class="p capital">S<span class="smallcaps">upport</span> the renewal of cla&shy;ssical Anglicanism with its profound theology, commitment to spirituality and worship of God in the beauty of holiness in the Prayer Books.</p>
    </div>
    </div>

    <div class="grid-1-3">
    <div class="tout image flourish">
      <p class="p capital">E<span class="smallcaps">nrich</span> and deepen your sense of unity with the daily prayer and devotions of Anglicans around the world who respond to the call to ‘a devout and holy life’ (William Law)</p>
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

  <div class="member-receive">
    <div class="inner">
      <div class="title">Receive —</div>
      <ul>
        <li>Mailed print editions of Anglican Way</li>
        <li>Special deals on Prayerbooks & other items</li>
        <li>First access to PBS events and conferences</li>
      </ul>
    </div>
  </div>

  <a href="#/" class="button-gold">
  <span>
    <span class="logo" role="img"></span> 
    <span class="text">Join</span> 
    <span class="arrow" role="img">→</span>
  </span>
  </a>

  <a href="#/" class="join-offline">See Offline Ways to Join</a>
</section>


<section class="contribute">
  <h1>Donate</h1>

  <p class="capital-ornate"><span class="D">D</span><span class="smallcaps">onate to the Society</span> lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

  <div class="range-input">
    <input type="range" min="0" max="100" value="0" />
  </div>

  <div class="range-amounts">
    <button type="button" id="10">$10</button>
    <button type="button" id="25">$25</button>
    <button type="button" id="40">$40</button>
    <button type="button" id="65">$65</button>
    <button type="button" id="80">$80</button>
    <button type="button" id="100">$100</button>
    <button type="button" class="more">+</button>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#10").click(function () {
        $("#range[type=range]").val(10)
      });
      $("#25").click(function () {
        $("#range[type=range]").val(25)
      });
      $("#40").click(function () {
        $("#range[type=range]").val(40)
      });
      $("#65").click(function () {
        $("#range[type=range]").val(65)
      });
      $("#80").click(function () {
        $("#range[type=range]").val(80)
      });
      $("#100").click(function () {
        $("#range[type=range]").val(100)
      });
    });
  </script>

  <div class="recurring">
    <input type="checkbox" name="recurring" />
    <label for"recurring">recurring donation</label>
  </div>

  <a href="#/" class="button-blue"><span>Donate</span></a>
 
</section>



<?php get_footer(); ?>