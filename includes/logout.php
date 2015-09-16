<?php
require_once "Auth.php";
$title = 'Home';  
$options = array(
'dsn' => 'mysql://admin39halFD:Fdnv72D2mZjX@127.7.188.2/app1',
'table' => 'users',
'usernamecol' => 'email',
'passwordcol' => 'pass',
'cryptType' => 'sha1',
'db_fields' => '*',
'advancedsecurity' => 'true'
);
$a = new Auth("DB", $options, "loginFunction", $optional);
$a->start();
$a->logout();
header("Location: http://app1-rhroyston.rhcloud.com");
?>
