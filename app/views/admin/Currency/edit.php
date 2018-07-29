
<section class="content-header">
    <h1>
        Редактирование валют - "<?= $currency->title; ?>"
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/currency"><i class="fa fa-list-ul"></i> Список валют</a></li>
        <li><i class="fa fa-archive"></i> Редактирование валюты</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <form action="<?=ADMIN?>/currency/edit/" method="post" data-toggle="validator">
                    <div class="box">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование валюты</label>
                            <input type="text" name="title" class="form-control" id="title" value="<?= h($currency->title); ?>" placeholder="Наименование валюты" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="code">Код валюты</label>
                            <input type="text" name="code" class="form-control" id="code" value="<?= h($currency->code); ?>" placeholder="Код валюты" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="symbol_left">Символ слева</label>
                            <input type="text" name="symbol_left" class="form-control" value="<?= h($currency->symbol_left); ?>" id="symbol_left" placeholder="Символ слева">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="symbol_right">Символ справа</label>
                            <input type="text" name="symbol_right" class="form-control" value="<?= h($currency->symbol_right); ?>" id="symbol_right" placeholder="Символ справа">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="value">Значение</label>
                            <input type="text" name="value" class="form-control" id="value" value="<?= h($currency->value); ?>" placeholder="Значение" required data-error="Допускаются цифры и десятичная точка" pattern="^[0-9.]{1,}$">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="checkbox" name="base" <?php if ($currency->base) echo ' checked';?>>
                            <label for="value">Базовая валюта</label>
                        </div>

                        <div class="box-footer">
                            <input type="hidden" value="<?= $currency->id; ?>" name="id">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>

</section>
