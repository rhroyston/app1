<div class="mdl-card mdl-card-std mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Sign In</h2>
    </div>
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="access">
            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" name="username" id="username"/>
                <label class="mdl-textfield__label" for="username">Username...</label>
                
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input" type="password" name="password" id="password" maxlength="40" />
                <label class="mdl-textfield__label" for="password">Password...</label>
            </div>
            <div class="mdl-card__actions send-button">
                <button type="submit" value="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" id="send">
                    LOG IN  
                </button>
            <?php if(isset($_SESSION['message'])){
                $message=$_SESSION['message'];
                unset ($_SESSION['message']);
                echo '<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">';
                echo "<p class=\"red\">$message</p>";
                echo '</div>';
            }
            ?>
            </div>
        </form>
    </div>
</div>

