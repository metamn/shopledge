<?php
/*
Template Name: Likes
 * @package WordPress
*/

  get_header();
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>		
	<div id="content" class="block">
	  <div id="article">	
	    <?php 
	      the_content(); 
	      $books = get_bookmarks();
	      foreach ($books as $b) { ?>
	        <div id="item" class="block">
	          <a href="<?php echo $b->link_url ?>" title="<?php echo $b->link_name ?>">
	            <div class="image left">
	              <img src="<?php echo $b->link_image ?>" alt="<?php echo $b->link_url ?>" />
	            </div>
	            <div class="text left">
	              <?php echo $b->link_name ?>
	              <p><?php echo $b->link_description ?></p>
	            </div>
	          </a>
	        </div>
	      <?php } ?>    	    
	  </div>
    <div id="sidebar" class="<?php echo $klass ?>">
      <?php get_sidebar(); ?>    
    </div>
  </div>
<?php endwhile; ?>


<?php get_footer() ?>
