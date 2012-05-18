---
layout: article
type: product
uid: 201105041
title: Scrol Theme for Shopify
duration: 1.5
client:
  - title: Shopify
    url: http://shopify.com
home: http://scrol.myshopify.com
categories: 
  - Shopify
  - design
  - featured
similar:
  - 201105042
  - 201105043
images:
  # 0
  - title: Scrol Theme for Shopify
    url: /images/Scrol-frontpage.png 
    large: Scrol-frontpage.png
  # 1
  - title: Scrol - Collections page
    url: /images/Scrol-collections.png
  # 2
  - title: Scrol - Product page
    url: /images/Scrol-product.png  
tools:
  # 0
  - title: DD Roundies 
    url: http://www.dillerdesign.com/experiment/DD_roundies/
  # 1
  - title: jQuery Scroll To
    url: http://flesler.blogspot.com/2007/10/jqueryscrollto.html
people:
  # 0
  - title: Diller Design
    url: http://www.dillerdesign.com/
  # 1
  - title: Ariel Flesler
    url: http://flesler.blogspot.com/
code:
  # 0
  - title: Shopify collections get current product type or vendor
    url: https://gist.github.com/960375
  # 1
  - title: Multiple Scroller
    url: https://gist.github.com/960378
---

### The idea

With Scrol we tried to create a Shopify theme displaying as much information as possible on frontpage.

Like latest products, products on sale, shop & shopping information, product categories, vendors and types ... and so on.

Such antre should generate high impact on first-time visitors, and in return, 
regular customers would immediately catch up with the latest news with the store.


### Design

A site with busy content must look simple, clean and straightforward. 
That's why we've decided to use only a minimum set of colors and decoration.

Exception is the collections page where the navigation menu structure *forced* us to use more colors.

![{{ page.images[1].title }}]({{ page.images[1].url }})

### Unique design elements

The circle-shaped shopping cart info and the warm, texturised background meant to watermark this work.
And the large typography of course.

The rounded shopping cart is done exclusively with CSS and supports Internet Explorer via 
[{{ page.tools[0].title}}]({{ page.tools[0].url }}) by {{ page.people[0].title }}.

### Mobile and tablet support

Adapting Scrol to tablet and mobile displays was an easy task: the site has quite a linear grid, no assymmetry in vertical
or horizontal positioning.
Staying responsive in this case meant to stretch the layout when display size lowers and align columns vertically.


### Tricks to share

#### jQuery ScrollTo with many scrollables on a single page

It was not trivial to make six scrollables on the frontpage with 
[{{ page.people[1].title }}]({{ page.people[1].url }})'s 
[{{ page.tools[1].title }}]({{ page.tools[1].url }}).
But there you are with the 
[hack]({{ page.code[1].url }}).

 

#### Finding out which Product Type or Vendor is active on collections page

Shopify unfortunately must be hacked many times to obtain *usual* features and functionality. 
This [hack]({{ page.code[0].url}}) uses jQuery to parse the collection URL and find out which product type or vendor is currently browsed.




