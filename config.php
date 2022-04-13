<?php

$db = new mysqli("localhost", "root", "", "med1");
require_once("./libs/Smarty.class.php");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');



?>