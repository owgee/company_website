
<div class="container">
    <div class="row-fluid">
	<div class="span12">
	    <div class="breadcrumb-container">
		<ul class="breadcrumb">
		    <li><a href="http://preview.themique.com/ventus/">Home</a></li><span class="divider"> / </span><li class="active">Blog</li>
		</ul>
	    </div>
	</div>
    </div>
</div>
<!-- FEATURES
================================================== -->
<div class="container ">
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid">
		<section id="nav_menu-2" class="widget-side span12 widget_nav_menu">
		    <div class="menu-shortcodes-container">
			<ul id="menu-shortcodes" class="menu nav nav-list">
			    <li id="menu-item-1860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1860 first"><a href="http://preview.themique.com/ventus/shortcodes/">SHORTCODES</a></li>
			    <li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858"><a href="http://preview.themique.com/ventus/shortcodes/accordions/">ACCORDIONS</a></li>
			    <li id="menu-item-1857" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1857"><a href="http://preview.themique.com/ventus/shortcodes/data-tables/">DATA TABLES</a></li>
			    <li id="menu-item-1846" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1846"><a href="http://preview.themique.com/ventus/shortcodes/image-box/">IMAGE BOX</a></li>
			    <li id="menu-item-1841" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1841"><a href="http://preview.themique.com/ventus/shortcodes/portfolio/">PORTFOLIO</a></li>
			    <li id="menu-item-1870" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1870"><a href="http://preview.themique.com/ventus/shortcodes/clients-carousel/">CLIENTS CAROUSEL</a></li>
			    <li id="menu-item-1850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1850"><a href="http://preview.themique.com/ventus/shortcodes/price-tables/">PRICE TABLES</a></li>
			    <li id="menu-item-1847" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1847"><a href="http://preview.themique.com/ventus/shortcodes/1584-2/">SERVICES</a></li>
			    <li id="menu-item-1854" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1854"><a href="http://preview.themique.com/ventus/shortcodes/1609-2/">TABS &amp; TOUR</a></li>
			    <li id="menu-item-1842" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1842"><a href="http://preview.themique.com/ventus/shortcodes/team-members/">TEAM MEMBERS</a></li>
			    <li id="menu-item-1851" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1851"><a href="http://preview.themique.com/ventus/shortcodes/testimonials/">TESTIMONIALS</a></li>
			    <li id="menu-item-1863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1863"><a href="http://preview.themique.com/ventus/shortcodes/video/">VIDEO</a></li>
			    <li id="menu-item-1864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1864"><a href="http://preview.themique.com/ventus/shortcodes/audio/">AUDIO</a></li>
			    <li id="menu-item-1859" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1859"><a href="http://preview.themique.com/ventus/shortcodes/elements/">MORE ELEMENTS</a></li>
			    <li id="menu-item-1867" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1867 last"><a href="http://preview.themique.com/ventus/features/admin-panel/">ADMIN PANEL</a></li>
			</ul></div></section></div>						</div>
	<div class="span9">
	    <div class="textcenter">
		<span class="content-heading">BLOG</span>
		<div class="content-heading-stripes"></div>
	    </div>

	    <?php
	    $blogs = blog::find_all();
	    foreach ($blogs as $blog) {
		?>


    	    <div class="row-fluid">
    		<div class="post-1410 post type-post status-publish format-gallery has-post-thumbnail hentry category-uncategorized span10">
    		    <div class="content-image">
    			<div class="flexslider portfolio_flexsliders">

    			    <div class="flex-viewport" style="overflow: hidden; position: relative;">
				<ul class="slides" style="width: 1800%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-1208px, 0px, 0px);">
				    <li class="clone" style="float: left; display: block; width: 604px;">
    					<a href="media/images/photodune-4079101-blue-paint-s1.jpg" class="fancybox">
    					    <img src="media/images/photodune-4079101-blue-paint-s1-700x420.jpg" alt="" title="photodune-4079101-blue-paint-s">
    					</a></li>
    				    <li class="" style="float: left; display: block; width: 604px;"><a href="media/images/iStock_000010014844_Medium.jpg" class="fancybox"><img src="media/images/iStock_000010014844_Medium-700x420.jpg" alt="" title="iStock_000010014844_Medium"></a></li>
    				    <li class="flex-active-slide" style="float: left; display: block; width: 604px;"><a href="media/images/iStock_000016566317_Small.jpg" class="fancybox"><img src="media/images/iStock_000016566317_Small-700x420.jpg" alt="" title="iStock_000016566317_Small"></a></li>
    				    <li style="float: left; display: block; width: 604px;" class=""><a href="media/images/iStock_000022081038XLarge.jpg" class="fancybox"><img src="media/images/iStock_000022081038XLarge-700x420.jpg" alt="" title="iStock_000022081038XLarge"></a></li>
    				    <li style="float: left; display: block; width: 604px;" class=""><a href="media/images/istock_businessman.jpg" class="fancybox"><img src="media/images/istock_businessman-700x420.jpg" alt="" title="istock_businessman"></a></li>
    				    <li style="float: left; display: block; width: 604px;" class=""><a href="media/images/photodune-3826839-black-girl-in-black-s1.jpg" class="fancybox"><img src="media/images/photodune-3826839-black-girl-in-black-s1-700x420.jpg" alt="" title="photodune-3826839-black-girl-in-black-s"></a></li>
    				    <li style="float: left; display: block; width: 604px;" class=""><a href="media/images/photodune-4079078-love-in-paris-s1.jpg" class="fancybox"><img src="media/images/photodune-4079078-love-in-paris-s1-700x420.jpg" alt="" title="photodune-4079078-love-in-paris-s"></a></li>
    				    <li style="float: left; display: block; width: 604px;" class=""><a href="media/images/photodune-4079101-blue-paint-s1.jpg" class="fancybox"><img src="media/images/photodune-4079101-blue-paint-s1-700x420.jpg" alt="" title="photodune-4079101-blue-paint-s"></a></li>
    				    <li class="clone" style="float: left; display: block; width: 604px;"><a href="media/images/iStock_000010014844_Medium.jpg" class="fancybox"><img src="media/images/iStock_000010014844_Medium-700x420.jpg" alt="" title="iStock_000010014844_Medium"></a></li></ul></div><ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul></div>			
    		    </div>
    		    <!-- Blog Title -->
    		    <div class="relative">
    			<div class="title-bubble">
    			    <h5 class="left">Headers Post with Slideshow</h5>
    			    <div class="title-bubble-triangle"></div>
    			</div>
    		    </div>

    		    <!-- Blog Excerpt -->
    		    <div class="content-bubble blog drop-shadow curved">
    			<p class="blog-info">BY <strong><a href="http://preview.themique.com/ventus/blog/author/imangm/" title="Posts by imangm" rel="author">imangm</a></strong> IN <strong><a href="http://preview.themique.com/ventus/blog/category/uncategorized/">Uncategorized</a></strong> On 31-08-2013</p>
    			<p>This Is An H1 Tag Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo [...]</p>

    			<p class="visible-phone left">1 year ago / <a></a><a href="http://preview.themique.com/ventus/blog/headers-post-with-slideshow/#disqus_thread" title="Comment on Headers Post with Slideshow" data-disqus-identifier="1410 http://demo.themique.com/ventus/headers-post/"><span class="dsq-postid" rel="1410 http://demo.themique.com/ventus/headers-post/">No Comments</span></a></p>

    			<div class="read-more">
    			    <a href="http://preview.themique.com/ventus/blog/headers-post-with-slideshow/" class="btn btn-small">READ MORE</a>
    			</div>    
    		    </div>	
    		    <div class="content-bubble-triangle"></div>
    		</div>

    		<div class="span2 hidden-phone">

    		    <!-- Time -->
    		    <div class="side-time">
    			<h3>31</h3>
    			<p>AUG</p>
    		    </div>

    		    <!-- Commnets -->
    		    <div class="side-comment">
    			<h3 data-disqus-identifier="1410 http://demo.themique.com/ventus/headers-post/"><span class="dsq-postid" rel="1410 http://demo.themique.com/ventus/headers-post/">No</span></h3>
    			<p><span class="dsq-postid" rel="1410 http://demo.themique.com/ventus/headers-post/">Comments</span></p>
    		    </div>
    		</div>	
    	    </div>
	    <?php } ?>
	    <script type="text/javascript">
		// <![CDATA[
		var disqus_shortname = 'ventuswp';
		(function() {
		    var nodes = document.getElementsByTagName('span');
		    for (var i = 0, url; i < nodes.length; i++) {
			if (nodes[i].className.indexOf('dsq-postid') != -1) {
			    nodes[i].parentNode.setAttribute('data-disqus-identifier', nodes[i].getAttribute('rel'));
			    url = nodes[i].parentNode.href.split('#', 1);
			    if (url.length == 1) {
				url = url[0];
			    }
			    else {
				url = url[1];
			    }
			    nodes[i].parentNode.href = url + '#disqus_thread';
			}
		    }
		    var s = document.createElement('script');
		    s.async = true;
		    s.type = 'text/javascript';
		    s.src = '//' + 'disqus.com/forums/' + disqus_shortname + '/count.js';
		    (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
		//]]>
	    </script>


	</div>

    </div>
</div>		    	
