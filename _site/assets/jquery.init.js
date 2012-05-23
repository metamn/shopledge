jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Article 2 Infographics
  //jQuery(".article2 #revenue li, .article2 #op1 li, .article2 #op2 li, .article2 #ad li").hide();
  //jQuery(".article2 #revenue li").first().show();
  //jQuery(".article2 #op1 li").first().show();
  //jQuery(".article2 #op2 li").first().show();
  //jQuery(".article2 #ad li").first().show();
  
  jQuery(".article2 ul.normal li").hide();
  jQuery(".article2 ul.normal #tier1").show();
  
  jQuery(".article2 #revenue #tier1").click(function(){
    jQuery(this).addClass('highlight');
    jQuery(".article2 #op1 #tier1").hide();
    jQuery(".article2 #revenue #tier2, .article2 #op1 #tier2").show();    
  });
  
  jQuery(".article2 #revenue #tier2").click(function(){
    jQuery(".article2 #revenue #tier2.link, .article2 #op1 #tier2").hide();
    jQuery(".article2 #revenue #tier3, .article2 #op1 #tier3").show();    
  });
  
  jQuery(".article2 #ad #tier1").click(function(){
    jQuery(this).addClass('highlight');
    jQuery(".article2 #op2 #tier1").hide();
    jQuery(".article2 #ad #tier2, .article2 #op2 #tier2").show();    
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
