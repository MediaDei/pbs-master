<?php get_header(); ?>

	
	<div role="img" class="hero-image ministries"></div>
	<div class="page-title"><h1>Ministries</h1></div>
</header>


<section class="ministries">
	<p class="capital-ornate N intro"><span class="smallcaps">New society ministries</span> ipse lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritatem volutpat ante semper diam et aliquam erat.</p>


	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(document).ready(function() {
				var radioButtons = [false, false, false, false, false];

				$("input[type='radio'].radioButton-project").click(function() {
					if( radioButtons[$(this).index("input[type='radio']")] == true ) { // if clicking on self
						$(this).prop('checked', false);								   // unselect self
						radioButtons[$(this).index("input[type='radio']")] = false;
					}
					else {															// if clicking another
						radioButtons = [false, false, false, false, false];
						$("input[type='radio'].radioButton-project").prop('checked', false);	// unselect all
						radioButtons[$(this).index("input[type='radio']")] = true;	// select self
						$(this).prop('checked', true);
					}
				});
			});
	</script>

	<input class="radioButton-project" id="project-1st" type="radio" name="project1">
	<input class="radioButton-project" id="project-2nd" type="radio" name="project2">
	<input class="radioButton-project" id="project-3rd" type="radio" name="project3">
	<input class="radioButton-project" id="project-4th" type="radio" name="project4">
	<input class="radioButton-project" id="project-5th" type="radio" name="project5">

	<h1>
		Ministries
	</h1>
	<div role="img" class="projectbg img1">
		<label class="radioLabel-project" for="project-1st">
		</label>
		<div class="container">
			<div role="img" class="overlaybg img1"></div>
			<div class="text">
				<h2>Anglican Way</h2>
				<p>Premier online magazine of
				Anglican faith and tradition.</p>
			</div>
		</div>
		<div class="arrow first"></div>
	</div>
	<div class="modal-info m1">
		<div class="bio">
			<p>
				Anglican Way
			</p>
			<p class="p capital T"><span class="smallcaps">Essential, topical and innovative,</span> anglicanway.org is a central website and multimedia resource for all in the Anglican tradition With informative and inspiring content, it explores the riches and distinctiveness of our Anglican theological heritage and Prayer Book tradition It also offers a platform for informed debate about the key issues and challenges facing the Anglicans today. It will also feature inspirational video and audio content in support of our liturgical mission and vision in partnership with our network of parishes.</p>
		</div>
	</div>

	<div role="img" class="projectbg img2">
		<label class="radioLabel-project" for="project-2nd">
		</label>
		<div class="container">
			<div role="img" class="overlaybg img2"></div>
			<div class="text">
				<h2>Anglican Way Print</h2>
				<p>Print edition on the vital topics
				in the Church.</p>
			</div>
		</div>
		<div class="arrow second"></div>
	</div>
	<div class="modal-info m2">
		<div class="bio">
			<p>Anglican Way Print</p>
			<p class="p capital T"><span class="smallcaps">The print edition</span> of the Society’s journal presents informative and educational articles together with analysis of the vital topics facing the Church. Edited by Dr Roberta Bayer it is both creative and distinctive and presents a powerful Prayer Book perspective on all aspects of Anglican faith and worship together with key perspectives drawn from Anglican history.</p>
		</div>
	</div>

	<div role="img" class="projectbg img3">
		<label class="radioLabel-project" for="project-3rd">
		</label>
		<div class="container">
			<div role="img" class="overlaybg img3"></div>
			<div class="text">
				<h2>I-Pray BCP App</h2>
				<p>Your portable Daily Office,
					going everywhere you go.</p>
			</div>
		</div>
		<div class="arrow third"></div>
	</div>
	<div class="modal-info m3">
		<div class="bio">
			<p>I-Pray BCP App</p>
			<p class="p capital T"><span class="smallcaps">Updated daily,</span> this app provides the full text for saying Morning and Evening Prayer as well as Noonday Prayer and Compline. There is no need to carry a heavy book and makes it even easier to integrate the Office into your daily devotions, in unity with the Church worldwide, in prayer through time.</p>
		</div>
	</div>

	<div role="img" class="projectbg img4">
		<label class="radioLabel-project" for="project-4th">
		</label>
		<div class="container">
			<div role="img" class="overlaybg img4"></div>
			<div class="text">
				<h2>Catechesis Project</h2>
				<p>Forming in Faith.</p>
			</div>
		</div>
		<div class="arrow fourth"></div>
	</div>
	<div class="modal-info m4">
		<div class="bio">
			<p>Catechesis Project</p>
			<p class="p capital T"><span class="smallcaps">Teaching the faith</span>, or Catechesis, is a profoundly important ministry, to which the Prayer Book Society is deeply committed. The challenges and confusions facing the Church in the modern world make the need for accurate teaching greater than ever. Of a previously unprecedented scale among Anglicans, the Catechesis Project aims to provide a solid and sure footing, teaching the fundamentals of Christianity, and essentials of Anglican doctrine, in an accessible and compelling manner. The substantial first volume, <span style="font-style: italic">My Beloved is Mine and I am His</span>, by the Society President, the Revd. Fr. Gavin Dunbar is now being launched. It provides material for Adult Education Classes through twenty five weekly chapters. Its three main sections exploring progressively what it means to belong, to believe and to follow Christ as this has been understood and set out in the Anglican tradition. Each of the cumulative chapters features short essays on the Prayer Book Catechism’s Questions and Answers, followed by suggestions for further reading, and questions for study and discussion.</p>
		</div>
	</div>

	<div role="img" class="projectbg img5">
		<label class="radioLabel-project" for="project-5th">
		</label>
		<div class="container">
			<div role="img" class="overlaybg img5"></div>
			<div class="text">
				<h2>New Scriptorium</h2>
				<p>Anglican classics now.</p>
			</div>
		</div>
		<div class="arrow fifth"></div>
	</div>
	<div class="modal-info m5">
		<div class="bio">
			<p>New Scriptorium</p>
			<p class="p capital T"><span class="smallcaps">This online library</span> of Anglican classics makes instantly available important texts from the incomparable heritage of theological writing by Anglican Divines since the sixteenth century.  It has at present a particular strength in works about the Prayer Book, Collects, Prayers and Articles and also many of the writings by the distinguished former PBS President the late Revd Dr Peter Toon.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
</body>
</html>