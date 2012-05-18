jQuery.noConflict();

    
// Use jQuery via jQuery(...)
jQuery(document).ready(function(){

  // Creating TOC
  var toc = jQuery(".page #article #body .body > :header:not(h3,h4,h5,h6)");
  if ( toc.size() > 0) {
    jQuery(".page #article #aside #toc").removeClass('hidden');
    var res = "<ul>";
    toc.each(function(index) { 
      var ref = " id" + index;
      var id = jQuery(this).attr("id");
      jQuery(this).attr("id", id + ref);
      res = res + "<li><a href='#" + ref + "'>" + this.innerHTML + '</a></li>';
    });
    res += "</ul>";
    jQuery(".page #article #aside #toc").append(res);
  }

  // Toggle larger images on Inspirations
  jQuery("#inspiration #item span.original").click(function(){
    var link = jQuery(this).parent().parent().children('img').attr('rev');
    var str = '<div id="item" class="original">';
    str += '<img src="' + link + '" />';
    str += '</div>';
    jQuery(this).parent().parent().after(str);
  });
  jQuery("#inspiration #item span.large").click(function(){
    var link = jQuery(this).parent().parent().children('img').attr('rel');
    var str = '<div id="item" class="large">';
    str += '<img src="' + link + '" />';
    str += '</div>';
    jQuery(this).parent().parent().after(str);
  });

  // Toggle comments
  jQuery(".switch-comments").click(function(){
    jQuery("#comments").slideToggle(200);
  });
  
  
  // Sidebar Contact us  
  jQuery(".comments-link").click(function(){
    jQuery("#comments").slideToggle(200);
  });
  
  // Sidebar Search
  jQuery(".search-link").click(function(){
    jQuery("#search").slideToggle(200);
  }); 
  
  
  
    
  jQuery("#menu li").hover(
    function () {      
      jQuery(this).addClass("current_page_item-2");
    },
    function () {
      jQuery(this).removeClass("current_page_item-2");
    }
  );
  
  jQuery("#items #item").hover(
    function () {   
      jQuery(this).addClass("highlight-item");   
      jQuery(this).children(".image").children("a").children("img").addClass("highlight-image");
      jQuery(this).children(".title").addClass("highlight-title");
      jQuery(this).children(".meta").addClass("highlight-meta");
    },
    function () {
      jQuery(this).removeClass("highlight-item");
      jQuery(this).children(".image").children("a").children("img").removeClass("highlight-image");
      jQuery(this).children(".title").removeClass("highlight-title");
      jQuery(this).children(".meta").removeClass("highlight-meta");
    }
  );
});   
