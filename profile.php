<?php
  require_once "Auth.php";
  $title = 'Profile';  
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
  if ($a->getAuth()) {
    $email = $a->getUsername();
    $firstname = $a->getAuthData('firstname');
    $lastname = $a->getAuthData('lastname');
    $street = $a->getAuthData('street');
    $city = $a->getAuthData('city');
    $state = $a->getAuthData('state');
    $zip = $a->getAuthData('zip');
    $birthday = $a->getAuthData('birthday');
    $phone = $a->getAuthData('phone');
  }
  
  include 'includes/head.php';

?>
<!-- Produced By Ron Royston, ron@stndip.com -->

<html lang="en">
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--white mdl-color--grey-600">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title font1 xl">rack!</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <?php
              if ($a->getAuth()) {
                echo '<a class="mdl-navigation__link" href="includes/logout">logout</a>';
              } else {
                header("Location: http://app1-rhroyston.rhcloud.com/access");
              }
            ?>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
              <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
              </label>
              <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search" />
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title font1">rack!</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="articles">Articles</a>
          <a class="mdl-navigation__link" href="multimedia">Multimedia</a>
          <a class="mdl-navigation__link" href="downloads">Downloads</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
          <div class="section--center mdl-grid mdl-grid--no-spacing">

            <div class="mdl-card mdl-card-wide mdl-shadow--4dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Contact Information</h2>
                </div>  
                <div class="mdl-card__supporting-text mdl-grid">
                    <form method="post" action="includes/reg">
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">    
                            <input class="mdl-textfield__input font2" type="text" minlength="3" name="username" id="username" value="<?php echo $email ?>" placeholder="Username...">
                            <span class="mdl-textfield__error">Minimum Length 3 Characters</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                            <input class="mdl-textfield__input font2" type="text" name="firstname" id="firstname" maxlength="20" value="<?php echo $firstname ?>" placeholder="First Name...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                            <input class="mdl-textfield__input font2" type="text" name="lastname" id="lastname" maxlength="40" value="<?php echo $lastname ?>" placeholder="Last Name...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                            <input class="mdl-textfield__input font2" type="text" name="street" id="street" maxlength="40" value="<?php echo $street ?>" placeholder="Street...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                            <input class="mdl-textfield__input font2" type="text" name="city" id="city" maxlength="40" value="<?php echo $city ?>" placeholder="City...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                            <input class="mdl-textfield__input font2" type="text" name="state" id="state" maxlength="2" value="<?php echo $state ?>" placeholder="State...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                            <input class="mdl-textfield__input font2" type="text" name="zip" id="zip" maxlength="5" value="<?php echo $zip ?>" placeholder="ZIP...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                            <input class="mdl-textfield__input font2" type="text" name="birthday" id="birthday" value="<?php echo $birthday ?>" placeholder="Birthday...">
                            <span class="mdl-textfield__error">Format xx/xx/xxxx</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                            <input class="mdl-textfield__input font2" type="text" maxlength="13" name="phone" id="phone" value="<?php echo $phone ?>" placeholder="Phone...">
                            <span class="mdl-textfield__error"></span>
                        </div>
                        <br>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                            Update
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mdl-card mdl-card-wide mdl-shadow--4dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Change Password</h2>
                </div>  
                <div class="mdl-card__supporting-text mdl-grid">
                    <form method="post" action="includes/reg">
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col font2">
                            <input class="mdl-textfield__input" type="password" minlength="5" name="password" id="password" value="" placeholder="Password...">
                            <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col font2">
                            <input class="mdl-textfield__input" type="password" minlength="5" name="confirmPassword" id="confirmPassword" value="" placeholder="Confirm Password...">
                            <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                        </div>
                        <br>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary">
                            Update
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
  </body>
</html>