 <?php

 include"connect.php";
 
 if (isset($_POST['admin'])) {
      session_start();
  $nomber=$_POST['nomber'];
  $pword=$_POST['pword'];
  

 
   
      $query = mysqli_query($con,"SELECT * FROM admin WHERE nomber='$nomber'");
     while ($row = mysqli_fetch_assoc($query)) {
  $hashed = $row['pword'];
}
  
      
      if (password_verify($pword,$hashed)) {
       
       
       $check = mysqli_query($con,"SELECT id FROM admin WHERE nomber='$nomber'");
while ($row = mysqli_fetch_assoc($check)) {
  $id = $row['id'];
}
              $_SESSION['admin'] = $id;
  
     
        echo "WELCOME BACK!!!";
        
      }else{
        echo "Wrong Login credentials";
 }                
}
  
?>