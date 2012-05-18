<?php
/*
Template Name: Images
 * @package WordPress
*/

  get_header();
?>

<div id="items" class="block">
  <?php 
  
    if(isset($HTTP_COOKIE_VARS["screen"])) {
      $screen = $HTTP_COOKIE_VARS["screen"];
    }
    
    if ($screen < 800) {
      $mobile = true;
    }
  
  
    $items = query_posts2('posts_per_page=-1&cat='.PORTFOLIO); 
        
    if ($items) {
      while ($items->have_posts()) : $items->the_post(); update_post_caches($posts);
	      $imgs = post_attachements($post->ID);
        if ($imgs) {
          foreach ($imgs as $img) {
            if (!($mobile)) {
              $image = wp_get_attachment_image_src($img->ID, 'medium');
            } else {
              $image = wp_get_attachment_image_src($img->ID, 'thumbnail');
            }            
            if ($image[0]) { ?>
              <div id="item-thumbs">	 
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >	    
                  <img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>" />
                </a>            
              </div>
            <?php }
          }
        }          
      endwhile; 
    } ?>
</div>

<?php get_footer() ?>
