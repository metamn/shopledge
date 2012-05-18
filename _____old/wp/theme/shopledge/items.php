

<?php 
  
  if(isset($HTTP_COOKIE_VARS["screen"])) {
    $screen = $HTTP_COOKIE_VARS["screen"];
  }
  
  if ($screen < 800) {
    $mobile = true;
  }
  
  if ($items) {
    while ($items->have_posts()) : $items->the_post(); update_post_caches($posts); 
      setup_postdata($post);
      include "item.php";        
    endwhile;
  } else {
    if (have_posts()) {
      while (have_posts()) : the_post();
        setup_postdata($post);  
        include "item.php";        
      endwhile;
    } else {
      if (!$content) {
        echo '<h5>Nothing found.</h5>';
        echo '<p>Please use the menu for navigation or check out the sitemap.</p>';      
      }    
    }
  }
?>
  
