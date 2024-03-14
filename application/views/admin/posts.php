<!--<h1>Список</h1>-->
<!--<div class="card-body">-->
<!--    <div class="mb-3 text-left">-->
<!--        <a class="p-2 text-dark" href="/admin/add">+ Добавить пользователя</a>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-sm-12">-->
<!--            --><?php //if (empty($list)): ?>
<!--                <p>Список пользователей пуст</p>-->
<!--            --><?php //else: ?>
<!--                <table>-->
<!--                    <tr>-->
<!--                        <th>Название</th>-->
<!--                        <th>Управление</th>-->
<!--                    </tr>-->
<!--                    --><?php //foreach ($list as $val): ?>
<!--                        <tr>-->
<!--                            <td>--><?php //echo htmlspecialchars($val['name'], ENT_QUOTES); ?><!--</td>-->
<!--                            <td class="p-3">-->
<!--                                <a href="/admin/edit/--><?php //echo $val['id']; ?><!--">Редактировать</a>-->
<!--                                <a href="/admin/delete/--><?php //echo $val['id']; ?><!--">Удалить</a>-->
<!--                            </td>-->
<!--                        </tr>-->
<!--                    --><?php //endforeach; ?>
<!--                </table>-->
<!--            --><?php //endif; ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="bg-white p-8 rounded-md w-full">
    <div class=" flex items-center justify-between pb-6">
        <div>
            <h2 class="text-gray-600 font-semibold">Пользователи</h2>
        </div>
        <div class="flex items-center justify-between">
            <div class="flex bg-gray-50 items-center p-2 rounded-md"></div>
            <div class="lg:ml-40 ml-10 space-x-8">
                <a  href="/admin/add" class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Создать</a>
            </div>
        </div>
    </div>
    <div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Имя
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Email
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Дата создания
                        </th>
                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Описание
                        </th>

                        <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Управление
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if (empty($list)): ?>
                        <tr>
                            <td colspan="999">
                                <p>Список пользователей пуст</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($list as $val): ?>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                 src="/public/materials/<?php echo $val['id']; ?>.jpg')"
                                                 alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap"><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <?php echo htmlspecialchars($val['created_at'], ENT_QUOTES); ?>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900">
                                        <?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?>
                                    </p>
                                </td>

                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a class="block mb-3 bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" href="/admin/edit/<?php echo $val['id']; ?>">Редактировать</a>
                                        <a class="block bg-red-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer" href="/admin/delete/<?php echo $val['id']; ?>">Удалить</a>
                                    </p>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>