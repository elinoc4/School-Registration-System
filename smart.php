<?php	include"connect.php";				$check = mysqli_query($con,"SELECT id FROM school_user WHERE nomber='908765656571'");
while ($row = mysqli_fetch_assoc($check)) {
	$id = $row['id'];
}
echo $id;
