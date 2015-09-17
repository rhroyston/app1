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
  include 'includes/head.php';
?>
<!-- Produced By Ron Royston, ron@stndip.com -->
<html lang="en">
  <body class="">
    <!-- Uses a header that scrolls with the text, rather than staying locked at the top -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--white mdl-color--grey-600 ">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title font1 xl">rack!</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <?php
              if ($a->getAuth()) {
                echo "<a class=\"mdl-navigation__link\" href=\"profile\">" . $a->getUsername() . "</a>";
                echo '<a class="mdl-navigation__link" href="includes/logout">logout</a>';
              } else {
                echo '<a class="mdl-navigation__link" href="access">Login &#47; Register</a>';
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
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
              <li class="mdl-menu__item">About</li>
              <li class="mdl-menu__item">Contact</li>
              <li class="mdl-menu__item">Legal information</li>
            </ul>
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
            <section class="section--center mdl-grid mdl-grid--no-spacing">
              <div class="mdl-cell mdl-cell--12-col mdl-cell--middle mdl-typography--text-center">
                <!-- Your content goes here -->
                <h1 class="font2">You can&#39;t make this stuff up.</h1>
                <h2>Welcome.</h2>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                
                <?php

                  if ($a->getAuth()) {
                       echo "One can only see this if he is logged in!";
                       echo $a->getAuthData('firstname') . " <br>";
                  }
                  
                ?>
                <footer class="mdl-mini-footer">
                  <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">www.rack.pub</div>
                    <ul class="mdl-mini-footer__link-list">
                      <li><a href="/help">Help</a></li>
                      <li><a href="/terms">Privacy & Terms</a></li>
                    </ul>
                  </div>
                </footer>
              </div>
            </section>
          </div>
        </main>
    </div>
  </body>
</html>
