<div class="container">
<div class="col-lg-4"><h3>Login</h3></div>
    <div class="col-lg-4">
        <form class="loginform" method="post">
            <?php
            if(isset($_POST['submit'])){
                if(!isset($_SESSION['username'])){
                    echo '<div class="alert alert-danger" style="margin-top:-75px;">
                            <strong>Wrong username or password</strong>
                        </div>';
                }
            }
            ?>
            <div class="form-group">
                <label>Username</label>
<input class="form-control" type="text" name="username" placeholder="Username">
</div>
<div class="form-group">
    <label>Password</label>
    <input class="form-control" type="password" name="password" placeholder="Password">
</div>
<button name="submit" type="submit" class="btn btn-default">Submit</button>
<button name="register" class="register btn btn-default">Register</button>
</form>
</div>
<div class="col-lg-4"></div>
</div>