<?php get_header(); ?>

<div class="page-title"><h1>Anglican Way Magazine</h1></div>

<?php
/*
(https://codex.wordpress.org/The_Loop#Multiple_Loops)
the challenge is to retreive two levels of information from a single loop pass through
*/
$attachments = array();
$key = 0;
$i = 0;//used to count posts for grid
$vol = 0;//used to count volume/issue per year
$newSection;
$date;
$dateCompare;
$docArgs = array(
	'post_type' 			=> 'attachment',
	'category' 				=> 'magazine,magazine-thumbnail',
	'orderby'					=> 'title',
	'order' 					=> 'DESC',
	'post_status'    	=> 'inherit',
	'posts_per_page'	=> '-1'
);
$query = new WP_Query($docArgs);

class attachment{
	public $id;
	public $fileName;
	public $mimeType;	
}
while ($query->have_posts()){
	$query->the_post();
	$object = new attachment();
	$object->mimeType=get_post_mime_type();
	$object->id=get_the_ID();
	$id=$object->id;
	$object->fileName=basename(get_attached_file($id));
	$attachments[$key] = $object;
	$key++;
}

foreach ($attachments as $j => $attachment) {

	$date=substr($attachment->fileName, 0, 4);
	//use first 4 characters of fileName as the date, sorting posts by title to simulate orderby => date. This allows us to avoid having to change upload date of each attachment to match magazine publication date

	if($attachment->mimeType==="application/pdf"){

		if($dateCompare!=$date){//close section when date changes and start new section
			echo '</section>';
			$newSection = true;
		}
		$dateCompare = $date;//update $date with current attachment's date
		$i++;//increment grid counter
		$vol++;//increment volume/issue counter

		if($newSection){
			?>
			<section class="print-magazine">
				<h1><?php echo substr($attachment->fileName, 0, 4); ?></h1>
			<?php
			$newSection = false;
			$i=1;//restart grid counter for new section
			$vol=1;//restart volume/issue numbers for new section
		}//endif
		
		if($i===1){
			?>
			<div class="wrapper two">
			<?php
		}//endif
		
		echo '<div class="grid-1-2">
			<h2>Vol.'.$vol. ' ' .substr($attachment->fileName,0,4). '</h2><a href="'.wp_get_attachment_url($attachment->id).'">';

			//inner/image loop
			$noCover=true;
			foreach ($attachments as $k => $attachment2){

				if($attachment2->mimeType==="image/gif" || $attachment2->mimeType==="image/jpeg" || $attachment2->mimeType==="image/png"){

					if(substr($attachment->fileName, 0, -4)===substr($attachment2->fileName, 0, -10)){
						echo '<img src="'.wp_get_attachment_url($attachment2->id).'"/>';
						$noCover = false;
					}
				}//end if image
			}//end inner/image loop

			if($noCover){//if no cover found, use placeholder
				?>
				<img src="<?php bloginfo('template_url'); ?>/images/magazine-placeholder.gif"/>
				<?php
			}		
		  ?>

			</a><!--close anchor wrapping img-->
	  </div><!--close grid-1-2-->

	  <?php
	  if($i===2){//close wrapper two if grid is complete with two grid-1-2 divs
		?>
		</div>
		<?php $i=0;
		}

	}//end if pdf
}//end main loop

if(!$newSection){//if loop ends with open section, close section	
	echo '</section>';
}
?>

<?php get_footer(); ?>