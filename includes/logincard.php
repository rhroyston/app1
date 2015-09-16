<div class="mdl-card mdl-card-std mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Sign In</h2>
    </div>
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="access">
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="text" name="username" id="username" placeholder="Username..."/>
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield ">
                <input class="mdl-textfield__input" type="password" name="password" id="password" placeholder="Password..." maxlength="40" />
                <span class="mdl-textfield__error"></span>
            </div>

  
            <div class="mdl-card__actions mdl-cell--12-col send-button">
                <button type="submit" value="login" class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored" id="send">
                    LOG IN  
                </button>
            </div>
        </form>
    </div>
</div>

