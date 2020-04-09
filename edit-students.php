<?php
$index = $_REQUEST['index'];
include 'function.php';
$studentByIndex = getDataStudentsByIndex('data-students.json', $index);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/add-students.css">
</head>
<body>
<form action="edit.php" method="post">
    <div>
        <h3>Sua thong tin sinh vien</h3>
    <input type="hidden" name="index" value="<?php echo $index ?>">
        <table>
            <tr>
    <label><td>Ten: </td><td><input type="text" name="name" value="<?php echo $studentByIndex->name ?>"></td></label>
            </tr>
            <tr>
                <label><td>Tuoi: </td><td><input type="text" name="age" value="<?php echo $studentByIndex->age ?>"></td></label>
            </tr>
            <tr>
                <label><td>Dia chi: </td><td><select name="address" value="<?php echo $studentByIndex->address ?>">
            <option>Ha Noi</option>
            <option>Bac Ninh</option>
            <option>Thanh Hoa</option>
            <option>Ninh Binh</option>
            <option>Nam Dinh</option>
                        </select></td>
    </label>
            </tr>
            <tr>
                <td colspan="2"class="add"><input type="submit" value="Thay doi"></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>
