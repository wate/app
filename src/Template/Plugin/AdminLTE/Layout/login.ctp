<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= Configure::read('Theme.title'); ?> | <?= $this->fetch('title'); ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <?= $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>
        <!-- Font Awesome -->
        <?= $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
        <!-- Ionicons -->
        <?= $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
        <!-- Theme style -->
        <?= $this->Html->css('AdminLTE.AdminLTE.min'); ?>
        <!-- iCheck -->
        <?= $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <?= $this->fetch('css'); ?>
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?= $this->Url->build(); ?>"><?= Configure::read('Theme.logo.large') ?></a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">
                    ユーザー名とパスワードを入力して<br>
                    ログインしてください。
                </p>
                <?= $this->fetch('content'); ?>
                <?php if (Configure::read('Theme.login.show_social')) { ?>
                <div class="social-auth-links text-center">
                    <p>- または -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat">
                        <i class="fa fa-facebook"></i>
                        Facebookアカウントでログインする
                    </a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat">
                        <i class="fa fa-google-plus"></i>
                        Googleアカウントでログインする
                    </a>
                </div>
                    <!-- /.social-auth-links -->
                <?php } ?>

                <?php if (Configure::read('Theme.login.show_remember')) { ?>
                    <a href="#">パスワードを忘れた方は</a><br>
                <?php } ?>
                <?php if (Configure::read('Theme.login.show_register')) { ?>
                    <a href="#" class="text-center">会員登録する</a>
                <?php } ?>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <?= $this->Html->script('AdminLTE./bower_components/jquery/dist/jquery.min'); ?>
        <!-- Bootstrap 3.3.7 -->
        <?= $this->Html->script('AdminLTE./bower_components/bootstrap/dist/js/bootstrap.min'); ?>
        <!-- iCheck -->
        <?= $this->Html->script('AdminLTE./plugins/iCheck/icheck.min'); ?>

        <?= $this->fetch('script'); ?>

        <?= $this->fetch('scriptBottom'); ?>

        <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
        </script>
    </body>
</html>
