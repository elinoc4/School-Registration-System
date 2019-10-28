<?php
session_start();
include"connect.php";
$pword =$_POST['pword'];
        $cpword =$_POST['cpword'];
        $nomber =$_POST['nomber'];
        $pin = $_POST['pin'];
if(isset($_POST['submit'])){
 
        
        if (preg_match('/[0-9]+/', $_POST['nomber'])) {
            
            
			    	$query_pin = mysqli_query($con,"SELECT * FROM pin WHERE pin='$pin' AND freq ='1'");
			        $count_pin=mysqli_num_rows($query_pin);
			        if ($count_pin === 0 ) {
			            $query_pin1 = mysqli_query($con,"SELECT * FROM pin WHERE pin='$pin'");
			            $count_pin1=mysqli_num_rows($query_pin1);
			                    	if ($count_pin1 === 1 ) {
			                    	    if ($pword== $cpword) {
			                    	        $pword1=password_hash($pword,PASSWORD_BCRYPT);
			                                 $query="INSERT INTO school_user (nomber,pword)VALUES('$nomber', '$pword1')";
				                             $insert= mysqli_query($con,$query);
				                             	if ($insert) {
				                             		 echo "WELCOME BACK!!!";
				                             	    $query_pin="UPDATE pin SET freq = '1', nomber='$nomber' WHERE pin ='$pin'";
				                                    $insert_pin= mysqli_query($con,$query_pin);
				                                	$query = mysqli_query($con,"SELECT id FROM school_user WHERE nomber='$nomber'");
				                                	while ($row = mysqli_fetch_assoc($query)) {
                                                    $id = $row['id'];
                                                            }
                                                    $_SESSION['id']=$id;

					                               
				                             	}else{
				                             	    echo"An error occured";
				                             	}
			                    	    }else{
			                    	        die("PASSWORD DON'T MATCH");
			                    	    }
			                    	    
			                    	}else{
			                    	    die('This pin is invalid');
			                    	    
			                    	}
			
			
		
			            
			        }else{
			            die('This pin has been used');
			        }
			        
			    
			
            
            
        }
        
        
        
        
   
    
    
    
}



?>
