<?php
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$index = $_POST['index'];
include 'function.php';
if (empty($name) || empty($age) || empty($address)) {
    echo '<div style="margin: auto;color: red">'.'Yeu cau dien day du thong tin'.'</div>';
} else {
    editStudents('data-students.json', $name, $age, $address, $index);
    header('Location: index.php');
}
