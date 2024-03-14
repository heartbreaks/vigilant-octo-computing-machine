<header class="container px-0 masthead" style="background-image: url('/public/materials/<?php echo $data['id']; ?>.jpg')">
    <div class="px-5" style="backdrop-filter: blur(5px);">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10">
                    <div class="page-heading text-left">
                        <h5><?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?></h5>
                        <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <p class="mt-0 mb-5">Дата публикации: <?php echo htmlspecialchars($data['created_at'], ENT_QUOTES); ?></p>

    <div class="row">
        <div class="col-lg-12 col-md-10">
            <p style="word-break: break-all;"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></p>
        </div>
    </div>
</div>