<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 */

get_header(); ?>


<div id="content" class="block">    
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); 
    $postid = $post->ID;
  ?>
    <div id="article" <?php post_class('block') ?>>
	    <div id="aside" class="col-1 block">
	      <div class="meta">
	        <?php the_time('F j'); ?>
	        <br/>
	        <?php the_time('Y'); ?>
	        <hr/>
	      </div>
	      	      
	      <div class="tags">
          <?php 
            // Portfolio category excluded
              // the_category('<br/>');
              // the_tags('<br/>', '<br/>');
            
            $cats = get_the_category();
            if ($cats) { ?>
            <ul>
              <?php foreach ($cats as $c) {
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
        
        <div class="share">
          <a href="http://twitter.com/share?url=<?php the_permalink(); ?>" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
          <script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like layout="button_count" show_faces="false" width="450"></fb:like>
        </div>        
        <div class="clear"></div>
        
        <div id="toc" class="hidden">
          Table of contents
          <hr/>
        </div>
	    </div>
	    
	    
	    <div id="body" class="col-2 block">
	      <div class="title">
		      <h2 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>      
        </div>		
        
        <div class="images">          
	        <?php 
            $imgs = post_attachements($post->ID);
            foreach ($imgs as $img) {
              $th = wp_get_attachment_image_src($img->ID, 'thumbnail');
              $l = wp_get_attachment_image_src($img->ID, 'full'); ?>              
              <div class="img">
                <a href="<?php echo $l[0] ?>" class="lightbox" rel="lightbox-group">
                  <img src="<?php echo $th[0] ?>" alt="<?php the_title(); ?>" />
                </a>
              </div>              
            <?php }                        
          ?>          
        </div>
        <div class="clear"></div>
	
	      <div class="body">    
          <?php the_content(); ?>          
        </div>
        
	      <div class="comments">	      
	        <?php comments_template( '', true ); ?>
	      </div>
	    </div>
	    
	    <div id="main-image" class="block">
	      <?php 
	        $imgs = post_attachements($post->ID);
	        $img = $imgs[1];
	        $image = wp_get_attachment_image_src($img->ID, 'full');
	        $link = get_post_meta($post->ID, 'link', true);
	        
	        if ($image[0]) { ?>
	        <a href="<?php echo $link ?>" target="_blank" title="Visit <?php echo $link ?>">
	          <img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>" /></a>
	        <?php } ?>
	    </div>
	    
	    <div id="navigation" class="block">
        <div class="col-a left alignleft"><?php next_post_link('&larr; %link') ?></div>
        <div class="col-b right alignright"><?php previous_post_link('%link &rarr; ') ?></div>
      </div>
	    
	    	    					
	  </div>				    
  <?php endwhile; ?> 
  
  <div id="sidebar" class="article"> 
    <center>
    <?php get_sidebar(); ?>    
    </center>
  </div>
</div>

<?php get_footer(); ?>
