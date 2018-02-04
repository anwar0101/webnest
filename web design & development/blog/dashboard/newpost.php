<?php
include_once '../db/db.php';

$title = $_POST['title'];
$details = $_POST['details'];
$image = $_POST['image'];
$status = $_POST['status'];

$sql  = "INSERT INTO `articles` (`title`, `image`, `body`, `status`) VALUES ('$title', '$image', '$details', '$status')";

if($conn->query($sql)){
    header('Location: dashboard/');
    die();
} else {
    echo "Fialed to posting";
}

?>
