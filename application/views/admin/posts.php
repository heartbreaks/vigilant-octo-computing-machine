<h1>Список</h1>
<div class="card-body">
    <div class="mb-3 text-left">
        <a class="p-2 text-dark" href="/admin/add">+ Добавить пользователя</a>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php if (empty($list)): ?>
                <p>Список пользователей пуст</p>
            <?php else: ?>
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Управление</th>
                    </tr>
                    <?php foreach ($list as $val): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                            <td class="p-3">
                                <a href="/admin/edit/<?php echo $val['id']; ?>">Редактировать</a>
                                <a href="/admin/delete/<?php echo $val['id']; ?>">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>