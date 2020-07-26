<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Fee Bootstrap Admin Theme with Webpack and Laravel-Mix" />
    <meta name="keywords" content="bootstrap, admin theme, admin dashboard, jquery, webpack, laravel-mix, template, responsive" />
    <meta name="author" content="siQuang - Simon Nguyen" />

    <title>Login</title>

    <!-- Core Styles -->
    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body class="theme-dark">

    <div class="login-wrapper">
        <div class="d-flex justify-content-center mt-5">
            <div class="card" id="login-card">
                <div class="card-body text-center">
                    <h3 class="text-carolina bold">KINDAU</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="text-center pb-3">
                            <h5 class="text-center bold">Sign-In</h5>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-checkbox">
                            <label>
                                <input type="checkbox" name="remember">
                                <span class="checkmark"><i class="ti-check"></i></span>
                                Remember
                            </label>
                            <div class="float-right"><a href="javascript:;" class="card-link" id="forget-password">Forgot
                                    password?</a></div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-carolina">Login</button>
                        </div>
                    </form>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">
                        <p><strong>Or login with</strong></p>
                        <button type="button" class="btn btn-outline-primary"><i class="ti-facebook"></i></button>
                        <button type="button" class="btn btn-outline-primary"><i class="ti-twitter"></i></button>
                        <button type="button" class="btn btn-outline-primary"><i class="ti-google"></i></button>
                        <button type="button" class="btn btn-outline-primary"><i class="ti-github"></i></button>
                    </li>
                    <li class="list-group-item text-center">
                        <p class="card-text">Don't have an account? <a href="javascript:;" class="card-link">Sign Up</a></p>
                    </li>
                </ul>
                <div class="card-footer">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem sapiente illum obcaecati unde cum alias assumenda eos animi, temporibus molestiae dignissimos debitis consequatur id aut praesentium nisi accusamus quos possimus.</p>
                    <p><small>Copyright © 2019-2020 siQtheme by 3M Square</small></p>
                </div>
            </div>

            <div class="card" id="forget-card">
                <div class="card-body logo text-center">
                    <h3><span class="text-carolina bold">KINDAU</span></h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="pb-2">
                            <h5 class="text-center bold">Forget Password</h5>
                            <p>Enter email address below to reset your password.</p>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ti-email"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-carolina">Reset Password</button>
                            <a href="#" class="btn btn-secondary" id="forget-cancel">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dist/app.js') }}"></script>
    <script src="assets/scripts/pages/pg_login.js" type="text/javascript"></script>
</body>

</html>
