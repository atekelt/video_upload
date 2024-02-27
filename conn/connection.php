<?php 
$host = "localhost";
$user = "admin";
$db_password = "";
$db_name = "video_uploader";

$conn= mysqli_connect($host,$user,$db_password,$db_name);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>