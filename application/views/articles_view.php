<h1>Статьи</h1><br>

<h4>Здесь собраны статьи которые помогли мне с домашним заданием</h4>
<hr>

<?php foreach ($data as $row):?>
    <article>
        <h4><b><?= $row['title'] ?></b></h4>
        <p>
            <?= $row['text'] ?>
        </p>
    </article>
    <hr>
<?php endforeach; ?>
