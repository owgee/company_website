<div class="content">

    <!-- FEATURES
    ================================================== -->
    <div class="container ">
	<div class="row-fluid">
	    <div class="span3">
		<div class="row-fluid">
		    <section id="nav_menu-2" class="widget-side span12 widget_nav_menu">
			<div class="menu-shortcodes-container">
			    <ul id="menu-shortcodes" class="menu">
				<?php
				$services = service::find_all();
				foreach ($services as $service) {
				    ?>
    				<li id="menu-item-1860" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1860">
    				    <a href="<?= HOME ?>service&name=<?= strtolower($service->name) ?>"><?= $service->name ?></a>
    				</li>
				<?php } ?>

			    </ul>
			</div>
		    </section>
		</div>		
	    </div>
	    <div class="span9">


		<div class="wpb_text_column wpb_content_element ">

		</div>
		<div class="row-fluid">
		    <div class="post-1408 post type-post status-publish format-standard has-post-thumbnail hentry category-shop tag-couple tag-shop-2 span10">
			<?php
			$name = isset($_GET['name']) ? $_GET['name'] : 'SOFTWARE DESIGN AND DEVELOPMENT';
			$service_info = service::find_where(array('name' => $name));
			$service = array_shift($service_info);
			?>
			<h4 align="center"><?= $service->name ?></h4>

			<div class="content-image">
			    <img src="<?= $service->image ?>" class="attachment-1408 wp-post-image" alt="iStock_000022081038XLarge" slideshow="" />		
			</div>
			<!-- Blog Title -->
			<div class="relative">
			    <div class="title-bubble">
				<h5 class="left"><?= $service->name ?></h5>
				<div class="title-bubble-triangle"></div>
			    </div>
			</div>

			<!-- Blog Excerpt -->
			<div class="content-bubble blog drop-shadow curved">

			    <p><p><?= $service->description ?></p>
			    <h6>What we do more</h6>
			    <blockquote>
				<?php
				$services_more = explode(',', $service->more_info);
				foreach ($services_more as $more) {
				    echo '<li>' . $more . '</li>';
				}
				?>
			    </blockquote>
			    <hr>					
			    <div class="post-shares-list">
				<span>SHARE THIS ON:</span>
				<a rel="alternate" onclick="tmq_shareThis('facebook', '<?= HOME ?>service&name=<?= $service->name ?>');" href="javascript:void(0);" data-original-title="Facebook"><i class="icomoon-facebook"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('twitter', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="Twitter"><i class="icomoon-twitter"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('google', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="Google+"><i class="icomoon-google-plus"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('pinterest', 'http://preview.themique.com/ventus/blog/blockquote-post/&media=http://preview.themique.com/ventus/wp-content/uploads/2013/08/iStock_000022081038XLarge-700x466.jpg');" href="javascript:void(0);" data-original-title="Pinterest"><i class="icomoon-pinterest"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('linkedin', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="LinkedIn"><i class="icomoon-linkedin"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('reddit', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="Reddit"><i class="icomoon-reddit"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('stumbleupon', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="Stumbleupon"><i class="icomoon-stumbleupon"></i></a>
				<a rel="alternate" onclick="tmq_shareThis('delicious', 'http://preview.themique.com/ventus/blog/blockquote-post/');" href="javascript:void(0);" data-original-title="Delicious"><i class="icomoon-delicious"></i></a>
			    </div>
			    <div class="clearfix"></div>
			    </p>

			    <p class="visible-phone left">1 year ago / <a>
				    <a href="http://preview.themique.com/ventus/blog/blockquote-post/#respond" title="Comment on Blockquote Post">
					<span class="dsq-postid" rel="1408 http://demo.themique.com/ventus/blockquote-post/">No Comments</span></a>
				</a>
			    </p>

			</div>	
			<div class="content-bubble-triangle"></div>
		    </div>

		    <div class="span2 hidden-phone">



			<!-- Commnets -->
			<div class="side-comment">
			    <h3><span class="dsq-postid" rel="1408 http://demo.themique.com/ventus/blockquote-post/">1</span></h3>
			    <p><span class="dsq-postid" rel="1408 http://demo.themique.com/ventus/blockquote-post/">like</span></p>
			</div>
		    </div>	
		</div>
		<div class="row-fluid portfolio-related-posts">
		    <div class="span12 textcenter">
			<span class="content-heading">GET STARTED NOW HERE</span>
			<div class="content-heading-stripes"></div>
		    </div>
		</div>
		<div class="content-bubble drop-shadow curved author-box">
		    <img alt='' src='' class=' avatar-100 photo' height='100' width='100' />
		    <h5 class="heading">Are you looking for <?= $service->name ?> solution?</h5>
		    <p>You are in the right place, <a href="<?= HOME ?>service&section=request">Click here </a>to continue with the process and we shall save your needs within few time. We will be glad to help your need</p>

		    <div class="clearfix"></div>
		</div>
		<div class="content-bubble-triangle"></div>
		<div class="row-fluid portfolio-related-posts">
		    <div class="span12 textcenter">
			<span class="content-heading">LEAVE A COMMENT ABOUT OUR <?= $service->name ?></span>
			<div class="content-heading-stripes"></div>
		    </div>
		</div>
		Tags: <a href="http://preview.themique.com/ventus/blog/tag/couple/" rel="tag">couple</a>, <a href="http://preview.themique.com/ventus/blog/tag/shop-2/" rel="tag">shop</a>
		<div id="disqus_thread">
		</div>

		<script type="text/javascript">
		    /* <![CDATA[ */
		    var disqus_url = 'http://preview.themique.com/ventus/blog/blockquote-post/';
		    var disqus_identifier = '1408 http://demo.themique.com/ventus/blockquote-post/';
		    var disqus_container_id = 'disqus_thread';
		    var disqus_domain = 'disqus.com';
		    var disqus_shortname = 'ventuswp';
		    var disqus_title = "Blockquote Post";
		    var disqus_config = function() {
			var config = this; // Access to the config object
			config.language = '';

			/*
			 All currently supported events:
			 * preData — fires just before we request for initial data
			 * preInit - fires after we get initial data but before we load any dependencies
			 * onInit  - fires when all dependencies are resolved but before dtpl template is rendered
			 * afterRender - fires when template is rendered but before we show it
			 * onReady - everything is done
			 */

			config.callbacks.preData.push(function() {
			    // clear out the container (its filled for SEO/legacy purposes)
			    document.getElementById(disqus_container_id).innerHTML = '';
			});
			config.callbacks.onReady.push(function() {
			    // sync comments in the background so we don't block the page
			    var script = document.createElement('script');
			    script.async = true;
			    script.src = '?cf_action=sync_comments&post_id=1408';

			    var firstScript = document.getElementsByTagName("script")[0];
			    firstScript.parentNode.insertBefore(script, firstScript);
			});
		    };
		    /* ]]> */
		</script>

		<script type="text/javascript">
		    /* <![CDATA[ */
		    var DsqLocal = {
			'trackbacks': [
			],
			'trackback_url': "http:\/\/preview.themique.com\/ventus\/blog\/blockquote-post\/trackback\/"};
		    /* ]]> */
		</script>

		<script type="text/javascript">
		    /* <![CDATA[ */
		    (function() {
			var dsq = document.createElement('script');
			dsq.type = 'text/javascript';
			dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.' + 'disqus.com' + '/embed.js?pname=wordpress&pver=2.74';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		    })();
		    /* ]]> */
		</script>



	    </div>

	</div>
    </div>		    	
</div>
