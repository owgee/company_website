<?php 

/**
*   karibu.com
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */
ob_start();

include('include/bootstrap.php');
 
//ob_start('sanitize_output'); 
?>
<!DOCTYPE html>
<html lang="en" <?php if(empty($_GET['pg']) && isset($ses_user)){?> class="app"<?php }?>>
<?php include('head.php'); ?>

<?php include('body.php');    
 ob_end_flush()
?>
</html>