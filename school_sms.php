<?php



include"connect.php";
include"admin_header.php";

		
	
		
	if (isset($_POST['sms'])) {
		
	
		$sms = $_POST['sms'];

	function nuObjectsSMS( $sender, $number, $msg ){
		
  $username = 'your username on the sms gateway';
  $password = 'yourpassword on the sms gateway';
  $request ='user='.$username.
          '&pass='.$password.
          '&from='.rawurlencode($sender).
          '&to='.rawurlencode($number).
          '&msg='.rawurlencode($msg); //initialise the request variable
               
    $url = 'https://cloud.nuobjects.com/api/send/'; //this is the url of the gateway's interface

    $ch = curl_init(); //initialise curl handle
    curl_setopt($ch, CURLOPT_URL, $url); //set the url
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); //return as a variable
    curl_setopt($ch, CURLOPT_POST, 1); //set POST method

    curl_setopt($ch, CURLOPT_POSTFIELDS, $request); //set the POST variables
    $response = curl_exec($ch); // grab URL and pass it to the browser. Run the whole process and return the response
    curl_close($ch); //close the curl handle

    if ( $response == 'sent' ){
    return 1;
  }else{
    return 0;
  }
}
  // Sample Function Usage Below
//https://cloud.nuobjects.com/api/send/? user=ufumzy&pass=sms1234#&to=07037954391&from=Testing&msg=Testing
$send = mysqli_query($con,"SELECT * FROM school");
while ($row  = mysqli_fetch_assoc($send)) {
	$number = $row['nomber'];
	 $nuObjectsSMS =nuObjectsSMS( "School Name", $number, $sms );
}

$msg = '';
if ($nuObjectsSMS){
  $msg= 'Message has been Sent';
}else{
  $msg= 'An Error occured while sending Messages';
}
}

?>


		<div class="container">
			<?php if (isset($msg)) {
				echo $msg;
			} ?>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					
						<form class="form-family" id="form3" action="school_sms.php" method="post">
													
													<div class="form-group">
														<textarea class="form-control" name="sms"></textarea>
													</div>
													<div class="form-group row"><div class="col-md-4"></div>
														<input type="submit" class="col-md-4 btn btn-primary " onclick="section2()" name="submit" value="Send Sms">
													</div>
												</form>
					
				</div>

			</div>


		</div>
		<?php include"footer.php";?>
	</body>
	<script type="text/javascript">
	function section2(){
		
		var datum = $("#form3").serialize();
	$.ajax({
		
		url:'school_sms.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);
			if (response == 'Section 2 was Saved') {
            $('#sect3-tab').trigger('click');
}
		},
	});
	
}
</script>
</html>
