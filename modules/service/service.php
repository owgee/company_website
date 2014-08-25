
<?php
if (!empty($_GET)) {
    switch ($_GET['sid']) {
        case 1:
            $title = "APPLICATION DEVELOPMENT";
            $type = "Online platform for prayer requests";
            $client = "olorphons church";
            $date = "2013";
            $link = '<a href="http://www.freeprayer-request.com" target="_blank">http://www.freeprayer-request.com</a>';
            $description = "";
            break;
        case 2:


            $title = "Tanzania Government constitution reform";
            $type = "SMS subscription application";
            $client = "Tanzania costitutional reform";
            $date = "2012";
            $link = '';
            $description = "";
            break;
        case 3:

            $title = "Hotleo news feed";
            $type = "SMS subscription application";
            $client = "Tanzania costitutional reform";
            $date = "2012";
            $link = '<a href="http://www.hotleo.com" target="_blank">http://www.hotleo.com</a>';
            $description = "";
            break;
        case 4:

            $title = "KaribuSMS application";
            $type = "SMS subscription application";
            $client = "Tanzania costitutional reform";
            $date = "2014";
            $link = '<a href="http://www.karibusms.com" target="_blank">http://www.karibusms.com</a>';
            $description = "";
            break;
        default:
            break;
    }
}
?>

        <!-- START: PARALLAX PAGE TITLE -->
        <section class="pagetitle">
            <div id="parallax-3" class="parallax" style="background-image: url(media/images/parallax/blog-single2.jpg);text-align:center;">
                <div class="box-overlay-pattern">
                    <div class="overlay-pattern dark"></div>
                    <div class="parallax-content">
                        <div class="title">
                            <div class="section-title light">
                                <h2><span class="bold"><?=$title?></span></h2>
                                <div class="divider colored"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	  
        <!-- END: PARALLAX -->

        <!-- BEGIN BLOG 3 COLUMNS -->
        <section id="blog" class="grey-section smallpadding arrow-up">
            <div class="container journal-sidebar">
                <div class="col-md-8">	

                    <!-- BEGIN BLOG POSTS ISOTOPE -->		
                    <div class="journal isotope" data-columns="2" data-gutter-space=".25">
                        <!-- POST #01 -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">
                                <!-- Featured image -->
                                <div class="featured-image">
                                    <a href="blog-single.html"><img alt="" src="media/images/journal/1.jpg"></a>
                                </div>

                                <h2 class="post-title"><a href="blog-single.html">Post with Featured Image</a></h2>

                                <div class="post-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim. Etiam scelerisque ultricies euismod. Etiam pellentesque enim ac risus dapibus consequat. Nulla euismod lacinia felis, vel porttitor massa accumsan sit amet [...]</p>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-camera"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> MAR 7, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Photography</a>, <a href="#">Image</a>, <a href="#">Life</a></p>
                                    </div>
                                    <div class="comments">
                                        <p><i class="fa fa-comments-o"></i> 0</p>
                                    </div>
                                </div>
                                <!-- end metas -->
                            </div>
                        </div><!-- #post -->

                        <!-- POST #02 | Slider -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">

                                <div class="post-slider">
                                    <!-- masterslider -->
                                    <div class="master-slider ms-skin-default" id="masterslider-posts">
                                        <!-- new slide -->
                                        <div class="ms-slide" data-fill-mode="fit" data-delay="5">
                                            <!-- slide background -->
                                            <img src="media/masterslider/blank.gif" data-src="media/images/journal/s2.jpg" alt="lorem ipsum dolor sit"/>     
                                        </div>
                                        <!-- end of slide -->

                                        <!-- new slide -->
                                        <div class="ms-slide">
                                            <!-- slide background -->
                                            <img src="media/masterslider/blank.gif" data-src="media/images/journal/s1.jpg" alt="lorem ipsum dolor sit"/>     
                                        </div>
                                        <!-- end of slide -->

                                        <!-- new slide -->
                                        <div class="ms-slide">
                                            <!-- slide background -->
                                            <img src="media/masterslider/blank.gif" data-src="media/images/journal/s3.jpg" alt="lorem ipsum dolor sit"/>     
                                        </div>
                                        <!-- end of slide -->
                                    </div>
                                    <!-- end of masterslider -->
                                </div>

                                <h2 class="post-title">
                                    <a href="blog-single.html">Post with Slider</a>
                                </h2>

                                <div class="post-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim. Etiam scelerisque ultricies euismod. Etiam pellentesque enim ac risus dapibus consequat. Nulla euismod lacinia felis, vel porttitor massa accumsan sit amet. Cras id fermentum neque. Curabitur et mollis neque. Fusce eu mattis arcu. Integer eget augue sit amet lorem convallis fermentum [...]</p>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-picture-o"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> MAR 4, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Slider</a></p>
                                    </div>
                                    <div class="comments">
                                        <p><i class="fa fa-comments-o"></i> 3</p>
                                    </div>
                                </div>

                            </div>
                        </div><!-- #post -->

                        <!-- POST #03 | Video Post -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">

                                <div class="post-video">
                                    <div class="video-thumb">
                                        <div class="video-wrapper">
                                            <iframe src="http://player.vimeo.com/video/84985971" width="500" height="281" allowfullscreen></iframe>
                                        </div>													
                                    </div>

                                </div>

                                <h2 class="post-title">
                                    <a href="blog-single.html">Post with Video</a>
                                </h2>

                                <div class="post-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim [...]</p>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-film"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> MAR 2, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Video</a></p>
                                    </div>
                                    <div class="comments">
                                        <p><i class="fa fa-comments-o"></i> 1</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #post -->

                        <!-- POST #04 | Quote Post -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">

                                <div class="post-quote">
                                    <blockquote><i class="fa fa-quote-left"></i> INNOVATION DISTINGUISHES BETWEEN A LEADER AND A FOLLOWER <i class="fa fa-quote-right"></i></blockquote>
                                    <span class="author-quote">-- Steve Jobs --</span>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-quote-right"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> MAR 1, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Quote</a></p>
                                    </div>

                                </div>
                            </div>
                        </div><!-- #post -->

                        <!-- POST #05 | Audio Post -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">
                                <div class="post-audio">
                                    <div class="the_content_text" style="width: 100%;">
                                        <audio class="recentPostsAudio"><source type="audio/mp3" src="audio/01-Smack-My-Bitch-Up.html"></audio>
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(document).ready(function($) {
                                            if (navigator.userAgent.match(/iP/i) == null) {
                                                if ($(".recentPostsAudio").length) {
                                                    $(".recentPostsAudio").mediaelementplayer({
                                                        flashName: "flashmediaelement.swf",
                                                        audioWidth: "100%"
                                                    });
                                                }
                                            }
                                        });
                                    </script>

                                    <!-- Begin Metas -->
                                    <div class="metas">
                                        <div class="post-type no-readmore">
                                            <i class="fa fa-music"></i>
                                        </div>

                                        <div class="date">
                                            <p><i class="fa fa-calendar"></i> FEB 28, 2014</p>
                                        </div>
                                        <div class="tags">
                                            <p><i class="fa fa-tags"></i> <a href="#">Music Player</a></p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- #post -->

                        <!-- POST #06 | Galerry -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">
                                <div class="post-gallery">

                                    <!-- Begin Master Slider Gallery -->
                                    <div class="ms-showcase2-template">
                                        <!-- masterslider -->
                                        <div class="master-slider ms-skin-default" id="masterslider-post-gallery">
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/g1.jpg" alt="lorem ipsum dolor sit"/> 
                                                <img class="ms-thumb" src="media/images/journal/thumb7.jpg" alt="thumb" />
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/g2.jpg" alt="lorem ipsum dolor sit"/>    
                                                <img class="ms-thumb" src="media/images/journal/thumb6.jpg" alt="thumb" />
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/g3.jpg" alt="lorem ipsum dolor sit"/>   
                                                <img class="ms-thumb" src="media/images/journal/thumb5.jpg" alt="thumb" />  
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/g4.jpg" alt="lorem ipsum dolor sit"/>   
                                                <img class="ms-thumb" src="media/images/journal/thumb4.jpg" alt="thumb" /> 
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/s1.jpg" alt="lorem ipsum dolor sit"/> 
                                                <img class="ms-thumb" src="media/images/journal/thumb3.jpg" alt="thumb" />      
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/s2.jpg" alt="lorem ipsum dolor sit"/>   
                                                <img class="ms-thumb" src="media/images/journal/s2.jpg" alt="thumb" />
                                            </div>
                                            <div class="ms-slide">
                                                <img src="media/masterslider/blank.gif" data-src="media/images/journal/s3.jpg" alt="lorem ipsum dolor sit"/> 
                                                <img class="ms-thumb" src="media/images/journal/s3.jpg" alt="thumb" />
                                            </div>
                                        </div>
                                        <!-- end of masterslider -->
                                    </div>
                                    <!-- end of template -->  	                        
                                </div>

                                <h2 class="post-title">
                                    <a href="blog-single.html">This is a post with Gallery</a>
                                </h2>

                                <div class="post-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim [...]</p>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-picture-o"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> FEB 27, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Gallery</a></p>
                                    </div>
                                    <div class="comments">
                                        <p><i class="fa fa-comments-o"></i> 0</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #post -->

                        <!-- POST #07 | SIMPLE TEXT -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">

                                <h2 class="post-title simple-text">
                                    <a href="blog-single.html">Simple text post</a>
                                </h2>

                                <div class="post-summary">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim. Etiam scelerisque ultricies euismod. Etiam pellentesque enim ac risus dapibus consequat [...]</p>
                                </div>

                                <!-- Begin Metas -->
                                <div class="metas">
                                    <div class="post-type no-readmore">
                                        <i class="fa fa-font"></i>
                                    </div>

                                    <div class="date">
                                        <p><i class="fa fa-calendar"></i> FEB 20, 2014</p>
                                    </div>
                                    <div class="tags">
                                        <p><i class="fa fa-tags"></i> <a href="#">Simple Text</a></p>
                                    </div>
                                    <div class="comments">
                                        <p><i class="fa fa-comments-o"></i> 3</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- #post -->

                        <!-- POST #08 | Link Post -->
                        <div class="journal-post isotope-item">
                            <div class="post-content fadeInUpBig">

                                <div class="post-type">
                                    <i class="fa fa-link"></i>
                                </div>

                                <h2 class="post-title post-link">
                                    <a href="http://designarethemes.com/theme-switch/?theme=smartbox" target="_blank">http://themeforest.net/item/smartbox-clean-elegant-multipurpose-wp-theme/6086949</a>
                                </h2>

                            </div>
                        </div><!-- #post -->

                    </div>
                    <!-- END journal isotope -->

                    <div class="space"></div>	
                    <div class="space"></div>    

                    <!-- LOAD MORE POSTS -->
                    <div class="view-all-posts" style="width:100%; text-align:center;">
                        <a class="p-button hide-icon colored" href="#">
                            <i class="fa fa-repeat"></i>
                            <span class="text">Load more posts</span>
                        </a>

                    </div>

                    <div class="space"></div>	
                    <div class="space"></div>


                </div>	
                <!-- BEGIN BLOG WIDTH -->

                <!-- BEGIN SIDEBAR -->        
                <div class="col-md-4 sidebar">

                    <!-- Begin Search Form -->
                    <div class="widget_search">			
                        <form role="search" method="get" id="searchform" action="#">
                            <div>
                                <input type="text" value="To search type and hit enter" onfocus="if ($(this).val() === 'To search type and hit enter')
                                                                    $(this).val('');" onblur="if ($(this).val() === '')
                                                                                $(this).val('To search type and hit enter');" name="s" id="s" />
                                <input type="submit" id="searchsubmit" value="Search" />
                            </div>
                        </form>
                    </div>

                    <!-- WIDGET FOLLOWERS -->
                    <div class="widget widget_followers">
                        <ul>
                            <li class="f-facebook">
                                <i class="fa fa-facebook-square"></i> 
                                <h4>2440+</h4> <span>Fans</span>
                            </li>

                            <li class="f-twitter">
                                <i class="fa fa-twitter-square"></i> 
                                <h4>1200+</h4> <span>Followers</span>
                            </li>

                            <li class="f-rss">
                                <i class="fa fa-rss-square"></i> 
                                <h4>890+</h4> <span>Subscribers</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End -->

                    <!-- WIDGET TABS -->
                    <div class="widget widget_posts">
                        <div id="blog-tabs">

                            <ul class="tabs">
                                <li id="tab_two1">Popular</li>
                                <li id="tab_two2">Recent</li>
                                <li id="tab_two3">Comments</li>
                            </ul>

                            <div class="contents">
                                <div id="content_two1" class="tabscontent">
                                    <ul class="posts">
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>

                                        </li>
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> 
                                <div id="content_two2" class="tabscontent">
                                    <ul class="posts">
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div> 
                                <div id="content_two3" class="tabscontent">
                                    <ul class="posts">
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="single_post.html"><img src="media/images/journal/1.jpg" alt=""/></a>
                                            <p><a href="single_post.html">Lorem Ipsum is simply dummy text of the printing.</a></p>
                                            <div class="date">
                                                <p><i class="fa fa-calendar"></i> FEBRUARY 15, 2014</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>  
                            </div><!-- End contents -->

                        </div><!-- End blog-tabs -->
                    </div>
                    <!-- End -->

                    <!-- WIDGET GALLERY -->
                    <div class="widget widget_gallery">		
                        <h4>Widget Gallery</h4>
                        <div class="post-gallery">
                            <!-- template -->
                            <div class="ms-showcase2-template">
                                <!-- masterslider -->
                                <div class="master-slider ms-skin-default" id="masterslider-post-gallery-sidebar">
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/g1.jpg" alt="lorem ipsum dolor sit"/> 
                                        <img class="ms-thumb" src="media/images/journal/thumb7.jpg" alt="thumb" />
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/g2.jpg" alt="lorem ipsum dolor sit"/>    
                                        <img class="ms-thumb" src="media/images/journal/thumb6.jpg" alt="thumb" />
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/g3.jpg" alt="lorem ipsum dolor sit"/>   
                                        <img class="ms-thumb" src="media/images/journal/thumb5.jpg" alt="thumb" />  
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/g4.jpg" alt="lorem ipsum dolor sit"/>   
                                        <img class="ms-thumb" src="media/images/journal/thumb4.jpg" alt="thumb" /> 
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/s1.jpg" alt="lorem ipsum dolor sit"/> 
                                        <img class="ms-thumb" src="media/images/journal/thumb3.jpg" alt="thumb" />      
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/s2.jpg" alt="lorem ipsum dolor sit"/>   
                                        <img class="ms-thumb" src="media/images/journal/s2.jpg" alt="thumb" />
                                    </div>
                                    <div class="ms-slide">
                                        <img src="media/masterslider/blank.gif" data-src="media/images/journal/s3.jpg" alt="lorem ipsum dolor sit"/> 
                                        <img class="ms-thumb" src="media/images/journal/s3.jpg" alt="thumb" />
                                    </div>
                                </div>
                                <!-- end of masterslider -->
                            </div>
                            <!-- end of template -->  	                        
                        </div>
                    </div>   

                    <!-- WIDGET SLIDER -->   
                    <div class="widget widget_slider">		
                        <h4>Widget Slider</h4>
                        <div id="office-slider" class="flexslider">
                            <ul class="slides">
                                <li><img src="media/images/office/of2.jpg" alt="lorem ipsum dolor sit"/></li>

                                <li><img src="media/images/office/of2.jpg" alt="lorem ipsum dolor sit"/></li>

                                <li><img src="media/images/office/of3.jpg" alt="lorem ipsum dolor sit"/><div class="line"></div></li>

                            </ul>
                        </div>
                    </div>

                    <!-- WIDGET LINKS -->
                    <div class="widget widget_links">		
                        <h4>Usefully Links</h4>
                        <ul class="u-links-container">
                            <li><a href="#">Lorem ipsum dolor sit amet consectetur</a></li>
                            <li><a href="#">Adipiscing elit. Morbi ac ligula</a></li>
                            <li><a href="#">Velit tincidunt venenatis</a></li>
                            <li><a href="#">Donec viverra sit amet sem et rutrum</a></li>
                            <li><a href="#">Suspendisse vel neque eget leo</a></li>
                            <li><a href="#">Cras lobortis urna et lorem lobortis, non convallis sapien pulvinar</a></li>
                        </ul>
                    </div>

                    <!-- TAG CLOUD WIDGET -->
                    <div class="widget widget_tagcloud">
                        <h4>Tag Cloud</h4>
                        <div class="tagcloud">
                            <a href="#">Gallery</a>
                            <a href="#">Music</a>
                            <a href="#">Photos</a>
                            <a href="#">SliderImages</a>
                            <a href="#">Video</a>
                            <a href="#">Templates</a>
                            <a href="#">Sport</a>
                            <a href="#">Life</a>
                        </div>
                    </div>

                </div>        
            </div>	
        </section> 

        <!-- BEGIN BOTTOM FOOTER -->
        <?php require_once 'modules/landing/footer.php'; ?>
        <!-- END BOTTOM FOOTER -->
    </div>	