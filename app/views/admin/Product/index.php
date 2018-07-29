
<section class="content-header">
    <h1>
        Список товаров
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/products"><i class="fa fa-list-ul"></i> Список товаров</a></li>
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
                                <th>Категория</th>
                                <th>Наименование</th>
                                <th>Цена</th>
                                <th>Статус</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?=$product['id'];?></td>
                                    <td><?=$product['cat'];?></td>
                                    <td><?=$product['title'];?></td>
                                    <td><?=$product['price'];?></td>
                                    <td><?=$product['status'] ? 'ON' : 'OFF';?></td>
                                    <td><a href="<?=ADMIN;?>/product/edit?id=<?=$product['id'];?>" class="btn btn-info btn-exs">
                                            Детальный просмотр</a>
                                        <a href="<?=ADMIN?>/product/delete?id=<?=$product['id'];?>" class="btn btn-danger delete">Удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($products);?> товаров(ов) из <?=$count?>)</p>
                        <?php if ($pagination->countPages > 1): ?>
                            <?=$pagination?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
