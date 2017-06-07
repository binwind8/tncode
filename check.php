<?php
require_once dirname(__FILE__).'/TnCode.class.php';
$tn  = new TnCode();
if($tn->check()){
    echo "ok";
}else{
    echo "error";
}

?>
