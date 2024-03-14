<?php if (empty($list)): ?>
    <p>Список пользователей пуст</p>
<?php else: ?>
    <h3>Пользователи</h3>
    <ul class="col-md-12 mx-auto">
        <?php foreach ($list as $val): ?>
            <li>
                <a href="/post/<?php echo $val['id']; ?>">
                    <h3 class="mb-0 text-dark">
                        <?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?>
                        (<strong ><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></strong>)
                    </h3>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>