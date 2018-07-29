
<section class="content-header">
    <h1>
        Редактирование товара <?= $product->title; ?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/product"><i class="fa fa-list-ul"></i> Список товаров</a></li>
        <li><i class="fa fa-archive"></i> Редактирование</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN?>/product/edit/" method="post" data-toggle="validator" id="add">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование товара</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?= h($product->title); ?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Категория товара</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'container' => 'select required',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'category_id',
                                    'id' => 'category_id'
                                ],
                            ]);?>
                        </div>
                        <div class="form-group">
                            <label for="title">Keywords</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" value="<?= h($product->keywords); ?>" placeholder="Ключевые слова">

                        </div>
                        <div class="form-group">
                            <label for="title">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?= h($product->description); ?>">

                        </div>
                        <div class="form-group has-feedback">
                            <label for="title">Цена</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Цена" pattern="^[0-9.]{1,}$" value="<?= h($product->price); ?>" required  data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="title">Старая цена</label>
                            <input type="text" name="old_price" class="form-control" id="old_price" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="<?= h($product->old_price); ?>"  data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label for="title">Контент</label>
                            <textarea name="content" id="editor1" name="editor1" cols="80" rows="10">
                                    <?= $product->content; ?>
                                </textarea>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" <?= $product->status ? 'checked' : null; ?>> Статус
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit" <?= $product->hit ? 'checked' : null; ?>> Хит
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="related">Связанные товары</label>
                            <select name="related[]" class="form-control select2" id="related" multiple="">
                                <?php if (!empty($relatedProduct)): ?>
                                <?php foreach ($relatedProduct as $item): ?>
                                        <option value="<?= $item['related_id']; ?>" selected><?= $item['title']; ?></option>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">

                            <?php new \app\widgets\filter\Filter($filter, WWW . '/filter/admin_filter_tpl.php');?>

                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="box box-danger box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Базовое изображение</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single"  class="btn btn-success" data-url="product/add-image" data-name="single">
                                            Выбрать файл
                                        </div>
                                        <p><small>Рекомендумемые размеры: 125х200</small></p>
                                        <div class="single">
                                            <img src="/images/<?= $product->img; ?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-8">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинки галереи</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="multi" class="btn btn-success" data-url="product/add-image" data-name="multi">
                                            Выбрать файл
                                        </div>
                                        <p><small>Рекомендумемые размеры: 700х1000</small></p>
                                        <div class="multi">
                                            <?php if (!empty($gallery)): ?>
                                                <?php foreach ($gallery as $item): ?>
                                                    <img src="/images/<?= $item; ?>" alt="" style="max-height: 150px; cursor: pointer;" data-id="<?=$product->id;?>" data-src="<?=$item?>" class="del-item">
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                            <div class="form-group">-->
                        <!--                                <table class="table information_json">-->
                        <!--                                    <tr>-->
                        <!--                                        <th>Название поля</th>-->
                        <!--                                        <th>Значение поля</th>-->
                        <!--                                        <th></th>-->
                        <!--                                    </tr>-->
                        <!--                                    <tr class="information_json_plus">-->
                        <!--                                        <td></td>-->
                        <!--                                        <td></td>-->
                        <!--                                        <td><span class="btn btn-success plus pull-right">+</span></td>-->
                        <!--                                    </tr>-->
                        <!--                                </table>-->
                        <!--                            </div>-->

                    </div>



                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= $product->id; ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>

                <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']);?>
            </div>
        </div>
    </div>

</section>
