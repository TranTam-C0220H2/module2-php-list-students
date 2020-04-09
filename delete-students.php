<?php
include 'function.php';
$index = $_REQUEST['index'];
deleteStudents('data-students.json', $index);
header('Location: index.php');

