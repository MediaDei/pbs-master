<?php
/*
Template Name: News Archives
*/?>

<?php get_header(); ?>

	
	<div role="img" class="hero-image post"></div>
	<div class="page-title"><h1>News Archives</h1></div>
</header>


<?php 
	global $post;
	$posts = get_posts();
?>
<?php foreach($posts as $post) : setup_postdata($post); ?>

<section class="post-archive">
	<article id="post-<?php the_ID(); ?>" class="p">

		<h2 class="post-title"><a href="<?php the_permalink(); ?>#read" class="item"><?php the_title(); ?></a></h2>
		<time class="line" datetime="<?php echo get_the_date('Y-m-d'); ?>" title="<?php echo get_the_date('F j, Y'); ?>">
			<?php echo get_the_date('F j, Y'); ?>
		</time>
		<time class="circle">
			<div class="top"><?php echo get_the_date('M'); ?></div>
			<div class="bottom"><?php echo  get_the_date('d'); ?></div>
		</time>

		<p><?php echo wp_trim_words( get_the_content(), 75 ); ?></p>
		<a class="button smallcaps" href="<?php the_permalink(); ?>#read">Read →</a>
		<hr class="fleuron">

	</article>
</section>

<?php endforeach; ?>

<?php get_footer(); ?>


