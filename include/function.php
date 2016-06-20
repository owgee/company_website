<?php

/**
 * @author Ephraim Swilla <swillae1@gmail.com>
 *
 *  desc:: PUT ALL FUNCTIONS WHICH YOU THINK ARE IMPORTANT
 */

/**
 *
 * @param class name $class_name load all database classes
 *
 */

function redirect_to($location = NULL) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function header_state($title){
     return isset($_GET['pg']) && $_GET['pg']==$title? ' class="active"':'';
}

function __autoload($class_name) {

    $class_name = strtolower($class_name);
    $path = RT . "persistance/database/tables/{$class_name}.php";
    if (file_exists($path)) {
        require_once ($path);
    } else {
        die("The class file {$class_name}.php could not be in database folder");
    }
}

/**
 *
 * @param css style name $css_name  
 * @example home.css you should write  css_media('home');
 * @deprecated  css file MUST BE in media/css folder
 *
 */
function css_media($css_name, $media = 'screen') {
    echo '<link href="media/css/' . $css_name . '.css" media="' . $media . '" rel="stylesheet" type="text/css"/>';
}

/**
 * 
 * @param type $css_ie_name
 */
function css_media_ei($css_ie_name) {
    echo ' <!--[if IE]>
	<link href="media/css/' . $css_ie_name . '.css" rel="stylesheet" type="text/css"/>
<![endif]-->';
}

/**
 *
 * @param javascript $media_name
 * @example main.js write js_media('main');
 * @deprecated FILE MUST BE IN media/js folder
 */
function js_media($media_name, $option = '') {
    echo '<script type="text/javascript" language="javascript" src="media/js/' . $media_name . '.js" ' . $option . '></script>';
}

/**
 * 
 * @param Image name $image_name This is a name of image in media folder
 * @param integer $height  height of your image/icon
 * @param integer $width  width of your image/icon
 * @param string $title  title of your image
 * @param string $alt  alt name of your image
 * @return string image <img src="'.$path.'" height="'.$height.'" width="'.$width.'" title="'.$title.'" alt="'.$alt.'" />
 * @example image('icon/ajax-loader.gif') give me an image
 */
function image($image_name, $height = '', $width = '', $title = '', $alt = '', $option = '') {

    $path = 'media/images/' . $image_name;
    if (file_exists($path)) {
        $image = '<img src="' . $path . '" height="' . $height . '" width="' . $width . '" title="' . $title . '" alt="' . $alt . '"  ' . $option . ' />';
    } else {
        $image = 'Icon in media/images/' . $image_name . ' does not exist';
    }
    return $image;
}

/**
 * 
 * @param type $buffer
 * @return type
 */
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        '/(\s)+/s'  // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

/*
 * 
 * * error reporting 
 */

function error_record($message, $result, $json = FALSE) {
    //    
//  lets notify ourself about any error occur somewhere
    $headers = 'From: Unnett-error <unnett@unnett.com>' . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1";

    mail('swillae@yahoo.com,ynasson@gmail.com,embalamaj1@gmail.com', "We got an error", $message . '<br/>' . $result, $headers);

    global $ses_user;

    $user = empty($ses_user) ? 'guest' : $ses_user->id;

//let us record all errors in one file called error_log
    $file_path = RT . 'media/doc/errors/system_error_log.html';

    $msg = "
 <ul>
 <li>Message: <strong>" . $message . "</strong></li>
 <li>Time: <strong>" . date('D, d-M-Y  H:i:s', time() + 60 * 60) . "tz time</strong></li> 
 <li>User id: <strong>" . $user . "</strong> using " . DEVICE . "</li>
 <li>Error variable: <strong>" . $result . print_r(error_get_last()) . "</strong> </li>
</ul>";

    write_file($file_path, $msg);

    if ($json == FALSE) {
        echo $message;
    } else {
        echo json_encode(array(
            'error' => '<div class="error">' . $message . '</div>'
        ));
    }
}

/**
 * 
 * @param type $phone_number
 * @return array($country_name, $valid_number) or not array if wrong number
 */
function validate_phone_number($phone_number) {
    if (strlen(preg_replace('#[^0-9]#i', '', $phone_number)) < 7 || strlen(preg_replace('#[^0-9]#i', '', $phone_number)) > 14) {
        return FALSE;
    } else {

        $y = substr($phone_number, -9);
        $z = str_ireplace($y, '', $phone_number);
        $p = str_ireplace('+', '', $z);

        $x = array(
            93 => " Afghanistan",
            355 => " Albania", 213 => " Algeria",
            1 => " American Samoa",
            376 => "Andorra ",
            244 => " Angola",
            1 => " Anguilla",
            1 => " Antigua and Barbuda",
            54 => " Argentine Republic",
            374 => " Armenia",
            297 => " Aruba",
            247 => " Ascension",
            61 => " Australia",
            672 => " Australian External Territories",
            43 => " Austria ", 994 => " Azerbaijani Republic", 1 => " Bahamas ", 973 => " Bahrain", 880 => " Bangladesh ", 1 => " Barbados ", 375 => " Belarus ", 32 => " Belgium ", 501 => " Belize", 229 => " Benin ", 1 => " Bermuda ", 975 => " Bhutan", 591 => " Bolivia", 387 => " Bosnia and Herzegovina ", 267 => " Botswana", 55 => " Brazil (Federative Republic of)", 1 => " British Virgin Islands", 673 => " Brunei Darussalam ", 359 => " Bulgaria (Republic of)", 226 => " Burkina Faso", 257 => " Burundi (Republic of)", 855 => " Cambodia (Kingdom of)", 237 => " Cameroon (Republic of)", 1 => " Canada", 238 => " Cape Verde (Republic of)", 1 => " Cayman Islands ", 236 => " Central African Republic ", 235 => " Chad (Republic of)", 56 => " Chile ", 86 => " China ( Republic of)", 57 => " Colombia (Republic of)", 269 => " Comoros (Union of the)", 242 => " Congo (Republic of the)", 682 => " Cook Islands", 506 => " Costa Rica", 225 => " Côte d \"Ivoire (Republic of)", 385 => " Croatia (Republic of)", 53 => " Cuba", 357 => " Cyprus (Republic of)", 420 => " Czech Republic ", 850 => " Democratic People\"s Republic of Korea ", 243 => " Democratic Republic of the Congo", 670 => " Democratic Republic of Timor-Leste", 45 => " Denmark", 246 => " Diego Garcia ", 253 => " Djibouti (Republic of) ", 1 => " Dominica (Commonwealth of)", 1 => " Dominican Republic", 593 => " Ecuador", 20 => " Egypt (Arab Republic of)", 503 => " El Salvador (Republic of)", 240 => " Equatorial Guinea (Republic of)", 291 => " Eritrea", 372 => " Estonia (Republic of)", 251 => " Ethiopia (Federal Democratic Republic of) ", 500 => " Falkland Islands (Malvinas) ", 298 => " Faroe Islands", 679 => " Fiji (Republic of)", 358 => " Finland ", 33 => " France", 262 => " French Departments and Territories in the Indian Ocean ", 594 => " French Guiana (French Department of)", 689 => " French Polynesia (Territoire français \"outre-mer)", 241 => " Gabonese Republic", 220 => " Gambia (Republic of the)", 995 => " Georgia", 49 => " Germany (Federal Republic of)", 233 => " Ghana", 350 => " Gibraltar", 881 => " Global Mobile Satellite System (GMSS) shared code", 30 => " Greece ", 299 => " Greenland (Denmark)", 1 => " Grenada", 388 => " Group of countries shared code", 590 => " Guadeloupe (French Department of)", 1 => " Guam ", 502 => " Guatemala (Republic of)", 224 => " Guinea (Republic of)", 245 => " Guinea-Bissau (Republic of)", 592 => " Guyana", 509 => " Haiti (Republic of)", 504 => " Honduras (Republic of)", 852 => " Hong Kong China", 36 => " Hungary (Republic of)", 354 => " Iceland", 91 => " India (Republic of)", 62 => " Indonesia (Republic of)", 870 => " Inmarsat SNAC ", 98 => " Iran (Islamic Republic of)", 964 => " Iraq (Republic of)", 353 => " Ireland", 972 => " Israel (State of)", 39 => " Italy", 1 => " Jamaica", 81 => " Japan", 962 => " Jordan (Hashemite Kingdom of)", 7 => " Kazakhstan (Republic of)", 254 => " Kenya (Republic of)", 686 => " Kiribati (Republic of)", 82 => " Korea (Republic of)", 965 => " Kuwait (State of)", 996 => " Kyrgyz Republic ", 856 => " Lao People\"s Democratic Republic", 371 => " Latvia (Republic of)", 961 => " Lebanon ", 266 => " Lesotho (Kingdom of)", 231 => " Liberia (Republic of)", 218 => " Libya (Socialist People\"s Libyan Arab Jamahiriya)", 423 => " Liechtenstein (Principality of)", 370 => " Lithuania (Republic of) ", 352 => " Luxembourg", 853 => " Macao China", 261 => " Madagascar (Republic of)", 265 => " Malawi", 60 => " Malaysia", 960 => " Maldives (Republic of)", 223 => " Mali (Republic of)", 356 => " Malta", 692 => " Marshall Islands (Republic of the)", 596 => " Martinique (French Department of)", 222 => " Mauritania (Islamic Republic of)", 230 => " Mauritius (Republic of)", 269 => " Mayotte", 52 => " Mexico", 691 => " Micronesia (Federated States of)", 373 => " Moldova (Republic of) ", 377 => " Monaco (Principality of)", 976 => " Mongolia ", 382 => " Montenegro (Republic of)", 1 => " Montserrat", 212 => " Morocco (Kingdom of)", 258 => " Mozambique (Republic of) ", 95 => " Myanmar (Union of)", 264 => " Namibia (Republic of)", 674 => " Nauru (Republic of)", 977 => " Nepal (Federal Democratic Republic of)", 31 => " Netherlands (Kingdom of the)", 599 => " Netherlands Antilles", 687 => " New Caledonia (Territoire français d\"outre-mer)", 64 => " New Zealand", 505 => " Nicaragua", 227 => "Niger (Republic of the)", 234 => " Nigeria (Federal Republic of)", 683 => " Niue ", 1 => " Northern Mariana Islands (Commonwealth of the)", 47 => " Norway", 968 => " Oman (Sultanate of)", 92 => " Pakistan (Islamic Republic of)", 680 => " Palau (Republic of)", 507 => " Panama (Republic of)", 675 => " Papua New Guinea", 595 => " Paraguay (Republic of)", 51 => "Peru", 63 => "Philippines (Republic of the)", 48 => " Poland (Republic of)", 351 => " Portugal", 1 => " Puerto Rico", 974 => " Qatar (State of)", 40 => " Romania ", 7 => " Russian Federation", 250 => " Rwanda (Republic of)", 290 => " Saint Helena", 1 => " Saint Kitts and Nevis", 1 => " Saint Lucia", 508 => " Saint Pierre and Miquelon (Collectivité territoriale de la République française)", 1 => " Saint Vincent and the Grenadines", 685 => " Samoa (Independent State of)", 378 => " San Marino (Republic of) ", 239 => " Sao Tome and Principe (Democratic Republic of)", 966 => " Saudi Arabia (Kingdom of)", 221 => " Senegal (Republic of)", 381 => " Serbia (Republic of)", 248 => " Seychelles (Republic of)", 232 => " Sierra Leone", 65 => " Singapore (Republic of)", 421 => " Slovak Republic", 386 => " Slovenia (Republic of)", 677 => " Solomon Islands", 252 => " Somali Democratic Republic", 27 => " South Africa (Republic of)", 34 => " Spain", 94 => " Sri Lanka (Democratic Socialist Republic of)", 249 => " Sudan (Republic of the)", 597 => " Suriname (Republic of)", 268 => " Swaziland (Kingdom of)", 46 => " Sweden", 41 => " Switzerland (Confederation of)", 963 => " Syrian Arab Republic", 886 => " Taiwan China", 992 => " Tajikistan (Republic of)", 255 => " Tanzania (United Republic of)", 66 => " Thailand", 389 => " The Former Yugoslav Republic of Macedonia", 228 => " Togolese Republic", 690 => " Tokelau", 676 => " Tonga (Kingdom of)", 1 => " Trinidad and Tobago", 290 => " Tristan da Cunha", 216 => " Tunisia", 90 => " Turkey", 993 => " Turkmenistan", 1 => " Turks and Caicos Islands", 688 => " Tuvalu", 256 => " Uganda (Republic of)", 380 => " Ukraine", 971 => " United Arab Emirates", 44 => " United Kingdom of Great Britain and Northern Ireland ", 1 => " United States of America", 1 => " United States Virgin Islands", 598 => " Uruguay (Eastern Republic of)", 998 => " Uzbekistan (Republic of)", 678 => " Vanuatu (Republic of)", 379 => " Vatican City State", 39 => " Vatican City State", 58 => " Venezuela (Bolivarian Republic of)", 84 => " Viet Nam (Socialist Republic of)", 681 => " Wallis and Futuna (Territoire français d\"outre-mer)", 967 => " Yemen (Republic of)", 260 => "Zambia (Republic of)", 263 => " Zimbabwe");


        foreach ($x as $key => $value) {
            if ($p == $key) {
                $country_name = $value;
                $code = $key;
            } else {
                $country_name = ' Tanzania (United Republic of)';
                $code = '255';
            }
        }

        $valid_number = $code . $y;

        $valid = array($country_name, $valid_number);
        return $valid;
    }
}

function write_file($file_path, $msg, $mode = 'a+') {
    $name = basename($file_path);
    $folder = str_replace($name, '', $file_path);
    if (!is_dir($folder)) {
        mkdir($folder, 0777, TRUE);
    }
    $handle = fopen($file_path, 'a+');
    fwrite($handle, $msg);
    fclose($handle);
}

/**
 * 
 * @param type $text
 * @param type $limit=3
 * @return type string
 */
function word_limiter($text, $limit = 3) {
    $explode = explode(' ', $text);
    $string = '';

    $dots = '...';
    if (str_word_count($text) < $limit) {
        $limit = str_word_count($text);
    }
    if (count($explode) <= $limit) {
        $dots = '';
    }
    for ($i = 0; $i < $limit; $i++) {
        $string .= $explode[$i] . " ";
    }
    if ($dots) {
        $string = substr($string, 0, strlen($string));
    }

    return $string . $dots;
}

function return_no_of_sms($cost) {
    if ($cost <= 40000) {
        $plan = SILVER_COST;
    } elseif ($cost > 40000 && $cost < 105035) {
        $plan = DIAMOND_COST;
    } else {
        $plan = GOLD_COST;
    }
    $number_of_sms = $cost / $plan;
    return $number_of_sms;
}

function remove_invisible_characters($str, $url_encoded = TRUE) {
    $non_displayables = array();

    // every control character except newline (dec 10)
    // carriage return (dec 13), and horizontal tab (dec 09)

    if ($url_encoded) {
        $non_displayables[] = '/%0[0-8bcef]/'; // url encoded 00-08, 11, 12, 14, 15
        $non_displayables[] = '/%1[0-9a-f]/'; // url encoded 16-31
    }

    $non_displayables[] = '/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]+/S'; // 00-08, 11, 12, 14-31, 127

    do {
        $str = preg_replace($non_displayables, '', $str, -1, $count);
    } while ($count);

    return $str;
}

/**
 * 
 * @param type this are contents that contains urls for user to be able to click
 * @return type
 */
function make_links_clickable($text) {
    return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<a href="$1">$1</a>', $text);
}
?>

