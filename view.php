<?php

$web_url = "http://" .$_SERVER["SERVER_NAME"].":".$_SERVER['SERVER_PORT']. $_SERVER["REQUEST_URI"];
$video_url = "http://" .$_SERVER["SERVER_NAME"].":".$_SERVER['SERVER_PORT']."/video";

$str = "<?xml version='1.0' ?>";
$str .= "<rss version='2.0'>";
	$str .= "<channel>";
		$str .= "<title>PODCAST</title>";
		$str .= "<description>This is my Podcast site</description>";
		$str .= "<language>en-us</language>";
		$str .= "<link>$web_url</link>";

		$conn = mysqli_connect("localhost", "admin", "", "video_uploader");
		$result = mysqli_query($conn, "SELECT * FROM table_videos ORDER BY _id DESC");

		while($row = mysqli_fetch_object($result))
		{
			$str .= "<item>";
				$str .= "<title>". htmlspecialchars($row->video_name) ."</title>";
				$str .= "<description>". htmlspecialchars($row->video_desc) ."</description>";
				$str .= "<link>". $video_url ."/videos/". htmlspecialchars($row->video_name).".".$row->file_type ."</link>";
			$str .= "</item>";
		}
	$str .= "</channel>";
$str .= "</rss>";
file_put_contents("rss.xml",$str);
?>

<?php
include_once('inc/header.php');
if($_SESSION['user_email']==""){
	header('location:index.php');

}
include_once('inc/header.php');
include_once('inc/navbar.php');

include 'conn/connection.php';
$mysqli = mysqli_connect("localhost", "admin", "", "video_uploader");
if(!$mysqli){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<div class="container">
<h1 class="showText mt-3 mb-5">Uploaded Videos</h1>
<?php
if($sql="SELECT * FROM table_videos"){ 
?>
	<div class="row">
		<?php
			
			$result_set=mysqli_query($mysqli, $sql);
			while($row=mysqli_fetch_array($result_set))
			{
			$pat ="videos/"; 
			$pat1 ="http://localhost/uploader/videos/";
			$path = $row['video_name'].".".$row['file_type'];
			$file_type = "video/".$row['file_type'];
			$vid = $pat.$path
		?>
		<div class="col">
			<div class="card" style="max-width: 18rem;">
				<?php echo"<video controls>
					<source src='".$vid."' type='".$file_type." class='card-img-top ms-auto''>
					</video> ";
					?>
					<?php
						$file_size = $row['file_size'];
						$base = log($file_size, 1024);
						$suffixes = array('', 'KB', 'MB', 'GB', 'TB');
						$final_size = round(pow(1024, $base - floor($base)), 2) .' '. $suffixes[floor($base)];
					?>
					<div class="card-body">
					<a class="card-title"><b>File Name : </b> <?php echo $row['video_name'].'.'.$row['file_type'] ?></a><br>
					<a class="card-title"><b>File Size : </b><?php echo $final_size?></a><br>
					<a class="card-title"><b>Uploaded By : </b><?php echo $row['uploaded_by'] ?></a><br>
					</div>
			</div>
		</div>
			<?php
			}
			?>
	</div>
<?php
}
else{
	?>
	<h1>No Videos Uploaded!!!!!</h1>
<?php
}
?>