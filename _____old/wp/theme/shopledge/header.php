<?php
/**
 * @package WordPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="google-site-verification" content="lN7-_uO-Xudv92z_IIFU1SO-LgXc1U-9k69NGQudblI" />

  <title>
  <?php	
	  global $page, $paged;
	  wp_title( '/', true, 'right' );	  
	  
	  $site_description = get_bloginfo( 'description', 'display' );
	  if ( $site_description && ( is_front_page() ) )
		  echo "$site_description / ";

	  if ( $paged >= 2 || $page >= 2 )
		  echo sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );	  
		  echo " / ";
	    bloginfo( 'name' );	  
	  ?>
	</title>
	<?php
	  if ( is_singular() && get_option( 'thread_comments' ) )
		  wp_enqueue_script( 'comment-reply' );
	?>
	
	
	
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/base.css" charset="utf-8" media="screen,projection" type="text/css" rel="stylesheet" />  
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/typography.css" charset="utf-8" media="screen,projection" type="text/css" rel="stylesheet" />    
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/wordpress.css" charset="utf-8" media="screen,projection" type="text/css" rel="stylesheet" />      
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/grid.css" charset="utf-8" media="screen,projection" type="text/css" rel="stylesheet" /> 
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" charset="utf-8" media="screen and (max-width: 480px)" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/tablet.css" charset="utf-8" media="screen and (min-width: 481px) and (max-width: 1024px)" rel="stylesheet" type="text/css" />
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/large.css" charset="utf-8" media="screen and (min-width: 1400px)" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo( 'stylesheet_url' ); ?>"  media="all" type="text/css"rel="stylesheet" /> 
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/theme.css" charset="utf-8" media="screen,projection" type="text/css" rel="stylesheet" />    
	
	
	<link href='http://fonts.googleapis.com/css?family=Meddon' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>

	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script>!window.jQuery && document.write('<script src="/wp-includes/js/jquery/jquery.js"><\/script>')</script>	
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.init.js"></script>
	
	<script language="javascript">
  writeCookie();
  function writeCookie() {
    var today = new Date();
    var the_date = new Date("December 31, 2023");
    var the_cookie_date = the_date.toGMTString();
    var the_cookie = "screen="+ screen.width;
    var the_cookie = the_cookie + ";expires=" + the_cookie_date;
    document.cookie=the_cookie;
  }
  </script> 
	
<?php
	wp_head();
?>
</head>

<?php 
	  $klass = "";
	  if (is_home() || is_category() || is_archive() || is_search() || is_404() ) {
	    $klass = 'collection';
	  } elseif (is_page() || is_single()) {
	    $klass = 'page';
	  }	
	  if (is_front_page()) {
	    $id = "index";
	    $klass = 'index';
	  } else {
	    $id = "";
	  }	  
	  if (is_page('Images')) {
	    $klass = 'portfolio-images';
	    $id = 'portfolio-images';
	  }  
	  if (is_page("Likes")) {
	    $id = 'likes';
	  }
	?>
	


<body class="<?php echo $klass ?>">   
  <div id="header" class="block">
	  <div class="container">
	  
	    <?php if (is_front_page()) { ?>
	      <center>	  
	    	<div id="site-name" class="block">
			    <a href="<?php bloginfo( 'home' ) ?>" title="<?php bloginfo( 'name' ) ?>">
		        <h1 class="site-name"><?php bloginfo('name'); ?></h1>
		      </a>
		    </div>
		    
		    <div id="site-description" class="block">			    
	        <h2 class="site-description">
	          <a href="<?php bloginfo( 'home' ) ?>/tag/webshop"><span class="webshop">Webshop</span></a> 
	          <a href="<?php bloginfo( 'home' ) ?>/tag/webdesign"<span class="design">design</span></a> & 
	          <a href="<?php bloginfo( 'home' ) ?>/tag/development"<span class="development">development</span> 
	        </h2>
		    </div>	      
		      
		    <div id="menu" class="block">
		      <ul id="menu" class="inline-list menu">
			      <?php wp_list_pages('depth=1&exclude='.STARTPAGE.'&title_li=');?>			    
			    </ul>
			  </div>	
			  </center>	   
			  
			<?php } else { ?>
			
			  <div class="inside">	
			    <center>		  
			    <div id="logo">
			      <a href="<?php bloginfo( 'home' ) ?>" title="<?php bloginfo( 'name' ) ?>">
            <h1 class="logo">
              &nbsp;&nbsp;&nbsp;___&nbsp;/\ <br/>
              \__/ <br/>
              *&nbsp;*
            </h1>
            </a>
          </div>
          </center>
          
          <div id="site-name" class="block">
			      <a href="<?php bloginfo( 'home' ) ?>" title="<?php bloginfo( 'name' ) ?>">
		          <h1 class="site-name"><?php bloginfo('name'); ?></h1>
		        </a>
		      </div>
		      
		      <div id="menu" class="block">
		        <ul class="inline-list menu">
			        <?php wp_list_pages('depth=1&exclude='.STARTPAGE.'&title_li=');?>			    
			      </ul>
			    </div>			 
			 </div>		
			
			<?php } ?> 			
		</div>
	</div>
	

  <div id="<?php echo $id ?>" class="block <?php echo $klass ?>"> <!-- closed in footer -->
    <div class="container"> <!-- closed in footer -->



