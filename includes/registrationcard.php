<div class="mdl-card mdl-card-wide mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Register</h2>
    </div>  
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="access">
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">    
                <input class="mdl-textfield__input" type="text" minlength="3" name="username" id="username" value="" disabled>
                <span class="mdl-textfield__error">Minimum Length 3 Characters</span>
                <label class="mdl-textfield__label" for="username">Username...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="password" id="password" value="" disabled>
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                <label class="mdl-textfield__label" for="password">Password...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="password" minlength="5" name="confirmPassword" id="confirmPassword" value="" disabled>
                <span class="mdl-textfield__error">Minumum Length 5 Characters</span>
                <label class="mdl-textfield__label" for="confirmPassword">Confirm Password...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="firstname" id="firstname" maxlength="20" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="firstname">First Name...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
                <input class="mdl-textfield__input" type="text" name="lastname" id="lastname" maxlength="40" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="lastname">Last Name...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" name="street" id="street" maxlength="40" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="street">Street...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="city" id="city" maxlength="40" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="city">City...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="state" id="state" maxlength="2" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="state">State...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="zip" id="zip" maxlength="5" value="" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="zip">Zip...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" name="birthday" id="birthday" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" disabled>
                <span class="mdl-textfield__error">Format xx/xx/xxxx</span>
                <label class="mdl-textfield__label" for="birthday">Birthday...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--4-col">
                <input class="mdl-textfield__input" type="text" maxlength="13" name="phone" id="phone" disabled>
                <span class="mdl-textfield__error"></span>
                <label class="mdl-textfield__label" for="phone">Phone...</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell--2-col">
                <input type="hidden" name="register" value="True">
            </div>
            <br>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--primary" disabled>
                Register
            </button>
        </form>
    </div>
</div>
