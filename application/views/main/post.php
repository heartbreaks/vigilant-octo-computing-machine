<h5>Информаци о пользователе</h5>
<p>
    <a href="/"><- Домой</a>
</p>
<h1>
    <?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>
    <span>(<?php echo htmlspecialchars($data['email'], ENT_QUOTES); ?>)</span>
</h1>
