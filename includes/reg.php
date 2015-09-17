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
function loginFunction($username, $a) {
}
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
    $from = "ron@stndip.com";
    $to = "rhroyston@gmail.com";
    $subject = "Rack Login";
    $body = "Hi,\n\nLogin successful";
    $host = "smtpout.secureserver.net";
    $username = "ron@stndip.com";
    $password = 'nic0tine';
    $headers = array ('From' => $from,
    'To' => $to,
    'Subject' => $subject);
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
    
    $mail = $smtp->send($to, $headers, $body);
    redirectHome();
}
function logoutCallback($username, $a) { 
    header("Location: http://app1-rhroyston.rhcloud.com/access");
    die();
}
function redirectHome(){
    header("Location: http://app1-rhroyston.rhcloud.com");
    die();    
}

//header("Location: http://app1-rhroyston.rhcloud.com");
?>

