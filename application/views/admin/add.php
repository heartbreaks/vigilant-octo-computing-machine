<h1><?php echo $title; ?></h1>
<form class="w-50" action="/admin/add" method="post">
    <div class="form-group">
        <label>Название</label>
        <input class="form-control" type="text" name="name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email">
    </div>
    <div class="form-group">
        <label>Текст</label>
        <textarea class="form-control" rows="3" name="description"></textarea>
    </div>
    <div class="form-group">
        <label>Изображение</label>
        <input class="form-control" type="file" name="img">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Добавить</button>
</form>