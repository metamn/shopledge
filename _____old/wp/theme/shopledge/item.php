<?php 
  $imgs = post_attachements($post->ID);
  
  if ($portfolio) {    
    if ($mobile) {
      $img = $imgs[0];
      $image = wp_get_attachment_image_src($img->ID, 'full'); /* 400x300 */
    } else {
      $img = $imgs[1];
      $image = wp_get_attachment_image_src($img->ID, 'full'); /* 925x385 */
    }    
  } else {
    $img = $imgs[0];
    $image = wp_get_attachment_image_src($img->ID, 'full'); /* 400x300px */
  } 
  
?>

<div id="item" <?php post_class('block') ?>>
  <?php if ($image[0]) { ?>
    <div class="image">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >	    
        <img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>" />
      </a>
    </div>
    
    <?php if ($portfolio) { ?>
      <div class="title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >	
          <?php the_excerpt(); ?>
        </a>
      </div>
    <?php } else { ?>
      <div class="title">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
    <?php } ?>
    
    <div class="meta">
      <span><?php the_time('M d, Y') ?></span>  
    </div>  
    
    
  <?php } else { ?>
    <div class="noimage">
      <div class="meta">
        <span><?php the_time('M d, Y') ?></span>        
      </div> 
    
      <div class="title">
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>  
    </div>
  <?php } ?>
  
  <div class="tags">
    <ul>
    <?php 
      // Portfolio category excluded
        // the_category('<br/>');
        // the_tags('<br/>', '<br/>');
      
      $cats = get_the_category();
      if ($cats) { 
        foreach ($cats as $c) {
          if (!($c->cat_ID == PORTFOLIO)) {
            echo '<li><a href="' . get_category_link($c->cat_ID) . '" title="View all posts under ' . $c->name .'">';
            echo $c->name . '</a>' . '</li>';
          }          
        }
      }
    ?>      
    <?php the_tags('<li>', '</li><li>', '</li>'); ?>
    </ul>      
  </div>
</div>
