
<section class="content-header">
    <h1>
        Заказ № <?= $order['id'];?>
        <?php if (!$order['status']): ?>
            <a href="<?= ADMIN?>/order/change?id=<?=$order['id'];?>&status=1" class="btn btn-success btn-exs">Одобрить</a>

            <?php else:?>
            <a href="<?= ADMIN?>/order/change?id=<?=$order['id'];?>&status=0" class="btn btn-default">Вернуть на доработку</a>
        <?php endif; ?>
        <a href="<?=ADMIN?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger delete">Удалить</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/order"><i class="fa fa-list-ul"></i> Список заказов</a></li>
        <li><i class="fa fa-list-ul"></i> Заказ № <?= $order['id'];?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <td>Номер заказа</td>
                                    <td> <?=$order['id'];?></td>
                                </tr>
                                <tr>
                                    <td>Дата заказа</td>
                                    <td> <?=$order['date'];?></td>
                                </tr>
                                <tr>
                                    <td>Дата изменения\редактирования</td>
                                    <td> <?=$order['update_at'];?></td>
                                </tr>
                                <tr>
                                    <td>Кол-во позиции в заказе</td>
                                    <td><?= count($order_products)?></td>
                                </tr>
                                <tr>
                                    <td>Сумма заказа</td>
                                    <td> <?=$order['sum'];?> <?=$order['currency'];?></td>
                                </tr>
                                <tr>
                                    <td>Имя клиента</td>
                                    <td> <?=$order['name'];?></td>
                                </tr>
                                <tr>
                                    <td>Статус заказа</td>
                                    <td> <?//=$order['status'] ? 'Завершенный заказ' : 'Новый' ;?>
                                    <?php
                                        if ($order['status'] == '1'){
                                            echo 'Завершен';
                                        }elseif($order['status'] == '2'){
                                            echo 'Оплачен';
                                        }else{
                                            echo 'Новый';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Комментарии</td>
                                    <td> <?=$order['note'];?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <h3>Детали заказа</h3>
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Нименование</th>
                                <th>Количество</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $qty = 0; foreach ($order_products as $product): ?>
                                    <tr>
                                        <td><?= $product->id;?></td>
                                        <td><?= $product->title;?></td>
                                        <td><?= $product->qty; $qty += $product->qty;?></td>
                                        <td><?= $product->price;?></td>
                                    </tr>
                                <?php endforeach;?>
                                <tr class="active">
                                    <td colspan="2">
                                        <b>Итого: </b>
                                    </td>
                                    <td><b><?= $qty;?></b></td>
                                    <td><b><?= $order['sum'];?> <?= $order['currency'];?></b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
