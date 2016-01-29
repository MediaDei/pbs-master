<?php get_header(); ?>

	
	<div role="img" class="hero-image contribute"></div>
	<div class="page-title"><h1>Contribute</h1></div>
</header>


<section class="contribute" id="join">
	<p class="capital-ornate"><span class="C">C</span><span class="smallcaps">ontribute to the work</span> of the Society lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

  <h1 class="member-title">Become a Member</h1>

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

  <aside class="member-partners">
    <div class="title">Our Partners</div>
    <a class="partner afl" href="http://anglicansforlife.org/"></a>
    <a class="partner ird" href="https://theird.org/"></a>
    <a class="partner acna" href="http://anglicanchurch.net"></a>
    <a class="partner jji" href="http://www.johnjayinstitute.org/"></a>
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
  <?php echo do_shortcode( '[give_form id="31"]' ); ?>
  
  <a href="#join-offline-text" class="join-offline">See Offline Ways to Join</a>
  <div id="join-offline-text">
    <p class="fee">A yearly membership is $40.00</p>
    <p class="msg">Please mail your member fee, along with your name,
     address, and contact information to:</p>
    <p class="address">The Society for the Preservation of the Book of Common Prayer
      PO Box 137
      Jenkintown, PA 19046-0137</p>
  </div>
</section>


<section class="contribute">
  <h1>Donate</h1>

  <p class="capital-ornate"><span class="D">D</span><span class="smallcaps">onate to the Society</span> lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritaatem volutpat ante semper diam.</p>

  <div class="range-input">
    <span class="range-value"></span>
    <input type="range" name="range" id="slider" value="0" min="0" max="100" />
  </div>

  <?php echo do_shortcode( '[give_form id="19"]' ); ?>

  <script>
    var $ = jQuery.noConflict();
    var range = $('#slider'),
        value = $('.range-value'),
        give_value = $('#give-amount'),
        fade_on = false;



    function fadeButton() {
      //apply fade to all buttons except .dummy-btn
      $(".give-btn-level-1, .give-btn-level-2, .give-btn-level-3, .give-btn-level-4, .give-btn-level-5, .give-btn-level-6").addClass("faded");

      fade_on = true;
    }

    function restoreButton() {
      //remove fade from all buttons except .dummy-btn
      $(".give-btn-level-1, .give-btn-level-2, .give-btn-level-3, .give-btn-level-4, .give-btn-level-5, .give-btn-level-6").removeClass("faded");

      fade_on = false;

      //change .dummy-btn to button
      $(".dummy-btn").replaceWith("<button value='0.00' class='give-donation-level-btn give-btn give-btn-level-7  dummy-btn' data-price-id='7' type='button'>+</button>");

    }
    function checkRestore() {
      if(fade_on == true) {
        restoreButton();
      }
    }
    function checkFade() {
      if(fade_on == false) {
        fadeButton();
      }
    }
    



    $(document).ready(function() {

      //update html for .give-btn-level-7 at page load
      $(".give-btn-level-7").html("+").addClass("dummy-btn");

      //add class to join button so can style
      $("button:contains(Join)").addClass("join-button");

      //add class to join modal button so can style
      $( "input[value='Join']" ).closest( "div.give-submit-button-wrap" ).addClass("join-button");

      //add class to donate button so can style
      $("button:contains(Donate)").addClass("donate-button");

      //add class to donate modal button so can style
      $( "input[value='Donate']" ).closest( "div.give-submit-button-wrap" ).addClass("donate-button");





      //click events for all give-btn; update range and value
      $(".give-btn-level-1").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
      }); 
      $( ".give-btn-level-2").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
      });
      $( ".give-btn-level-3").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-4").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-5").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });
      $( ".give-btn-level-6").click(function () {
        var i = $(this).val();
        range.attr('value', i);
        value.html(range.attr('value'));
        //checkRestore();
        
      });

      $( ".dummy-btn").click(function () {
        $(".give-text-input").focus().blur();
        //checkFade();
      });

      //range updates value, .give-text-input, and .dummy-btn
      value.html(range.attr('value'));
      range.on('input', function(){
          value.html(this.value);
          $(".give-text-input").val(this.value);
          $(".dummy-btn").val(this.value);
      });

      //when using range, click on .dummy-btn(submits value to plugin) and then focus .give-text-input and then unfocus (adds "cents" to textbox)
      range.on('mouseup', function(){
        $(".dummy-btn").click();
        $(".give-text-input").focus().blur();
      });

      //.give-text-input updates range
      $(".give-text-input").on('input', function(){
          range.val(this.value);
          value.html(this.value);
      });

      //make dummy-btn change value of .give-text-input
      $(".dummy-btn").change(function(){
        $(".give-text-input").val(this.value);
      });


    });
  </script>

</section>



<?php get_footer(); ?>