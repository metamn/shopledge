module Jekyll

  # Extending Site
  class Site
    
    # collecting all categories into an array
    def all_categories
      ret = []
      self.posts.each do |p|
        ret << p.categories
      end
      ret.flatten.uniq
    end
    
    # collecting all links into an array
    # ERR: anytime invoking p.links gives and error ....
    def all_links
      []
    end
    
    # make the new methods accessible via Liquid
    alias orig_site_payload site_payload
    def site_payload
      h = orig_site_payload
      payload = h["site"]
      payload["all_categories"] = all_categories
      payload["all_links"] = all_links
      h["site"] = payload
      h
    end
    
  end
end
