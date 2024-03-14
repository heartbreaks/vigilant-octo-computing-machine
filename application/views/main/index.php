<?php if (empty($list)): ?>
    <p>Список пользователей пуст</p>
<?php else: ?>
    <div class="mt-32">
        <div class="px-4 sm:px-8 max-w-5xl m-auto">
            <h1 class="text-center font-semibold text-sm">Пользователи</h1>
            <ul class="border border-gray-200 rounded overflow-hidden shadow-md">
                <?php foreach ($list as $val): ?>
                    <li class="px-4 py-2 bg-white hover:bg-sky-100 hover:text-sky-900 border-b last:border-none border-gray-200 transition-all duration-300 ease-in-out">
                        <a href="/post/<?php echo $val['id']; ?>">
                            <h3 class="mb-0 text-dark">
                                <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                                (<strong ><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></strong>)
                            </h3>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <ul class="col-md-12 mx-auto">

    </ul>
<?php endif; ?>