<div class="container">

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li class="active">Личный кабинет</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="text-align: center;">Личный кабинет</h2>

    <div class="prdt">
        <div class="container">
            <div class="prdt-top">
                <div class="col-md-12">
                    <div class="product-one login">
                        <div class="register-top heading">
                            <p>Логин: <?=$_SESSION['user']['login'];?></p>
                            <p>Имя: <?=$_SESSION['user']['name'];?></p>
                            <p>Емайл: <?=$_SESSION['user']['email'];?></p>
                            <p>Адрес: <?=$_SESSION['user']['address'];?></p>
                            <a href="user/edit" class="btn btn-default">Изменить личные данные</a>
                            <a href="user/orders" class="btn btn-default">История заказов</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>