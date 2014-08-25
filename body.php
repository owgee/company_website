<body>

    <?php
    $page = '';
    if (isset($_GET['pg']) && $_GET['pg'] != '') {
        $page = $_GET['pg'];
        $url = 'modules/' . $page . '/' . $page . '.php';
        if (file_exists($url)) {
            include($url);
        } else {
            include('404.php');
        }
    } else {

        include('modules/web/web.php');
    }
    ?>
<!--    <div id="google_translate_element"></div><script type="text/javascript">
     function googleTranslateElementInit() {
         new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,sw', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
     }
 </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    -->
    <?php
    if (isset($ses_user)) {
        echo '<input type="hidden" id="token" value="' . sha1(md5(date('Y'))) . '"/>';
    }
    ?>
</body>
