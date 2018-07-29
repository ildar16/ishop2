
<section class="content-header">
    <h1>
        Новая группа фильтров
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/filter/attribute-group"><i class="fa fa-list-ul"></i> Группа фильтров</a></li>
        <li><i class="fa fa-archive"></i> Добавление фильтров</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box-body">
                <form action="<?=ADMIN?>/filter/group-add/" method="post" data-toggle="validator">
                    <div class="box">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование группы</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование группы" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <div class="help-block with-errors"></div>

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
