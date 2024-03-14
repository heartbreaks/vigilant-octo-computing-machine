
<div class="container">
    <div class="text-white font-italic p-4 p-md-5 mb-4 rounded text-body-emphasis bg-dark">
        <div class="col-lg-6 px-0">
            <h1 class="display-4 fst-italic">Lorem ipsum dolor sit amet, consectetur adipisicing.</h1>
            <p class="lead my-3">lorem20</p>
        </div>
    </div>
    <div class="row">

        <?php if (empty($list)): ?>
            <p>Список постов пуст</p>
        <?php else: ?>
            <div class="row col-md-12 mx-auto">
                <?php foreach ($list as $val): ?>
                    <div class="col-md-6">
                        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary">World</strong>
                                <h3 class="mb-0"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h3>
                                <div class="mb-1 text-muted">Nov 12</div>
                                <p class="card-text mb-auto"><?php echo htmlspecialchars($val['description'], ENT_QUOTES); ?></p>
                                <a href="/post/<?php echo $val['id']; ?>" class="stretched-link">Continue reading</a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img style="background-size: cover" width="200" height="250" class="image-fluid" src='/public/materials/<?php echo $val['id']; ?>.jpg' alt="">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>