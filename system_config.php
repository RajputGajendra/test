<?php 
@session_start();
date_default_timezone_set('asia/calcutta');/*
define("ABSPATH", $_SERVER['DOCUMENT_ROOT']);

define("ABSPATH", $_SERVER['DOCUMENT_ROOT']."http://www.nobleworldgenius.com/");
define("SITEPATH", "http://www.nobleworldgenius.com/");*/

define("SITEPATH", "http://localhost/jaihind");
define("ABSPATH", $_SERVER['DOCUMENT_ROOT']."/jaihind");

define("ADMIN_FOLDER", "syspanel");


//echo "asdasdsad";

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
	}
function encryptor($action, $string) {
    $output = false;

    $encrypt_method = "aes128";
    //pls set your unique hashing key
    $secret_key = 'muni';
    $secret_iv = 'muni123';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    //do the encyption given text/string/number
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method,$secret_iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
    	//decrypt the given text/string/number
        $output = openssl_decrypt(base64_decode($string), $encrypt_method,$secret_iv);
    }

    return $output;
}
include(ABSPATH."/config_setting/database.php");
include(ABSPATH."/config_setting/common_function.php");;
include(ABSPATH."/modules/cms.php");
include(ABSPATH."/modules/login.php");

$config['category_thumb'] = "upload/thumb/";
$config['category_large'] = "upload/large/";
$config['category_video'] = "upload/video/";
$config['car'] = array("0" => "Choose Car", "1" => "Large", "2" => "Small");
$config['dsr_status'] = array("0" => "Open", "1" => "Close");
$config['answar'] = array("1" => "A", "2" => "B", "3" => "C", "4" => "D");
$config['display_status'] = array("0" => "Active", "1" => "Inactive");
$config['dnd'] = array("0" => "NO", "1" => "DND");
$config['categorytype'] = array("0" => "Corporate", "1" => "Individual");
$config['gender'] = array("0" => "Male", "1" => "Female");
$config['am_pm'] = array("1" => "AM", "2" => "PM");
$config['Cap'] = array("0" => "Select Size","1" => "Small", "2" => "Medium", "3" => "Large");

$config['keywords'] = array("0" => "Yes", "1" => "No");
$config['services'] = array("0" => "Free", "1" => "Paid");
$config['accounttype'] = array("0" => "Select Account Type", "1" => "Administrator", "2" => "Employee", "3" => "Customer", "4" => "Channel Partner");
$config['paymentyype'] = array("0" => "Select Payment Type", "1" => "Offline Payment", "2" => "Cash On Delivery", "3" => "Online Payment","4" => "Panding");
$config['header_id'] = array("0" => "Binactive", "1" => "Bactive");
$config['delivered_status'] = array("0" => "Panding", "1" => "Delivered");
$config['Artists'] = array("0" => "Select Artists", "1" => "Satypal Verma", "2" => "Naveen Sharma");
$config['size'] = array("0" => "12' * 13'", "1" => "13' * 14'", "2" => "14' * 15'", "3" => "15' * 16'", "4" => "16' * 17'");
$config['prices'] = array("0" => "500", "1" => "600", "2" => "700", "3" => "800", "4" => "900");
$config['designation'] = array("0" => "Select Designation", "1" => "Director", "2" => "Marketing Manger", "3" => "Marketing Executive", "4" => "OutBound Agent ", "5" => "InBound Agent ","6" => "Driver");