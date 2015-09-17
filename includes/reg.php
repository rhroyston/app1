<?php
require_once "Auth.php";
$title = 'Reg';  
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
$a->setLoginCallback('loginCallback');
$a->setLogoutCallback('logoutCallback');
$a->start();

if ($a->addUser($_POST['username'], $_POST['password'], array(
  'firstname' => $_POST['firstname'], 
  'lastname' => $_POST['lastname'],
  'street' => $_POST['street'],
  'city' => $_POST['city'],
  'state' => $_POST['state'],
  'zip' => $_POST['zip'],
  'birthday' => $_POST['birthday'],
  'phone' => $_POST['phone'],
))){
    loginCallback();
}else{
    logoutCallback();   
};
//$a->start();

function loginCallback($username, $a) {
echo 'success';
}
function logoutCallback($username, $a) { 
echo 'failure';
}

//header("Location: http://app1-rhroyston.rhcloud.com");
?>

