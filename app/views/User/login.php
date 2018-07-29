<div class="container">

<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Вход</li>
            </ol>
        </div>
    </div>
</div>

    <h2 style="text-align: center;">Вход</h2>

    <form class="col-md-6" action="user/login" method="post" id="signup" role="form" data-toggle="validator">
        <div class="form-group has-feedback">
            <label for="formGroupExampleInput">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Login" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback">
            <label for="formGroupExampleInput2">Password</label>
            <input type="password" data-minlength="6" class="form-control" id="password" name="password" placeholder="Password" data-error="Пароль должен содержать не менее 6 символов" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block">Минимум 6 символов</div>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback">
            <button class="btn btn-primary">Вход</button>
        </div>

    </form>
</div>