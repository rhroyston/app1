<?php
require_once "Auth.php";
include('Mail.php');
$title = 'Access';  
$options = array(
'dsn' => 'mysql://username:password@1.1.1.1/app1',
'table' => 'users',
'usernamecol' => 'email',
'passwordcol' => 'pass',
'cryptType' => 'sha1',
'db_fields' => '*',
'advancedsecurity' => 'true'
);
$a = new Auth("DB", $options, "loginFunction", $optional);

$a->setLogoutCallback('logoutCallback');

function loginFunction() { } 
function loginCallback($username, $a) {
    //echo 'login callback called';
    header("Location: http://app1-rhroyston.rhcloud.com");
    die();
}
function failedLoginCallback($username, $a) {
    //echo 'login callback called';
    $_SESSION["message"]='login failed';
    header("Location: http://app1-rhroyston.rhcloud.com/access");
    die();
}
function registeredCallback($username, $a) {
    //echo 'registered callback called';
    header("Location: http://app1-rhroyston.rhcloud.com/access");
    die();
}
//---- REGISTER 
if ($_POST['register']) {
    $a->setLoginCallback('registeredCallback');
    $activation = md5(uniqid(rand(), true));
    // can add field testing here
    if ($a->addUser($_POST['username'], $_POST['password'], array(
      'firstname' => $_POST['firstname'], 
      'lastname' => $_POST['lastname'],
      'street' => $_POST['street'],
      'city' => $_POST['city'],
      'state' => $_POST['state'],
      'zip' => $_POST['zip'],
      'birthday' => $_POST['birthday'],
      'phone' => $_POST['phone'],
      'activation' => $activation
    ))){
        registeredCallback();
    }else{
        //err here 
    };
}else {
// normal login
$a->setLoginCallback('loginCallback');
$a->setFailedLoginCallback('failedLoginCallback');
$a -> start ();
} 

if ($a->getAuth()) {}
include 'includes/head.php';
?>
<html lang="en">
    <body>
        <!-- Uses a header that scrolls with the text, rather than staying locked at the top -->
        <div class="mdl-layout mdl-js-layout">
            <main class="mdl-layout__content">
                <div class="page-content">
                    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                        <div class="mdl-tabs__tab-bar">
                            <a href="#login-panel" class="mdl-tabs__tab is-active">Log In</a>
                            <a href="#register-panel" class="mdl-tabs__tab">Register</a>
                            <a href="" class="mdl-tabs__tab" id="home">Home</a>
                        </div>
                        <div class="mdl-tabs__panel is-active" id="login-panel">
                            <br>
                            <?php include 'includes/logincard.php';?>
                        </div>
                        <div class="mdl-tabs__panel" id="register-panel">
                            <br>
                            <?php include 'includes/registrationcard.php';?>
                        </div>
                    </div><!-- tabs -->
                </div><!-- content -->
            </main>
        </div><!-- layout -->
    </body>
</html>

