<div class="container">

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li>Личный кабинет</li>
                    <li class="active">Редактирование данных</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="text-align: center;">Редактирование данных</h2>

    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-12">
                    <div class="product-one login">

                            <form action="/user/edit" method="post" data-toggle="validator">
                                <div class="box-body">
                                    <div class="form-group has-feedback">
                                        <label for="login">Логин</label>
                                        <input type="text" class="form-control" name="login" id="login" value="<?=h($_SESSION['user']['login']);?>" required>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="login">Пароль</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="login">Имя</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?=h($_SESSION['user']['name']);?>" required>
                                        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="login">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?=h($_SESSION['user']['email']);?>" required>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="login">Адрес</label>
                                        <input type="text" class="form-control" name="address" id="address" value="<?=h($_SESSION['user']['address']);?>" required>
                                        <span class="glyphicon glyphicon-home form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>