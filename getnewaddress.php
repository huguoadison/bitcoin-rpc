<?php
require_once 'easybitcoin.php';

$rpcuser='your rpcusername';
$rpcpasswords='your rpcpassword';
$bitcoin=new bitcoin("$rpcuser","$rpcpasswords");
$addr=$bitcoin->getnewaddress();

?>
