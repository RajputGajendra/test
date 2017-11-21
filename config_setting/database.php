<?php 
function connectme() {
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'nueulabs_kayamkhani';
$con= mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);
        
    return $con;
}
function FetchAll($sql) {
    $link = connectme();
    $rowObj = mysql_query($sql);
    $result = array();
    $i = 0;
    while ($rows = mysql_fetch_object($rowObj)) {
        foreach ($rows as $k => $v) {
            $result[$i][$k] = stripslashes($v);
        }
        $i++;
    }
    mysql_free_result($rowObj);
    return $result;
}

function FetchRow($sql) {
    $link = connectme();
    $rowObj = mysql_query($sql);
    $result = array();
    while ($rows = mysql_fetch_object($rowObj)) {
        foreach ($rows as $k => $v) {
            $result[$k] = stripcslashes($v);
        }
    }
    mysql_free_result($rowObj);
    return $result;
}
function run_mysql_query($sql) {
    $link = connectme();
     mysql_query($sql);   
}
?>