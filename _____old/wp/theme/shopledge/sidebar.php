
<div id="contact" class="block">
  <ul class="inline-list">
    <li>
      <a href="<?php bloginfo('rss2_url'); ?>" title="Subscribe to the content feed">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/rss.png" alt="Subscribe to the content feed">
        </a>
    </li>
    <li>
      <?php if ((is_single()) || is_page() && (!is_page('Portfolio'))) {?>
        <a href="#comments" class="comments-link link" title="Leave a message">
      <?php } else { ?>
        <a href="<?php bloginfo('stylesheet_directory'); ?>/about/?comment=&" class="comments-link-2 link" title="Contact us">
      <?php } ?>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mail.png" alt="Contact us" title="Contact us">
      </a>
    </li>
    <li>
      <a href="http://twitter.com/shopledge" title="Follow us on Twitter">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" alt="Follow us on Twitter">
        </a>
    </li>   
    <li>
      <a href="#search" class="search-link link" title="Search">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png" alt="Search">
        </a>
    </li> 
    <li>
      <a href="<?php bloginfo('home'); ?>/portfolio/likes" title="Likes">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/favorite.png" alt="Likes">
      </a>
    </li>   
  </ul>
</div>


<div id="search" class="block hidden">
  <?php get_search_form(); ?> 
</div>


<?php 
  $klass = '';
  if (!(is_page('about'))) {
    $klass = "hidden";
  }
?>

<div id="comments-block" class="block <?php echo $klass ?>">
  <?php comments_template( '', true ); ?>
</div>



