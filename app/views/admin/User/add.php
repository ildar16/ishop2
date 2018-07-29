
<section class="content-header">
    <h1>
        Создание пользователя
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/user"><i class="fa fa-user"></i> Создание пользователя</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="/user/signup" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="login">Логин</label>
                            <input type="text" class="form-control" name="login" id="login" value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : ''; ?>" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="login">Пароль</label>
                            <input type="text" class="form-control" name="password" id="password" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" placeholder="Введите пароль">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="login">Имя</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : ''; ?>" required>
                            <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="login">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : ''; ?>" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="login">Адрес</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : ''; ?>" required>

                            <span class="glyphicon glyphicon-home form-control-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="login">Роль</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
                <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
        </div>
    </div>

</section>
