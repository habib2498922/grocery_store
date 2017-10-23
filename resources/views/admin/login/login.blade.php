<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>grocery Store admin login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('/adminAssets/')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('/adminAssets/')}}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('/adminAssets/')}}/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html" class="text-bold"><span class="text-success">grocery Store admin login</span></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ route('login') }}" method="post">
            {{csrf_field()}}

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required autofocus />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {{ $errors->has('email') ? $errors->first('email') : '' }}
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="Password"  required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {{ $errors->has('password') ? $errors->first('password') : '' }}
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
            </div>
        </form>
        <a href="register.html" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('/adminAssets/')}}/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('/adminAssets/')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset('/adminAssets/')}}/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
