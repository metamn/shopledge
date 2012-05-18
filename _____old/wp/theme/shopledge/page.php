<?php
/**
 *
 * @package WordPress
 */

get_header(); ?>

<?php 

  $params = str_replace("%5B%5D", "", $_SERVER['QUERY_STRING']);		
  $klass = '';
	if ($params) {
	  if (!(strpos($params, "comment=") === false)) {
	    $klass = 'show-comments';
	  }
	}
?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
	<div id="content" class="block">
	  <div id="article">	
	    <?php the_content(); ?>    
	  </div>
    <div id="sidebar" class="<?php echo $klass ?>">
      <?php get_sidebar(); ?>    
    </div>
  </div>
<?php endwhile; ?>


		
<?php get_footer(); ?>
