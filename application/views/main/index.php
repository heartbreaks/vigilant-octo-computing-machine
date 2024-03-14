<?php if (empty($list)): ?>
    <p>Список пользователей пуст</p>
<?php else: ?>
    <div class="max-w-2xl mx-auto">

        <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Пользователи</h3>
            </div>
            <a class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    <?php foreach ($list as $val): ?>
                        <li class="py-3 sm:py-4">
                            <a href="/post/<?php echo $val['id']; ?>" class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="/public/materials/<?php echo $val['id']; ?>.jpg')" alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        <strong ><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></strong>
                                    </p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
<?php endif; ?>