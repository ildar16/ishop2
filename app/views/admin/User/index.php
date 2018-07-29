
<section class="content-header">
    <h1>
        Список пользователей
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/users"><i class="fa fa-list-ul"></i> Список пользователей</a></li>
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
                                <th>Логин</th>
                                <th>Емайл</th>
                                <th>Имя</th>
                                <th>Роль</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr <?php if ($user->login == 'admin') echo "class='bg-warning'";?>>
                                    <td><?=$user->id;?></td>
                                    <td><?=$user->login;?></td>
                                    <td><?=$user->email;?></td>
                                    <td><?=$user->name;?></td>
                                    <td><?=$user->role;?></td>
                                    <td><a href="<?=ADMIN;?>/user/edit?id=<?=$user->id;?>"><i class="fa fa-fw fa-eye"></i></a> <?php if ($user->role != 'admin') echo "<a href='" . ADMIN . "/user/delete?id=" . $user->id . "'><i class='fa fa-fw fa-close delete text-danger'></i></a>";?> </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <p>(<?=count($users);?> пользователей(ов) из <?=$count?>)</p>
                        <?php if ($pagination->countPages > 1): ?>
                            <?=$pagination?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
