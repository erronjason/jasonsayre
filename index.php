<?php

ob_start('ob_gzhandler');

// Directories
define('ROOT_DIR', dirname(__FILE__));
define('APP_DIR', dirname(__FILE__).'/app');
define('ROUTER_DIR', APP_DIR.'/router');
define('TEMPLATE_DIR', APP_DIR.'/templates');
define('PARTIALS_DIR', TEMPLATE_DIR.'/partials');
define('VIEWS_DIR', APP_DIR.'/views');
define('ASSETS_DIR', 'app/assets');


$ru = &$_SERVER['REQUEST_URI'];
$qmp = strpos($ru, '?');
list($path, $params) = $qmp === FALSE
    ? array($ru, NULL)
    : array(substr($ru, 0, $qmp), substr($ru, $qmp + 1));
$parts = explode('/', $path);
$i = 0;
foreach ($parts as $part) {
    if (strlen($part) && $part !== '..' && $part !== '.') {
        define('URI_PART_'.$i++, $part);
    }
}
define('URI_PARAM', isset($params) ? '' : $params);
define('URI_PARTS', $i);
define('URI_PATH', $path);
define('URI_REQUEST', $_SERVER['REQUEST_URI']);
session_start();
include ROUTER_DIR.'/router.php';
include ROUTER_DIR.'/config.routes.php';

if ($ctrl = Router::controller()) {
    include $ctrl;
}
else {
    header('HTTP/1.1 404 Not Found');
}
?>
