<?php include 'layout/header.php' ?>
<?php include 'layout/navbar.php' ?>

<div class="container">
    <div class="col">
        <div class="row text-center ">

            <main class="form-signin w-50 m-auto">
                <form action="views/hal_admin.php">
                    <img class="mb-4" src="img/madi.jpg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; WPL@2023</p>
                </form>
            </main>

        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>