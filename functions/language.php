<?php
$db = new DB();
if($_GET['lang'] == 'nl')
{
    $switch = 1;
} else if($_GET['lang'] == 'en')
{
    $switch = 2;
}
define('HEADER_ITEM', $db->Read('header_content', 'header_title', 'lang_id = '.$switch));
var_dump(HEADER_ITEM[0]);