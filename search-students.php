<?php
include 'function.php';
$keyWord = $_GET['key'];

$indexKeyWord = searchStudentsByIndex('data-students.json', $keyWord);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Tuoi</th>
        <th>Dia chi</th>
        <th>Thao tac</th>
    </tr>
    <?php foreach (searchStudentsByKeyWord('data-students.json', $keyWord) as $index => $student): ?>
        <tr>
            <td><?php echo $indexKeyWord[$index] ?></td>
            <td><?php echo $student->name ?></td>
            <td><?php echo $student->age ?></td>
            <td><?php echo $student->address ?></td>
            <td><a href="edit-students.php?index=<?php echo $indexKeyWord[$index] - 1 ?>">Sua</a> <a
                        onclick=" return confirm('Xoa ?')"
                        href="delete-students.php?index=<?php echo $indexKeyWord[$index] - 1 ?>">Xoa</a></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
