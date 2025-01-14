<?php

function redirect($message, $page = null)
{
    $url = 'login.php';
    if ($page) {
        $url = 'articles.php';
    }
    header("Location: $url?message=$message");
    exit;

}

$users = [
    "luc" => "53f8a9f698d7d2ea9c8a3a6c8d5ab698",
    "michel" => "945e9f0b4e381b13aa70b94b89a28709",
    "eglantine" => "4fa9239cbfe7d76a31bb46471ce6a976",
    "patricia" => "353c8773694fbf1251dec54d98b614a1"
];

if (empty($_POST["userName"]) && empty($_POST["password"])) {
    redirect('formulaire mal rempli');
}
$username = $_POST["userName"];
$password = $_POST["password"];
$hashedPassword = md5($password);



if(!isset($users[$username])){
    redirect('utilisateur inexistant');
}

if($users[$username] != $hashedPassword){
    redirect('mauvais mot de passe');
}



redirect("connecté", "articles.php");