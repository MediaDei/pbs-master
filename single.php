<?php get_header(); ?>
	
<section id="read" class="post">

	<?php the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="p">

		<h1 class="post-title">
			<a href="<?php the_permalink() ?>#read" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title(); ?>
			</a>
		</h1>
		<time class="circle">
			<div class="top"><?php echo get_the_date('M'); ?></div>
			<div class="bottom"><?php echo  get_the_date('d'); ?></div>
		</time>

		<time class="line"><?php echo get_the_date('F j, Y'); ?></time>
		
		<hr class="fleuron indent">

		<?php the_content(); ?>

		<hr class="fleuron">

	</article>

</section>

<aside class="post">
	<h2 class="title">Latest News:</h2>

	<?php 
		global $post;
		$args = array('numberposts'=>3);
		$posts = get_posts($args);
	?>

	<ul>
		<?php foreach($posts as $post) : setup_postdata($post); ?>
		<li><a href="<?php the_permalink(); ?>#read" class="item">
			<h2><?php the_title(); ?></h2>
			<p class="p"><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
			<time class="line" datetime="<?php echo get_the_date('Y-m-d'); ?>" title="<?php echo get_the_date('F j, Y'); ?>">
				<div class="top"><?php echo get_the_date('M'); ?></div>
				<div class="bottom"><?php echo get_the_date('d'); ?></div>
			</time>
		</a></li>
		<?php endforeach; ?>

		<li><a href="/news-archives/" class="all smallcaps">
			All news →
		</a></li>
	</ul>

</aside>


<?php get_footer(); ?>


