<?php 

/**
*   karibu.com
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

ob_start();
include('include/bootstrap.php');
//ob_start('sanitize_output');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie ie9" lang="en-US"> <!--<![endif]-->

<?php include('head.php'); ?>

<?php include('body.php');    
 ob_end_flush()
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57911389-1', 'auto');
  ga('send', 'pageview');

</script>
</html>