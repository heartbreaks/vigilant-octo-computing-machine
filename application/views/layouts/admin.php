<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"-->
<!--          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
    <link href="/public/styles/admin.css" rel="stylesheet">
    <link href="/public/styles/font-awesome.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <script src="/public/scripts/popper.js"></script>
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"-->
<!--          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
    <script src="/public/scripts/core.js"></script>
</head>
<body class="sticky-footer">
<?php if ($this->route['action'] != 'login'): ?>
    <div class="p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <div class="my-0 mr-md-auto font-weight-normal"></div>
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-dark" href="/admin/posts">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Пользователи</span>
                    </a>
                </nav>
                <a href="/admin/logout" class="btn">Выход</a>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="container">
    <?php echo $content; ?>
</div>
</body>
</html>