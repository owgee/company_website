
<div class="container">
    <div class="row-fluid">
	<div class="span12">
	    <div class="breadcrumb-container">
		<ul class="breadcrumb">
		    <li><a href="#">Home</a></li><span class="divider"> / </span><li class="active">Blog</li>
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
			    <?php 
			    $blog_categories=  blog::find_by_sql("SELECT DISTINCT blog_category FROM inets_blog");
			    foreach ($blog_categories as $bg) {
			    ?>
			    <li id="menu-item-1860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1860 first"><a href="<?=HOME.'public/&category='.$bg->_category?>"><?=$bg->_category?></a></li>
			    <?php } ?>
			</ul>
		    </div>
		</section></div>						</div>
	<div class="span9">
	    <div class="textcenter">
		<h3 class="content-heading">BLOG</h3>
		<div class="content-heading-stripes"></div>
	    </div>

	    <?php
	    if(isset($_GET['category']) && !empty($_GET['category'])){
		$blogs = blog::find_where(array('category'=>$_GET['category']));
	    }  else {
		$blogs = blog::find_all();
	    }
	    
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
    			    <h5 class="left"><?=$blog->title?></h5>
    			    <div class="title-bubble-triangle"></div>
    			</div>
    		    </div>

    		    <!-- Blog Excerpt -->
    		    <div class="content-bubble blog drop-shadow curved">
    			<p class="blog-info">BY <strong>
				<a href="www.karibusms.com/inets" title="Posts by imangm" rel="author">Inets</a>
			    </strong> <?=$blog->posted_time?></p>
    			<p><?=$blog->description?></p>

    			<p class="visible-phone left">1 year ago / <a></a><a href="http://preview.themique.com/ventus/blog/headers-post-with-slideshow/#disqus_thread" title="Comment on Headers Post with Slideshow" data-disqus-identifier="1410 http://demo.themique.com/ventus/headers-post/"><span class="dsq-postid" rel="1410 http://demo.themique.com/ventus/headers-post/">No Comments</span></a></p>

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
