<div class="container">
    <div class="card mb-3">
        <div class="card-header">Пользователи</div>
        <div class="card-body">
            <div class="mb-3 text-right">
                <a class="p-2 text-dark" href="/admin/add">
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="nav-link-text">Добавить пользователя</span>
                </a>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <?php if (empty($list)): ?>
                        <p>Список постов пуст</p>
                    <?php else: ?>
                        <table class="table">
                            <tr>
                                <th>Название</th>
                                <th>Управление</th>
                            </tr>
                            <?php foreach ($list as $val): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                                    <td>
                                        <a href="/admin/edit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a>
                                        <a href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php echo $pagination; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>