<?php
require_once dirname(__FILE__).'/TnCode.class.php';
$tn  = new TnCode();
if($tn->check()){
	$_SESSION['tncode_check'] = 'ok';
    echo "ok";
}else{
	$_SESSION['tncode_check'] = 'error';
    echo "error";
}

?>
