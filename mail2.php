<?php

//echo "string";
/**
 *  
 * * @author Ephraim Swilla <swillae1@gmail.com>
 */
function post_without_wait($url, $params) {
    foreach ($params as $key => &$val) {
	if (is_array($val))
	    $val = implode(',', $val);
	$post_params[] = $key . '=' . urlencode($val);
    }
    $post_string = implode('&', $post_params);

    $parts = parse_url($url);

    $fp = fsockopen($parts['host'], isset($parts['port']) ? $parts['port'] : 80, $errno, $errstr, 30);

    $out = "POST " . $parts['path'] . " HTTP/1.1\r\n";
    $out.= "Host: " . $parts['host'] . "\r\n";
    $out.= "Content-Type: application/x-www-form-urlencoded\r\n";
    $out.= "Content-Length: " . strlen($post_string) . "\r\n";
    $out.= "Connection: Close\r\n\r\n";
    if (isset($post_string))
	$out.= $post_string;

    fwrite($fp, $out);
    fclose($fp);
}

post_without_wait('www.karibusms.com/api', array('name' => 'name'));

while (ob_get_level())
    ob_end_clean();
header('Connection: close');
ignore_user_abort();
ob_start();
echo('Connection Closed');
$size = ob_get_length();
header("Content-Length: $size");
ob_end_flush();
flush();
?>
