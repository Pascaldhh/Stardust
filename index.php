<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL', 'http://stardust.test/');

session_start();

if($_GET['lang'] == 'nl')
{
    $switch = 1;
} else if($_GET['lang'] == 'en')
{
    $switch = 2;
}
define('LANG_SWITCH', $switch);

$page = 'home';
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
    if(!file_exists('resources/views/'.$page.'.php'))
    {
        header('Location: ?page=404page');
        exit();
    }
    
}

// require database
require_once(implode(DS, ['database', 'db.php']));

// include all functions
foreach(glob(implode(DS, [__DIR__, 'functions', '*.php'])) as $item){
    require_once($item);
};

// show page
include_once(implode(DS, ['resources', 'header.php']));

include_once(sprintf(implode(DS, ['resources', 'views', '%s.php']), $page));

include_once(implode(DS, ['resources', 'footer.php']));