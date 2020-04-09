<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/add-students.css" rel="stylesheet">
</head>
<body>
<form action="create.php" method="post">
    <div>
        <h3>Them thong tin sinh vien</h3>
        <table>
            <tr>
                <label>
                    <td>Ten:</td>
                    <td><input type="text" name="name"></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Tuoi:</td>
                    <td><input type="text" name="age"></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Dia chi:</td>
                    <td><select name="address">
                            <option aria-checked="true">Ha Noi</option>
                            <option>Bac Ninh</option>
                            <option>Thanh Hoa</option>
                            <option>Ninh Binh</option>
                            <option>Nam Dinh</option>
                        </select></td>
                </label>
            </tr>
            <tr>
                <td colspan="2" class="add"><input type="submit" value="Them"></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>
