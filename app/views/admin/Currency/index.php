
<section class="content-header">
    <h1>
        Список валют
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/currency"><i class="fa fa-list-ul"></i> Список валют</a></li>
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
                                <th>Наименование</th>
                                <th>Код</th>
                                <th>Значение</th>
                                <th>Актуальность</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($currencies as $currency): ?>
                                <?php $class = $currency->base == 1 ? 'success' : null;?>
                                <tr class="<?=$class?>">
                                    <td><?=$currency->id;?></td>
                                    <td><?=$currency->title;?></td>
                                    <td><?=$currency->code;?></td>
                                    <td><?=$currency->value;?></td>
                                    <td><?= $currency->base == 1 ? 'Текущая валюта' : null;?>
                                    <td>
                            <a href="<?=ADMIN;?>/currency/edit?id=<?=$currency['id'];?>" class="btn btn-info btn-exs">Редактировать</a>
                            <a href="<?=ADMIN?>/currency/delete?id=<?=$currency['id'];?>" class="btn btn-danger delete">Удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
