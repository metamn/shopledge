jQuery.noConflict();
     

jQuery(document).ready(function(){

  // Shipping info
  jQuery("#article #buy #help span").click(function() {
    jQuery("#article #buy #help #shipping").slideToggle();
  });

  // Article 2 navigation
  jQuery(".article2 #revenue").click(function() {        
    var klass = jQuery(this).attr('class');
    
    if (klass == "click0") {
      jQuery(this).attr('class', 'click1');
    }  
    
    if (klass == "click1") {
      jQuery(this).css('cursor', 'auto');
    }
    
    var content = ".article2 #" + klass;    
    var n = jQuery(content).html();    
    jQuery(this).html(n);          
  });
  jQuery(".article2 #ad").click(function() {               
    var n = jQuery(".article2 #ad2").html();    
    jQuery(this).html(n);   
    jQuery(this).css('cursor', 'auto');       
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
