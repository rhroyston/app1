<div class="mdl-card mdl-card-std mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Sign In</h2>
    </div>
    <div class="mdl-card__supporting-text mdl-grid">
        <form method="post" action="access">
            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
                <input class="mdl-textfield__input" type="text" name="username" id="username" placeholder="Username..."/>
                <span class="mdl-textfield__error"></span>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--12-col">
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

<!-- Square card -->
<style>
.demo-card-square.mdl-card {
  width: 320px;
  height: 320px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:#46B6AC;
}
</style>

<div class="demo-card-square mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title mdl-card--expand">
    <h2 class="mdl-card__title-text">Update</h2>
  </div>
  <div class="mdl-card__supporting-text">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1" />
    <label class="mdl-textfield__label" for="sample1">Text...</label>
  </div> 
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      View Updates
    </a>
  </div>
</div>