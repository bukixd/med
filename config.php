<?php
require_once('./model/Patient.class.php');
require('./vendor/autoload.php');


$db = new mysqli("localhost", "root", "", "med1");
$smarty = new Smarty();

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');



?>