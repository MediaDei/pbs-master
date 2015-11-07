<?php get_header(); ?>

	
	<div role="img" class="hero-image ministries"></div>
	<div class="page-title"><h1>Ministries</h1></div>
</header>


<section class="ministries">
	<p class="capital-ornate N intro"><span class="smallcaps">New society projects</span> ipse lorem ipsum dolor abesset velum amet, consectetur adipiscing elit. Ut pretium non datur. Rest pretium tempor. Ut eget imperdiet neque. In veritatem volutpat ante semper diam et aliquam erat.</p>


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
		Projects
	</h1>
	<div class="project">
		<figure class="img1">
			<label class="radioLabel-project" for="project-1st">
			</label>
			<figcaption class="first">
				<h2>
					Anglican Way
				</h2>
				<p class="first">
					Premier online magazine of Anglican faith and tradition.
				</p>
			</figcaption>
			<div class="arrow first"></div>
		</figure>
	</div>
	<div class="modal-info m1">
		<div class="bio">
			<h2>
				Anglican Way
			</h2>
			<p>
				T <span>his new</span> online library of Anglican classics offers central texts to the new gen-
	      eration elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci lectus, consectetur vel posuere posuere, rutrum eu ipsum. Aliquam eget odio sed ligula iaculis consequat at eget orci. Mauris molestie sit amet metus mattis varius. Donec sit amet ligula eget nisi sodales egestas. Aliquam interdum dolor aliquet dolor sol-licitudin fermentum. Donec congue lorem a molestie bibendum. Etiam nisi ante, consectetur eget placerat a, tempus a neque. Donec ut elit urna. Etiam venenatis eleifend urna eget scelerisque.
			</p>
		</div>
	</div>

	<div class="project">
		<figure class="img2">
			<label class="radioLabel-project" for="project-2nd">
			</label>
			<figcaption class="second">
				<h2>
					Anglican Way Print
				</h2>
				<p class="second">
					Print edition on the vital topics in the Church.
				</p>
			</figcaption>
			<div class="arrow second"></div>
		</figure>
	</div>
	<div class="modal-info m2">
		<div class="bio">
			<h2>
				Anglican Way Print
			</h2>
			<p>
				T <span>his new</span> online library of Anglican classics offers central texts to the new gen-
	      eration elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci lectus, consectetur vel posuere posuere, rutrum eu ipsum. Aliquam eget odio sed ligula iaculis consequat at eget orci. Mauris molestie sit amet metus mattis varius. Donec sit amet ligula eget nisi sodales egestas. Aliquam interdum dolor aliquet dolor sol-licitudin fermentum. Donec congue lorem a molestie bibendum. Etiam nisi ante, consectetur eget placerat a, tempus a neque. Donec ut elit urna. Etiam venenatis eleifend urna eget scelerisque.
			</p>
		</div>
	</div>

	<div class="project">
		<figure class="img3">
			<label class="radioLabel-project" for="project-3rd">
			</label>
			<figcaption class="third">
				<h2>
					I-Pray BCP App
				</h2>
				<p class="third">
					Your portable Daily office, going everywhere you go.
				</p>
			</figcaption>
			<div class="arrow third"></div>
		</figure>
	</div>
	<div class="modal-info m3">
		<div class="bio">
			<h2>
				I-Pray BCP App
			</h2>
			<p>
				T <span>his new</span> online library of Anglican classics offers central texts to the new gen-
	      eration elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci lectus, consectetur vel posuere posuere, rutrum eu ipsum. Aliquam eget odio sed ligula iaculis consequat at eget orci. Mauris molestie sit amet metus mattis varius. Donec sit amet ligula eget nisi sodales egestas. Aliquam interdum dolor aliquet dolor sol-licitudin fermentum. Donec congue lorem a molestie bibendum. Etiam nisi ante, consectetur eget placerat a, tempus a neque. Donec ut elit urna. Etiam venenatis eleifend urna eget scelerisque.
			</p>
		</div>
	</div>

	<div class="project">
		<figure class="img4">
			<label class="radioLabel-project" for="project-4th">
			</label>
			<figcaption class="fourth">
				<h2>
					Catechesis Project
				</h2>
				<p class="fourth">
					What is whispered in the classroom, will be uttered on the street.
				</p>
			</figcaption>
			<div class="arrow fourth"></div>
		</figure>
	</div>
	<div class="modal-info m4">
		<div class="bio">
			<h2>
				Catechesis Project
			</h2>
			<p>
				T <span>his new</span> online library of Anglican classics offers central texts to the new gen-
	      eration elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci lectus, consectetur vel posuere posuere, rutrum eu ipsum. Aliquam eget odio sed ligula iaculis consequat at eget orci. Mauris molestie sit amet metus mattis varius. Donec sit amet ligula eget nisi sodales egestas. Aliquam interdum dolor aliquet dolor sol-licitudin fermentum. Donec congue lorem a molestie bibendum. Etiam nisi ante, consectetur eget placerat a, tempus a neque. Donec ut elit urna. Etiam venenatis eleifend urna eget scelerisque.
			</p>
		</div>
	</div>

	<div class="project">
		<figure class="img5">
			<label class="radioLabel-project" for="project-5th">
			</label>
			<figcaption class="fifth">
				<h2>
					New Scriptorium
				</h2>
				<p class="fifth">
					Anglican classics online, for today's generation.
				</p>
			</figcaption>
			<div class="arrow fifth"></div>
		</figure>
	</div>
	<div class="modal-info m5">
		<div class="bio">
			<h2>
				New Scriptorium
			</h2>
			<p>
				T <span>his new</span> online library of Anglican classics offers central texts to the new gen-
	      eration elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien. Pellentesque orci lectus, consectetur vel posuere posuere, rutrum eu ipsum. Aliquam eget odio sed ligula iaculis consequat at eget orci. Mauris molestie sit amet metus mattis varius. Donec sit amet ligula eget nisi sodales egestas. Aliquam interdum dolor aliquet dolor sol-licitudin fermentum. Donec congue lorem a molestie bibendum. Etiam nisi ante, consectetur eget placerat a, tempus a neque. Donec ut elit urna. Etiam venenatis eleifend urna eget scelerisque.
			</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
</body>
</html>