<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $item_name = $_POST["item_name"];
    $item_details = $_POST["item_details"];
    $item_date = $_POST["item_date"];
    $item_image = $_POST["item_image"];
    $is_active = isset($_POST["is_active"]) ? true : false;
    $new_item = array(
        "item_name" => $item_name,
        "item_details" => $item_details,
        "item_date" => $item_date,
        "item_image" => $item_image,
        "is_active" => $is_active
    );

    if (!isset($_SESSION["items"])) {
        $_SESSION["items"] = array();
    }

    $_SESSION["items"][] = $new_item;

    header("Location: home.php");
    exit();
}
?>