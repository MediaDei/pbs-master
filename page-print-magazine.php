<?php get_header(); ?>

<div class="page-title"><h1>Anglican Way Magazine</h1></div>

<?php

/*
wp loop starts
	while have documents, get all documents
		store the_title() in a $currentDoc variable
		store the_date() in $currentDocDate variable
		while have images, get all images
			store the_title() in a $currentImage variable
			if $currentDoc+'-thumbnail' === $currentImage, && $currentDocDate===the_date(); (only year)
				get image src
			endif
			else
				get placholder src (blank grey rectangle)
			endelse
		end while
	end while
wp loop ends


name docs with $i counter




upload file issue1.pdf
	root/2016/07/issue1.pdf
upload file issue1-thumbnail.jpg
	root/2016/07/issue1-thumbnail.jpg
wp loop starts
	<img src="<?php the_permalink(); ?>"




(https://codex.wordpress.org/The_Loop#Multiple_Loops)
the challenge is to retreive two levels of information from a single loop pass through

*/



$magazines = array();
$key = 0;
$i = 0;//used to count posts for grid
$vol = 0;//used to count volume/issue per year
$newSection;
$dateCompare;
$docArgs = array(
	'post_type' => 'document',
	'category' 	=> 'magazine,magazine-thumbnail',
	'orderby'		=> 'date',
	'order' 		=> 'DESC'
);
$query = new WP_Query($docArgs);

class magazine{
	public $name;
	public $date;
	public $link;
	public $category;
}
while ($query->have_posts()){
	$query->the_post();
	$object = new magazine();
	$object->name=get_the_title();
	$object->date=get_the_date(Y);
	$object->link=get_permalink();
	$categories=get_the_category();
	$object->category=$categories[0]->slug;
	$magazines[$key] = $object;
	$key++;
}

foreach ($magazines as $j => $magazine) {
	if($magazine->category==="magazine"){
	if($dateCompare!=$magazine->date)
		$newSection = true;
	$dateCompare = $magazine->date;

	if($newSection){
		?>
		<section class="print-magazine">
			<h1><?php echo $magazine->date; ?></h1>
		<?php
		$newSection = false;
	}//endif
	
	if($i===1){
		?>
		<div class="wrapper two">
		<?php
	}//endif
	
	
	
	echo '<div class="grid-1-2">
		<h2>Vol.'.$vol. ' ' .$magazine->date . '</h2>
		<a href="'.$magazine->link.'">';
		foreach ($magazines as $k => $value){
			if(($value->name)===$magazine->name.'-thumbnail'){
				echo '<img src="'.$value->link.'">';
			}
		}		
	  ?>

		</a><!--close anchor wrapping img-->
  </div><!--close grid-1-2-->

  <?php



	}//endifmag
}//endforeach


if($i % 2 != 0){
	?>
	</div><!--close wrapper two if odd number of posts-->
	<?php $i=0;
}//endif

if(!$newSection){
	?>
	</section>
	<?php
}//endif
?>

<?php get_footer(); ?>


















	<!--
	<h1>2015</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.1 2015</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2015-01.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2015-01-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Vol.2 2015</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2015-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2015-02-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.3 2015</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2015-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2015-03-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2 class="missing">Vol.4 2015</h2>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2014</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2 class="missing">Vol.1 2014</h2>
		</div>
		<div class="grid-1-2">
			<h2>Vol.2 2014</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2014-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2014-02-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.3 2014</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2014-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2014-03-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2 class="missing">Vol.4 2014</h2>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2013</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.1 2013</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2013-01.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2013-01-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Vol.2 2013</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2013-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2013-02-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.3 2013</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2013-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2013-03-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Vol.4 2013</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2013-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2013-04-cover.jpg"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2012</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.1 2012</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2012-01.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2012-01-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Vol.2 2012</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2012-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2012-02-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2 class="missing">Vol.3 2012</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2012-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2012-03-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2 class="missing">Vol.4 2012</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2012-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2012-04-cover.jpg"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2011</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.1 2011</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2011-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2011-02-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Vol.2 2011</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2011-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2011-03-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Vol.3 2011</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2011-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2011-04-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2 class="missing">Vol.4 2011</h2>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2010</h1>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Winter 2010</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2010-01.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2010-01-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Spring 2010</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2010-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2010-02-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper two">
		<div class="grid-1-2">
			<h2>Summer 2010</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2010-03.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2010-03-cover.jpg"/></a>
		</div>
		<div class="grid-1-2">
			<h2>Fall 2010</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2010-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2010-04-cover.png"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2009</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2009</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2009-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2009-01-02-cover.jpg"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2009</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2009-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2009-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>May/June 2009</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2009-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2009-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2009</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2009-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2009-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">September/October 2009</h2>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">November/December 2009</h2>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2008</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>May/June 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-05-06-cover.jpg"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2008</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2008-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2008-11-12-cover.gif"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2007</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2007</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2007-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2007-11-12-cover.gif"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2006</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>May/June 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">September/October 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2006</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2006-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2006-11-12-cover.gif"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2005</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2005</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2005-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2005-11-12-cover.gif"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2004</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2004</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2004-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2004-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2004</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2004-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2004-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2004</h2>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2004</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2004-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2004-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2004</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2004-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2004-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2004</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2004-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2004-11-12-cover.gif"/></a>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2003</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2003</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2003-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2003-01-02-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2003</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2003-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2003-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2003</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2003-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2003-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2003</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2003-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2003-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2003</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2003-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2003-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">November/December 2003</h2>
		</div>
	</div>
</section>


<section class="print-magazine">
	<h1>2002</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>January/February 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-01-02.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-01-02-cover.jpg"/></a>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2002</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2002-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2002-11-12-cover.gif"/></a>
		</div>
	</div>
</section>

<section class="print-magazine">
	<h1>2001</h1>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2 class="missing">January/February 2001</h2>
		</div>
		<div class="grid-1-3">
			<h2>March/April 2001</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2001-03-04.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2001-03-04-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2 class="missing">May/June 2001</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2001-05-06.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2001-05-06-cover.gif"/></a>
		</div>
	</div>
	<div class="wrapper three">
		<div class="grid-1-3">
			<h2>July/August 2001</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2001-07-08.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2001-07-08-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>September/October 2001</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2001-09-10.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2001-09-10-cover.gif"/></a>
		</div>
		<div class="grid-1-3">
			<h2>November/December 2001</h2>
			<a href="<?php bloginfo('template_url'); ?>/files/2001-11-12.pdf"><img src="<?php bloginfo('template_url'); ?>/files/2001-11-12-cover.gif"/></a>
		</div>
	</div>
</section>
-->

