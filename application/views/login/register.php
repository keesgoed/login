<div class="container">
    <div class="col-lg-4"><h3>Register</h3></div>
    <div class="col-lg-4">
        <form class="registerform" method="post">
            <?php
               $this->Auth->add_user();
            ?>
            <div class="form-group">
                <label>Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Emailaddress</label>
                <input class="form-control" type="email" name="email" placeholder="Emailaddress">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password1" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Repeat password</label>
                <input class="form-control" type="password" name="password2" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn btn-default">Submit</button>
            <button name="login" class="register btn btn-default btn_login">Login</button>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>