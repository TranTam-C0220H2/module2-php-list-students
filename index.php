<?php
include 'function.php';
getDataStudents('data-student.json');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/index.css" rel="stylesheet">
</head>
<body>
<a href="add-students.php" id="add">Them moi</a>
<form action="search-students.php" method="get">
    <label>Tim kiem: <input type="text" name="key"></label>
    <input type="submit" value="Tim">
</form>
<table>
    <tr>
        <th>STT</th>
        <th>Ten</th>
        <th>Tuoi</th>
        <th>Dia chi</th>
        <th>Thao tac</th>
    </tr>
    <?php foreach (getDataStudents('data-students.json') as $index => $student): ?>
        <tr>
            <td><?php echo $index + 1 ?></td>
            <td><?php echo $student->name ?></td>
            <td><?php echo $student->age ?></td>
            <td><?php echo $student->address ?></td>
            <td><a href="edit-students.php?index=<?php echo $index ?>">Sua</a> <a onclick=" return confirm('Xoa ?')"
                                                                                  href="delete-students.php?index=<?php echo $index ?>">Xoa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
