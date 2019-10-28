<?php
include"connect.php";

function random_trans_ref($length) {
  $key = '';
  $keys = array_merge(range(0, 9), range('A', 'Z'));
  //
  for ($i = 0; $i < $length; $i++) {
    $key .= $keys[array_rand($keys)];
  }
  //
  return $key;
}
for ($i=0; $i < 600; $i++) { 
	$pin = random_trans_ref(6);
	$query="INSERT INTO pin (pin)VALUES('$pin')";
	$insert = mysqli_query($con,$query);
}
if ($insert) {
echo 'your pins are ready for use';
}
?>