<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}

include 'conn/connection.php';

$id = $_GET['id'];
$file = $_GET['file'];
$query = "DELETE FROM table_videos WHERE _id = '$id';";
$result = mysqli_query($conn, $query);

if ($result) {
    mysqli_close($conn);
    unlink("videos/".$file);
    header("Location: view.php?msg=File Deleted Successfully.");
    exit();
} else {
    echo "Error deleting record";
}
?>