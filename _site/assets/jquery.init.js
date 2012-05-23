jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Article 2 Infographics
  jQuery(".article2 ul").hide();
  jQuery(".article2 ul.first").show();
  
  jQuery(".article2 #revenue").click(function() {
    jQuery(".article2 #l2").slideToggle();
    jQuery(this).toggleClass('highlight1');
    jQuery(".article2 #l2 #title").addClass('highlight1');
  });
  
  jQuery(".article2 #visit").click(function() {
    jQuery(".article2 #l3").slideToggle();
    jQuery(this).toggleClass('highlight2');
    jQuery(".article2 #l3 #title").addClass('highlight2');
  });
  
  jQuery(".article2 #ad").click(function() {
    jQuery(".article2 #l4").slideToggle();
    jQuery(this).toggleClass('highlight3');
    jQuery(".article2 #l4 #title").addClass('highlight3');
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
     
    
}); 
