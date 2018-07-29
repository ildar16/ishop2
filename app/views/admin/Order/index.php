
<section class="content-header">
    <h1>
        Список заказов
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/order"><i class="fa fa-list-ul"></i> Список заказов</a></li>
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
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Покупатель</th>
                                <th>Статус</th>
                                <th>Сумма</th>
                                <th>Дата создания</th>
                                <th>Дата изменения</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($orders as $order): ?>
                                <?php
                                    if ($order['status'] == '1'){
                                        $class = 'success';
                                        $text = 'Завершен';
                                    }elseif($order['status'] == '2'){
                                        $class = 'info';
                                        $text = 'Оплачен';
                                    }else{
                                        $class = '';
                                        $text = 'Новый';
                                    }
//                                $class = $order['status'] ? 'success' : '';
                                ?>
                            <tr class="<?=$class?>">
                                <td><?=$order['id'];?></td>
                                <td><?=$order['name'];?></td>
                                <td><?=$text;?></td>
                                <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                                <td><?=$order['date'];?></td>
                                <td><?=$order['update_at'];?></td>
                                <td><a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>" class="btn btn-info btn-exs">
                                        Детальный просмотр</a>
                                    <?php if (!$order['status']): ?>
                                        <a href="<?= ADMIN?>/order/change?id=<?=$order['id'];?>&status=1" class="btn btn-success btn-exs">Одобрить</a>

                                    <?php else:?>
                                        <a href="<?= ADMIN?>/order/change?id=<?=$order['id'];?>&status=0" class="btn btn-default">Вернуть на доработку</a>
                                    <?php endif; ?>
                                    <a href="<?=ADMIN?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger delete">Удалить</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($orders);?> заказа(ов) из <?=$count?>)</p>
                        <?php if ($pagination->countPages > 1): ?>
                            <?=$pagination?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
