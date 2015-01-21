<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
update_option('current_page_template','search');
get_header(); ?>

	<div id="gap"></div>
	<div id="content" class="clearfix">
	<div id="sidebar">
		<div class="subSidebarBox">
			<img class="yellow" src="<?php echo THEME_IMAGES; ?>/yellow.png" alt="tape">
			<h3><span><?php _e('Nyheter', 'friskis-svettis'); ?></span></h3>
				<ul>
				<?php
				$news_query = new WP_Query(array(
						"post_type" => 'fs_news',
						"posts_per_page" => 4,
					));
				while ($news_query->have_posts()) : $news_query->the_post();
					?>
					<li>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?>...</a> <a class="readMore" href="<?php the_permalink(); ?>"><?php _e('Läs mer', 'friskis-svettis'); ?> »</a></p>
					</li>
				<?php	
					endwhile;
				?>
				</ul>
		</div>
	
	</div>
	<div id="mainContent" class="mainContent">
	<h1>Sökresultat för "<?php echo get_search_query(); ?>"</h1>
             <?php
            
             get_template_part('loop', 'search' );
            ?>
	</div>
	<div id="sidebarRight">
		<img src="<?php echo THEME_IMAGES; ?>/friskis2.jpg" alt="Friskis2"><br><br>
		<img src="<?php echo THEME_IMAGES; ?>/villdubli.jpg" alt="Vill du bli"><br><br>
		<img src="<?php echo THEME_IMAGES; ?>/miniroris.jpg" alt="MiniRöris">
	</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
