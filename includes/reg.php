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
  
  

    $a->addUser($_POST['username'], $_POST['password'], array(
        'firstname' => $_POST['firstname'], 
        'lastname' => $_POST['lastname'],
        'street' => $_POST['street'],
        'city' => $_POST['city'],
        'state' => $_POST['state'],
        'zip' => $_POST['zip'],
        'birthday' => $_POST['birthday'],
        'phone' => $_POST['phone'],
        ));
  
  $a->start();
  function loginFunction() { 
      // show login page 
  } 
    function loginCallback($username, $a) { 
        header("Location: http://app1-rhroyston.rhcloud.com");
        die();
    }
    function logoutCallback($username, $a) { 
        header("Location: http://app1-rhroyston.rhcloud.com");
        die();
    }
    function loginSuccess($username, $a) { 
        // write successful login to log 
    } 
    function loginFailed($username, $a) { 
        // write failed login to log 
    }
  //include 'includes/head.php';
    //              if ($a->getAuth()) {
      //              echo "One can only see this if he is logged in!";
        //          }
header("Location: http://app1-rhroyston.rhcloud.com");
?>
<!-- Produced By Ron Royston, ron@stndip.com -->
<html lang="en">
  <body>
  </body>
</html>
