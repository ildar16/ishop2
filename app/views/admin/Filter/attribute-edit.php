
<section class="content-header">
    <h1>
        Редактирование фильтра - "<?= h($attr->value); ?>"
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/filter/attribute"><i class="fa fa-list-ul"></i> Список фильтров</a></li>
        <li><i class="fa fa-archive"></i> Редактирование фильтра</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <form action="<?=ADMIN?>/filter/attribute-edit" method="post" data-toggle="validator">
                    <div class="box">
                        <div class="form-group has-feedback">
                            <label for="value">Наименование</label>
                            <input type="text" name="value" class="form-control" id="value" placeholder="Наименование группы" required value="<?= h($attr->value); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="attr_group_id">Группа</label>
                            <select name="attr_group_id" id="category_id" class="form-control">
                                <option>Выберите группу</option>
                                <?php foreach ($attrs_group as $item): ?>
                                    <option value="<?= $item->id;?>" <?php if ($item->id == $attr->attr_group_id) echo ' selected'; ?>><?= $item->title;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$attr->id;?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>
