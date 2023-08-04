<?php
    require 'conn.php';

    $sql = "SELECT * FROM users";
    $result = $db->query($sql);

    $list = $result->fetchALL();
?>

<table>
    <tr>
        <th>아이디</th>
        <th>이름</th>
        <th>레벨</th>
    </tr>

<?php
    foreach($list as $item) {
?>

    <tr>
        <td><?= $item->id ?></td>
        <td><?= $item->name ?></td>
        <td><?= $item->level ?></td>
    </tr>

<?php
}?>
</table>
