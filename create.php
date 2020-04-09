<link href="">
<?php
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
include 'function.php';
if (empty($name) || empty($age) || empty($address)) {
    echo '<div style="margin: auto;color: red">'.'Yeu cau dien day du thong tin'.'</div>';
} else {
    saveDataStudents('data-students.json', $name, $age, $address);
    header('Location: index.php');
}