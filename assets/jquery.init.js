jQuery.noConflict();
     

jQuery(document).ready(function(){
  
  // Show contact info on click
  jQuery("#contact li").click(function() {
    jQuery(this).next().toggleClass('hidden', 1000).slow();
  });

  // Creating TOC for products and articles
  var toc = jQuery("#article #body > :header:not(h4,h5,h6)");
  if ( toc.size() > 0) {
    jQuery("#article #toc").removeClass('hidden');
    var res = "<ul class='underlined'>";
    toc.each(function(index) { 
      var ref = "id" + index;
      var id = jQuery(this).attr("id");
      jQuery(this).attr("id", ref);
      res = res + "<li><a href='#" + ref + "'>" + this.innerHTML + '</a></li>';
    });
    res += "</ul>";
    jQuery("#article #toc").append(res);
  }

  // Show features on footer icons
  jQuery("#footer #icons img").click(function() {
    var txt = jQuery(this).attr('title');
    jQuery("#footer #text h2").html(txt);
  });
     
    
}); 
