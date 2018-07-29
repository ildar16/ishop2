
<section class="content-header">
    <h1>
        Добавление категории
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category"><i class="fa fa-list-ul"></i> Список категории</a></li>
        <li><i class="fa fa-archive"></i> Добавление категории</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
                <div class="box-body">
                    <form action="<?=ADMIN?>/category/add/" method="post" data-toggle="validator">
                        <div class="box">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование категории</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование категории" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>

                                <div class="form-group">
                                    <label for="parent_id">Родительская категория</label>
                                    <?php new \app\widgets\menu\Menu([
                                        'tpl' => WWW . '/menu/select.php',
                                        'container' => 'select',
                                        'cache' => 0,
                                        'cacheKey' => 'admin_select',
                                        'class' => 'form-control',
                                        'attrs' => [
                                            'name' => 'parent_id',
                                            'id' => 'parent_id'
                                        ],
                                        'prepend' => '<option value="0">Самостоятельная категория</option>',
                                    ]);?>
                                </div>

                                <label for="title">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">

                                <label for="title">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                            </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
                    </form>

                <?php ?>
            </div>
        </div>
    </div>

</section>
