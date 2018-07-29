<div class="container">

<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Регистрация</li>
            </ol>
        </div>
    </div>
</div>

    <h2 style="text-align: center;">Регистрация</h2>

    <form class="col-md-6" action="user/signup" method="post" id="signup" role="form" data-toggle="validator">
        <div class="form-group has-feedback">
            <label for="formGroupExampleInput">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Login" value="<?=isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : '';?>" required>
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
            <label for="formGroupExampleInput2">Имя</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '';?>" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '';?>" data-error="Некорректный адрес email" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group has-feedback">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?=isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '';?>" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback">
            <button class="btn btn-primary">Регистрация</button>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
        </div>

    </form>
    <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
</div>