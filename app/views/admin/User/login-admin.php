<?php if (isset($_SESSION['error'])): ?>
    <div class="box-body">
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-ban"></i> Ошибка!</h4>
            <?= $_SESSION['error']; unset($_SESSION['error']);?>
        </div>
    </div>
<?php endif; ?>
<div class="login-box">
    <div class="login-logo">
        <b>ishop</b>2
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <form action="<?=ADMIN?>/user/login-admin/" method="post">
            <div class="form-group has-feedback">
                <input name="login" type="text" class="form-control" placeholder="Login">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
                </div>
                <!-- /.col -->
            </div>
        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->