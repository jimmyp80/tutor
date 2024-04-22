<?php
include 'core/init.php';
logged_in_redirect();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body class="bg-gray-200">
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" action="login.php" method="post" class="text-start" autocomplete="off">
                                    <div class="input-group input-group-static my-3">
                                        <label for="emailLogin">Email</label>
                                        <input type="email" class="form-control" name="emailLogin" id="emailLogin" required value="<?php if(isset($_COOKIE['remember_me'])){echo $_COOKIE['remember_me'];}else{echo '';}?>">
                                    </div>
                                    <div class="input-group input-group-static mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required autocomplete="new-password">
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE['remember_me'])){echo 'checked';}?>>
                                        <label class="form-check-label mb-0 ms-2" for="remember">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Don't have an account?
                                        <a href="#" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                  document.write(new Date().getFullYear())
                                </script> Tutor CRM Ltd <i class="fa fa-heart" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link pe-0 text-white" target="_blank">Licence</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
<?php include 'includes/overall/footer.php'; ?>