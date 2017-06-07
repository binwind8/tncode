<?php
//var_dump(gd_info());exit;
ini_set('display_errors','On');
error_reporting(7);
require_once dirname(__FILE__).'/TnCode.class.php';

$tn  = new TnCode();
$tn->make();

?>
