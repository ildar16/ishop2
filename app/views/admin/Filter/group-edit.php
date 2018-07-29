
<section class="content-header">
    <h1>
        Редактирование группы фильтров - "<?= h($group->title); ?>"
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/filter/attribute"><i class="fa fa-list-ul"></i> Список фильтров</a></li>
        <li><i class="fa fa-archive"></i> Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <form action="<?=ADMIN?>/filter/group-edit/" method="post" data-toggle="validator">
                    <div class="box">
                        <div class="form-group has-feedback">
                            <label for="value">Наименование</label>
                            <input type="text" name="title" class="form-control" id="value" placeholder="Наименование группы" required value="<?= h($group->title); ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= h($group->id); ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>
