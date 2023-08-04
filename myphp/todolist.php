<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP - Simple To Do List App</h1>
    <form action="todolist_upload.php" method="GET">
        <input type="text">
        <input type="submit" value="Add Task">
    </form>

    <table>
    <tr>
        <th>#</th>
        <th>Task</th>
        <th>status</th>
        <th>action</th>
    </tr>

    <!-- <?php
        foreach($list as $index) {
    ?>

    <tr>
        <td><?= $index->number ?></td>
        <td><?= $index->task ?></td>
        <td><?= $index->status ?></td>
    </tr>

<?php
}?> -->
</table>
</body>
</html>