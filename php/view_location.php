<?php
session_start();
require './db.php';
$number_phone = $_POST['number_phone'];
$car_number = $_POST['car_number'];
$car = $_POST['car'];
$name_pip = $_POST['name'];
$time_pip = $_POST['time'];

$session = insert(
    'insert into people_session (number_phone, car_number, car, name_pip, time_pip) values (:number_phone, :car_number, :car, :name_pip, :time_pip)',
    [
        'number_phone' => $number_phone,
        'car_number' => $car_number,
        'car' => $car,
        'name_pip' => $name_pip,
        'time_pip' => $time_pip
    ]
);
$_SESSION['number_phone'] = $number_phone;
header('Location: ../pages/view_location.php');

