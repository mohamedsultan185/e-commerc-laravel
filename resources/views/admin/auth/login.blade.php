<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Start Bootstrap</title>

    <link href="{{asset('assets/vendor/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/auth.css')}}" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">

                    <h6 class="mb-4 text-muted"> admin </h6>

                    <form action="" method="">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="signup.html">Signup</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/vendor/jquery3/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>

</body>
</html>
