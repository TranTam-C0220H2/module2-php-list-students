<?php
function getDataStudents($fileName)
{
    $dataJson = file_get_contents($fileName);
    return json_decode($dataJson);
}

function saveDataStudents($fileName, $name, $age, $address)
{
    $student = [
        'name' => $name,
        'age' => $age,
        'address' => $address
    ];
    $dataArray = getDataStudents($fileName);
    array_push($dataArray, $student);
    $dataJson = json_encode($dataArray);
    file_put_contents($fileName, $dataJson);
}

function delete($array, $index)
{
    $arr = [];
    $j = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i != $index) {
            $arr[$j] = $array[$i];
            $j++;
        }
    }
    return $arr;
}

function deleteStudents($fileName, $index)
{
    $dataArray = getDataStudents($fileName);
    $dataArray = delete($dataArray, $index);
    $dataJson = json_encode($dataArray);
    file_put_contents($fileName, $dataJson);
}

function getDataStudentsByIndex($fileName, $index)
{
    $dataArray = getDataStudents($fileName);
    return $dataArray[$index];
}

function editStudents($fileName, $name, $age, $address, $index)
{
    $student = [
        'name' => $name,
        'age' => $age,
        'address' => $address
    ];
    $dataArray = getDataStudents($fileName);
    $dataArray[$index] = $student;
    $dataJson = json_encode($dataArray);
    file_put_contents($fileName, $dataJson);
}

function searchStudentsByKeyWord($fileName, $keyWord)
{
    $dataArray = getDataStudents($fileName);
    $arraySearchStudents = [];
    foreach ($dataArray as $index => $student) {
        if ($index + 1 == $keyWord || $keyWord == $student->name || $student->age == $keyWord || $keyWord == $student->address) {
            array_push($arraySearchStudents, $dataArray[$index]);
        }
    }
    return $arraySearchStudents;
}

function searchStudentsByIndex($fileName, $keyWord)
{
    $dataArray = getDataStudents($fileName);
    $indexKeyWord = [];
    foreach ($dataArray as $index => $student) {
        if ($index + 1 == $keyWord || $keyWord == ($student->name) || ($student->age) == $keyWord || $keyWord == ($student->address)) {
            array_push($indexKeyWord, $index + 1);
        }
    }
    return $indexKeyWord;
}