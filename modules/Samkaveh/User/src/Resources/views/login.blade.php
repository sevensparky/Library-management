<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ورود | کنترل پنل</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="/dist/css/rtl.css">
  <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/dist/css/AdminLTE.css">
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $item)
                {{ $item }}
            @endforeach
        </ul>
    </div>
@endif
    <div class="login-logo">
    <a href="#"><b>ورود به سایت</b></a>
  </div>
  <div class="login-box-body">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="ایمیل">
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="رمز عبور">
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">ورود</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/plugins/iCheck/icheck.min.js"></script>
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
