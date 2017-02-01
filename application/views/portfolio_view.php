<h1>Портфолио</h1><br>

<table class="table table-bordered">
    <h4>Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</h4>
    <tr>
        <td><b>Год</b></td>
        <td><b>Проект</b></td>
        <td><b>Описание</b></td>
    </tr>

    <?php foreach ($data as $row):?>
        <tr>
            <td><?= $row['year'] ?></td>
            <td><a href="<?= $row['url'] ?>"><?= $row['url'] ?></a></td>
            <td><?= $row['description'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>