<?php
/**
 * @package WordPress
 */

get_header(); ?>



<div id="items" class="block">
  <?php 
    if (have_posts()) { 
		  $post = $posts[0]; // Hack. Set $post so that the_date() works.	
		  $count = count($posts);	
		  rewind_posts();
 	  } 
    
    if (is_category()) { 
      $title = single_cat_title('', false); 
      $content = page($title); 	      
    } elseif( is_tag() ) { 
      $title = single_tag_title('', false);
      $content = page($title); 
    } elseif (is_day()) { 
      $title = get_the_time('F jS, Y'); 
    } elseif (is_month()) { 
      $title =  get_the_time('F, Y');
    } elseif (is_year()) { 
      $title =  get_the_time('Y'); 
    } elseif (is_home()) {
      $title = "Blog";
    }
    
	  
	  if ($title && (!is_home()) ) {
	    echo '<h2 class="page-title">' . $title . ' // ' . $count . ' item' . ($count == 1 ? '' : 's') . '</h2>';
	  }
				
	  if ($content) { ?>
	    <div id="content-from-page" class="block">
	      <?php echo $content; ?>
	    </div>
	  <?php }
		  
    include "items.php" ; ?>      
    
    <div id="pagination">
      <?php if (function_exists(wp_pagenavi)) wp_pagenavi();  ?>	  
	  </div>	  
</div>

<div id="sidebar" class="block"> 
  <?php get_sidebar(); ?>    
</div>
	
<?php get_footer(); ?>
