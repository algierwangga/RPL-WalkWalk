<?php

$user = new User($conn);
$user->name = $_POST["name"];
$user->email = $_POST["email"];
$user->password = $_POST["password"];
$user->address = $_POST["address"];
$user->phone = $_POST["phone"];
$user->registerUser();

$_SESSION["id"] = $user->id;
$_SESSION["role"] = "user";
header("Location: ?page=login");