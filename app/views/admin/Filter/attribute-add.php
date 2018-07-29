
<section class="content-header">
    <h1>
        Новый фильтр
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/filter/attribute"><i class="fa fa-list-ul"></i> Список фильтров</a></li>
        <li><i class="fa fa-archive"></i> Новый фильтр</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <form action="<?=ADMIN?>/filter/attribute-add/" method="post" data-toggle="validator" id="add">
                    <div class="box">
                        <div class="form-group has-feedback">
                            <label for="value">Наименование</label>
                            <input type="text" name="value" class="form-control" id="value" placeholder="Наименование группы" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="attr_group_id">Группа</label>
                            <select name="attr_group_id" id="category_id" class="form-control">
                                <option>Выберите группу</option>
                            <?php foreach ($group as $item): ?>
                                <option value="<?= $item->id;?>"><?= $item->title;?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Добавить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>
