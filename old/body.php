<?php
/**
 *   karibu.com
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */
?>
<body id="landing-page">

    <!-- Preloader -->
    <div id="mask">
        <div id="loader"></div>
    </div>
	  <?php
    include('modules/landing/banner.php');
    $page = '';
    if (isset($_GET['pg']) && $_GET['pg'] != '') {
        $page = $_GET['pg'];
        $url = input::url();
        if (file_exists($url)) {
            include($url);
        } else {
            include('404.php');
        }
    } else {

        include('modules/landing/landing.php');
    }
      include('modules/landing/footer.php');
    ?>
    
<script type="text/javascript" src="media/js/materialize.min.js"></script>
</body>
