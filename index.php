<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL', 'http://stardust.test/');

// default language
if(!isset($_GET['lang'])) $_GET['lang'] = 'en';

// require database
require_once(implode(DS, ['database', 'db.php']));

// include all functions
foreach(glob(implode(DS, [__DIR__, 'functions', '*.php'])) as $item){
    require_once($item);
};

// show page
include_once(implode(DS, ['resources', 'header.php']));

$page = 'home';
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
}
include_once(sprintf(implode(DS, ['resources', 'views', '%s.php']), $page));

include_once(implode(DS, ['resources', 'footer.php']));

