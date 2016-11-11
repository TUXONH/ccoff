<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caribean Connection</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    {!!Html::style('bootstrap/css/bootstrap.min.css')!!}
    <!-- Font Awesome -->
    {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')!!}
    <!-- Ionicons -->
    {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
    <!-- Theme style -->
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    {!! Html::style('dist/css/style.css') !!}
    {!!Html::style('plugins/iCheck/flat/blue.css')!!}
    {!!Html::script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')!!}
    {!!Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')!!}
    <![endif]-->
</head>
<body class="hold-transition login-page">
@include('alerts.error')
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Caribbean</b>Connection</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Incio de sesion</p>
        {!! Form::open(['route'=>'log.store', 'method'=>'POST']) !!}
            <div class="form-group has-feedback">
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa tu correo']) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa tu contraseña'])!!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class = "col-xs-2"></div>
                <div class="col-xs-6">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Recordar</input>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    {!! Form::submit('Iniciar', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
{!!Html::script('bootstrap/js/bootstrap.min.js')!!}
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
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