<?php

function redirect($url, $page=null)

$users = [
    "luc"=> "53f8a9f698d7d2ea9c8a3a6c8d5ab698",
    "michel"=> "945e9f0b4e381b13aa70b94b89a28709",
    "eglantine"=> "4fa9239cbfe7d76a31bb46471ce6a976",
    "patricia"=> "353c8773694fbf1251dec54d98b614a1"
];

if(!empty($_POST["username"]) && !empty($_POST["password"])){

}
$username = $_POST["username"];
$password = $_POST["password"];

foreach ($users as $user) {
    if(isset($users[$username])){

    }
}

$hashedPassword = md5($password);
$users[$username] = $hashedPassword;