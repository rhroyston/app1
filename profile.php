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
  function loginFunction() { 
      // show login page 
  } 
  function loginSuccess($username, $a) { 
      // write successful login to log 
  } 
  function loginFailed($username, $a) { 
      // write failed login to log 
  } 
  
  //$a->setLoginCallback('loginSuccess'); 
  //$a->setFailedLoginCallback('loginFailed'); 
  
  include 'includes/head.php';
  
  //include 'includes/header.php';
  //include 'includes/standard-top.php';
  

?>
<!-- Produced By Ron Royston, ron@stndip.com -->

<html lang="en">
  <body>
    <div class="mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Account Profile</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <?php
              if ($a->getAuth()) {
                $firstname = $a->getAuthData('firstname');
                $lastname = $a->getAuthData('lastname');
                $street = $a->getAuthData('street');
                $city = $a->getAuthData('city');
                $state = $a->getAuthData('state');
                $zip = $a->getAuthData('zip');
                $birthday = $a->getAuthData('birthday');
                $phone = $a->getAuthData('phone');
                echo "<a class=\"mdl-navigation__link\" href=\"profile\">" . $a->getAuthData('firstname') . "</a>";
                echo '<a class="mdl-navigation__link" href="includes/logout">logout</a>';
              } else {
                header("Location: http://app1-rhroyston.rhcloud.com/access");
              }
            ?>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" />
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
        </div>
      </header>
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">

<div class="mdl-card mdl-card-wide mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Register</h2>
    </div>  
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="includes/reg">
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">    
                <input class="mdl-textfield__input" type="text" minlength="3" name="username" id="username" value="" placeholder="Username...">
                <span class="mdl-textfield__error">Minimum Length 3 Characters</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="password" id="password" value="" placeholder="Password...">
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="confirmPassword" id="confirmPassword" value="" placeholder="Confirm Password...">
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="firstname" id="firstname" maxlength="20" value="" placeholder="First Name...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="lastname" id="lastname" maxlength="40" value="" placeholder="Last Name...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" name="street" id="street" maxlength="40" value="" placeholder="Street...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="city" id="city" maxlength="40" value="" placeholder="City...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="state" id="state" maxlength="2" value="" placeholder="State...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="zip" id="zip" maxlength="5" value="" placeholder="ZIP...">
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="birthday" id="birthday" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" placeholder="Birthday...">
                <span class="mdl-textfield__error">Format xx/xx/xxxx</span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--2-col">

            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" maxlength="13" name="phone" id="phone" placeholder="Phone...">
                <span class="mdl-textfield__error"></span>
            </div>
            <br>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                Register
            </button>
        </form>
    </div>
</div>

          </div>
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
              <li><a href="#">User Agreement</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <a href="https://github.com/google/material-design-lite/blob/master/templates/article/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>
    <script src="../../material.min.js"></script>
  </body>
</html>