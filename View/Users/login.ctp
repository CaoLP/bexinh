<form class="form-signin" role="form" method="post">
    <h3 class="form-signin-heading">Please sign in</h3>
    <?php echo $this->Session->flash(); ?>

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="data[User][username]" id="username" placeholder="Username"
                   autocomplete="off"/>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">
                <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="data[User][password]" id="password" placeholder="Password"
                   autocomplete="off"/>
        </div>
    </div>

    <label class="checkbox">
        <input type="checkbox" value="remember-me"> &nbsp Remember me
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>