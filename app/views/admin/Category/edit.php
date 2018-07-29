
<section class="content-header">
    <h1>
        Редактирование категории <?= $category->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category"><i class="fa fa-list-ul"></i> Редактирование категории</a></li>
        <li><i class="fa fa-archive"></i> <?= $category->title;?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <form action="<?=ADMIN?>/category/edit" method="post" data-toggle="validator">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование категории</label>
                            <input type="text" name="title" class="form-control" value="<?= h($category->title)?>" id="title" placeholder="Наименование категории" required>
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
                            <input type="text" name="keywords" class="form-control" value="<?= h($category->keywords)?>" id="keywords" placeholder="Ключевые слова">

                            <label for="title">Описание</label>
                            <input type="text" name="description" class="form-control" value="<?= h($category->description)?>" id="description" placeholder="Описание">
                        </div>
                </div>
                <div class="box-footer">
                    <input type="hidden" name="id" value="<?= $category->id;?>">
                    <button type="submit" class="btn btn-success">Редактировать</button>
                </div>
                </form>

                <?php ?>
            </div>
        </div>
    </div>

</section>
