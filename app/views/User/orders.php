<div class="container">

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li>Личный кабинет</li>
                    <li class="active">История заказов</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="text-align: center;">История заказов</h2>

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th style="width: 10%">ID</th>
            <th style="width: 10%">Статус</th>
            <th style="width: 10%">Сумма</th>
            <th style="width: 10%">Дата создания</th>
            <th style="width: 10%">Дата изменения</th>
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
            ?>
            <tr class="<?=$class?>">
                <td><?=$order['id'];?></td>
                <td><?=$text;?></td>
                <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                <td><?=$order['date'];?></td>
                <td><?=$order['update_at'];?></td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>