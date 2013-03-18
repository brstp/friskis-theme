<?php
/**
 * The loop that displays a page.
 *
 */
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<h4>Skrivet av <em><?php the_author(); ?></em> i <em><?php $category = get_the_category(); echo $category[0]->cat_name; ?></em></h4>
	<h4>Etiketter: <em><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ','; 
  }
}
?></em></h4>

	<?php the_content(); 
	if(in_category('11')):
		
	else:
		comments_template();
	endif;?>
<?php endwhile; // end of the loop. ?>    
