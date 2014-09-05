<body class="home page page-id-1816 page-template page-template-slider-php w978px  wpb-js-composer js-comp-ver-4.0.5 vc_responsive top-contact-bar-page no-sidebar-page">
    <div class="body-wrapper">
        <?php include_once 'modules/landing/banner.php'; ?>
        <!-- BEGIN SLIDER
    ================================================== -->
        <?php include_once 'modules/landing/slider.php'; ?>

        <!-- BEGIN MAIN BUBBLE
    ================================================== -->
        <div class="container home-bubble">
            <div class="row-fluid">
                <div class="span12 relative">

                    <div class="bubble head-bubble " style="z-index:90 !important; -webkit-box-shadow: none; -moz-box-shadow: none; box-shadow: none; ">
                        <h4 class="left">DO YOU LIKE VENTUS <strong>CAPABILITIES</strong>?</h4>
                        <a href="http://themeforest.net/item/ventus-unique-multipurpose-wordpress-theme/5498133?ref=imangm" class="btn btn-padded right">BUY VENTUS!</a>				</div>
                    <div class="bubble-triangle"></div>
                </div>
            </div>
        </div>
        <div class="bubble-stripes"></div>

        <!-- 
        ================================================
        // BEGIN CONTENT
        ================================================ 
        -->
        <div class="content">
            <?php
            $page = '';
            if (isset($_GET['pg']) && $_GET['pg'] != '') {
		$url= input::url();
                if (file_exists($url)) {
                    include($url);
                } else {
                    include('404.php');
                }
            } else {

                include_once 'modules/landing/landing.php';
            }
            ?>  
        </div>
        <?php include_once 'modules/landing/footer.php'; ?>
    </div>
</body>

</body>
