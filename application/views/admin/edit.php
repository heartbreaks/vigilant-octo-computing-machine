<h1><?php echo $title; ?></h1>
<form class="w-50" action="/admin/edit/<?php echo $data['id']; ?>" method="post" >
    <div class="form-group">
        <label>Название</label>
        <input class="form-control" type="text" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>" name="name">
    </div>
    <div class="form-group">
        <label>email</label>
        <input class="form-control" type="email" value="<?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?>" name="email">
    </div>
    <div class="form-group">
        <label>Текст</label>
        <textarea class="form-control" rows="3" name="description"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></textarea>
    </div>
    <div class="form-group">
        <label>Изображение</label>
        <input class="form-control" type="file" name="img">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Сохранить</button>
</form>