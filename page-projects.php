<?php get_header(); ?>

</header>
<section>
	<article>
		New society projects ipse lorem ipsum dolor abesset velum 
	  amet, consectetur adipiscing elit. Ut pretium non datur.
	  rest pretium tempor. Ut eget imperdiet neque. In verita-
	  atem volutpat ante semper diam et aliquam erat.
	</article>
</section>
<section>

	<script>
		$(document).ready(function() {
			var radioButtons = [false, false, false, false, false];

			$("input[type='radio'].radioButton-projects").click(function() {
				if( radioButtons[$(this).index("input[type='radio']")] == true ) { // if clicking on self
					$(this).prop('checked', false);								   // unselect self
					radioButtons[$(this).index("input[type='radio']")] = false;
				}
				else {															// if clicking another
					radioButtons = [false, false, false, false, false];
					$("input[type='radio'].radioButton-projects").prop('checked', false);	// unselect all
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
		Projects
	</h1>
	<div class="project">
		<figure class="img1">
			<label class="radioLabel-project" for="project-1st">
			</label>
			<figcaption>
				<h2>
					Anglican Way
				</h2>
				<p>
					Premier online magazine of Anglican faith and tradition.
				</p>
			</figcaption>
		</figure>
	</div>

	<div class="project">
		<figure class="img2">
			<label class="radioLabel-project" for="project-2nd">
			</label>
			<figcaption>
				<h2>
					Anglican Way Print
				</h2>
				<p>
					Print edition on the vital topics in the Church.
				</p>
			</figcaption>
		</figure>
	</div>

	<div class="project">
		<figure class="img3">
			<label class="radioLabel-project" for="project-3rd">
			</label>
			<figcaption>
				<h2>
					I-Pray BCP App
				</h2>
				<p>
					Your portable Daily office, going everywhere you go.
				</p>
			</figcaption>
		</figure>
	</div>

	<div class="project">
		<figure class="img4">
			<label class="radioLabel-project" for="project-4th">
			</label>
			<figcaption>
				<h2>
					Catechesis Project
				</h2>
				<p>
					What is whispered in the classroom, will be uttered on the street.
				</p>
			</figcaption>
		</figure>
	</div>

	<div class="project">
		<figure class="img5">
			<label class="radioLabel-project" for="project-5th">
			</label>
			<figcaption>
				<h2>
					New Scriptorium
				</h2>
				<p>
					Anglican classics online, for today's generation.
				</p>
			</figcaption>
		</figure>
	</div>
</section>

<?php get_footer(); ?>
</body>
</html>