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
      <header class="mdl-layout__header mdl-layout__header--scroll">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title bangers">standard ip</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <?php
              if ($a->getAuth()) {
                echo "<a class=\"mdl-navigation__link\" href=\"profile\">" . $a->getAuthData('firstname') . "</a>";
                echo '<a class="mdl-navigation__link" href="includes/logout">logout</a>';
              } else {
                echo '<a class="mdl-navigation__link" href="access">Login &#47; Register</a>';
              }
            ?>
          </nav>
        </div>
      </header>
        <div class="mdl-layout__drawer">
          <span class="mdl-layout-title bangers">Title</span>
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link special-elite" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
          </nav>
        </div>
        <main class="mdl-layout__content">
          <div class="page-content">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
              <div class="mdl-cell mdl-cell--12-col">
                <!-- Your content goes here -->
                <h1 class="special-elite">This is my homepage</h1>
                <h2>Welcome.</h2>
                <h3>We are glad you visited.</h3>
                <h4>Please check back soon!</h4>
                <p><i class="material-icons fix">person_outline</i>This is what I am saying about this <a class="anchor" href="#">link</a>.</p>
               
                
                <?php

                  if ($a->getAuth()) {
                       echo "One can only see this if he is logged in!";
                       echo $a->getAuthData('firstname') . " <br>";
                  }
                  
                ?>
                <footer class="mdl-mini-footer">
                  <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">
                      More Information
                    </div>
                    <ul class="mdl-mini-footer__link-list anchor">
                      <li><a href="/help">Help</a></li>
                      <li><a href="/terms">Privacy and Terms</a></li>
                      <li><a href="/agreement">User Agreement</a></li>
                    </ul>
                  </div>
                  <div class="mdl-mini-footer__right-section">
                    <button class="mdl-mini-footer__social-btn"></button>
                    <button class="mdl-mini-footer__social-btn"></button>
                    <button class="mdl-mini-footer__social-btn"></button>
                  </div>
                </footer>
              </div>
            </section>
          </div>
        </main>
    </div>
  </body>
</html>
