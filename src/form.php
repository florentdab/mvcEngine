<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 22/09/16
 * Time: 11:07
 */

    require "bdd.php";

    $firstname   = $_POST["firstname"];
    $lastname    = $_POST["lastname"];
    $email       = $_POST["email"];
    $password    = $_POST["password"];

    $conn = getConnection();

    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$password');";

    execSql($conn, $sql);

    header('Location: ../public/index.php');






