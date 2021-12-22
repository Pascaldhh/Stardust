<?php

define('HEADER_ITEM', $db->Read('header_content', 'header_title', 'lang_id = '.LANG_SWITCH, PDO::FETCH_COLUMN));
$header_menuNL = $db->Read('header_content', 'header_title', 'lang_id = 1', PDO::FETCH_COLUMN);
$loggedin_menuNL = $db->Read('logged-in_menu', 'content', 'lang_id = 1', PDO::FETCH_COLUMN);
if(isset($_SESSION['role']))
{
    if($_SESSION['role'] == "1")
    {
        define('LOGGEDIN_MENU', $db->Read('logged-in_menu', 'content', 'lang_id = '.LANG_SWITCH.' AND role = '.$_SESSION['role'], PDO::FETCH_COLUMN));
    } else {
        define('LOGGEDIN_MENU', $db->Read('logged-in_menu', 'content', 'lang_id = '.LANG_SWITCH, PDO::FETCH_COLUMN));
    }
    $array2 = [];
    for($j=0; $j<count(LOGGEDIN_MENU); $j++)
    {
        $array2[$j] = strtolower(preg_replace('/\s+/', '-', $loggedin_menuNL[$j]));
    }
} 

$array = [];
for($i=0; $i<count(HEADER_ITEM); $i++)
{
    $array[$i] = strtolower(preg_replace('/\s+/', '-', $header_menuNL[$i]));;
}