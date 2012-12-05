<?php
define('DS',DIRECTORY_SEPARATOR);
define('SOURCE_DIR',dirname(__FILE__).DS.'..'.DS);
define('SMARTY_DIR', dirname(__FILE__).DS.'..'.DS.'smarty'.DS);
require_once(SOURCE_DIR.'phplib'.DS.'const.php');
require_once(SMARTY_DIR . 'Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir(TEMPLATES_DIR);
$smarty->setCompileDir(SMARTY_DIR.'templates_c'.DS);
$smarty->setConfigDir(SMARTY_DIR.'configs'.DS);
$smarty->setCacheDir(SMARTY_DIR.'cache'.DS);

require_once(PHPLIB_DIR.'functions.php');
require_once(CTRL_DIR.'db.class.php');
?>
