<div class="md:px-32 py-8 w-full">
    <a href="/admin/add">+ Добавить пользователя</a>
    <div class="shadow mt-5 overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Имя</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Описание</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Управление</td>
                </tr>
            </thead>
            <tbody class="text-gray-700">
            <?php if (empty($list)): ?>
                <tr><td><h5>Список пользователей пуст</h5></td></tr>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <tr>
                        <td class="w-1/3 text-left py-3 px-4"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="mailto:<?php echo htmlspecialchars($val['email'], ENT_QUOTES);?>"><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></a></td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></a></td>
                        <td class="p-3">
                            <a href="/admin/edit/<?php echo $val['id']; ?>">Редактировать</a>
                            <a href="/admin/delete/<?php echo $val['id']; ?>">Удалить</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>