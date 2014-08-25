<?php
if (!empty($_GET)) {
    switch ($_GET['pid']) {
        case 1:
            $title = "Free prayer request";
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
<div id="pageloader" class="container">        
    <div id="projects" class="entry-single pageloader_inner wrapper dark-text">

        <!-- PROJECT TITLE + TAGS -->
        <div class="slidecontent-bi col-md-10 col-md-offset-1">
            <!-- BEGIN: ABOUT TITLE --> 
            <div class="section-title smallmargin">
                <h2 id="title"><?= $title ?></h2>
                <div class="divider-small">
                    <div class="divider colored"></div>
                </div>

                <div class="project-title-bi">
                    <div class="project-cn">
                        <p><span class="cl">Type: </span><?= $type ?></p>
                        <p><span class="cl">Client: </span><?= $client ?></p>						
                        <p><span class="cl"><?= $link != '' ? 'Link' : " Date" ?>: </span><?= $link != '' ? $link : $date ?></p>

                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECT SLIDER GOES HERE -->
        <div class="col-md-10 col-md-offset-1">

            <!-- ADD A CLASS "light" BEFORE THE FLEXSLIDER IF YOU WANT WHITE ARROWS NAV -->
            <div class="light">
                <!-- Flex Slider 01 -->
                <div id="proj_slider01" class="flexslider">
                    <ul class="slides">
                        <li><img src="media/images/portfolio/p2.jpg" alt=""></li>
                        <li><img src="media/images/portfolio/p22.jpg" alt=""></li>
                        <li><img src="media/images/portfolio/p23.jpg" alt=""></li>
                        <li><img src="media/images/portfolio/p24.jpg" alt=""></li>

                    </ul>
                </div>
            </div>
        </div>

        <!-- PROJECT DESCRIPTION + SHARES -->
        <div class="bigimg-desc">

            <!-- PROJECT DESCRIPTION -->
            <div class="col-md-7 col-md-offset-1">
                <h4 class="text-left">Project Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tempus sapien augue, sit amet accumsan magna elementum at. Aenean sagittis sapien sit amet molestie dapibus. Integer magna neque, accumsan sit amet mi condimentum, pharetra tempor mi....<span class="read-more-content"> Aenean eget turpis sed lacus consequat suscipit. Vivamus bibendum iaculis est, convallis elementum nunc fermentum vel. Praesent rhoncus malesuada augue, vel feugiat enim rutrum ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ultrices commodo lacus, ac elementum est tincidunt vitae. Cras et consectetur est. Aliquam rutrum magna turpis, non congue felis tincidunt ut. Donec porttitor tellus sed diam vehicula, et fermentum ligula rutrum. Nullam feugiat, lorem sit amet molestie vulputate, diam mauris cursus sapien, eu consectetur nibh nulla a lectus. Cras sit amet massa eget eros facilisis tempor nec eget erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque suscipit, enim ac sodales pretium, lorem tortor ultrices ante, a sagittis lorem nulla sed mauris.</span><a href="javascript:;" class="read-more-toggle"> Read More</a></p>
            </div>

            <!-- SHARES -->
            <div class="col-md-3">
                <h4>Share</h4>
                <div class="socialdiv colored">
                    <ul>
                        <li>
                            <a class="e-mail" href="mailto:someone@example.com?Subject=Hello%20again" target="_blank">
                                <div class="tooltip-desc">
                                    <span class="arrow-down"></span>
                                    <span class="social-name">E-Mail</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="facebook" href="#" target="_blank">
                                <div class="tooltip-desc">
                                    <span class="arrow-down"></span>
                                    <span class="social-name">Facebook</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="pinterest" href="#" target="_blank">
                                <div class="tooltip-desc">
                                    <span class="arrow-down"></span>
                                    <span class="social-name">Pinterest</span>
                                </div>
                            </a>
                        </li>


                        <li>
                            <a class="twitter" href="#" target="_blank">
                                <div class="tooltip-desc">
                                    <span class="arrow-down"></span>
                                    <span class="social-name">Twitter</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="dribbble" href="#" target="_blank">
                                <div class="tooltip-desc">
                                    <span class="arrow-down"></span>
                                    <span class="social-name">Dribbble</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- END: PROJECT DESCRIPTION + SHARES -->
    </div>
</div> <!-- END #pageloader -->