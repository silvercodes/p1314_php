<!doctype html>
<html lang="en">
<?php require_once '../components/head.php'; ?>
<body>
    <div class="container">
        
        <div class="row">
            <?php require_once '../components/menu.php'; ?>
        </div>
        
        <div class="row">
            <h1 class="display-6">Registration</h1>
        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <form action="handler.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                        <label for="pass" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="pass">

                        <label for="c_pass" class="form-label">Confirm password</label>
                        <input name="c_password" type="password" class="form-control" id="c_pass">

                        <button class="btn btn-outline-primary mt-4" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
<?php require_once '../components/scripts.php'; ?>
</body>
</html>