<?php
include"header.php";
error_reporting(E_ALL);

include"connect.php";
if (!isset($_SESSION['id'])) {
    header("Location:final_login.php");
}else{
   $id = $_SESSION['id'];
    $query_sch = mysqli_query($con,"SELECT * FROM school WHERE user_id = '$id' AND status = '1'");
    // $query_sch->execute();
    $count = mysqli_num_rows($query_sch);
 if ($count < 1) {
       $class = '';
      $msg = '';
;     }else{
     $class = 'd-none';
        $msg = '<h1 class="display-4">Thank you for you interest to study at Basic foundation Schools, Your application has been submitted successfully.</h1>';
      
  }
   $query_progress = mysqli_query($con,"SELECT * FROM school WHERE user_id = '$id' AND status = ''");
    // $query_sch->execute();
   
} 

?>

<div class="container border text-center mt-4 w-50  ">
    <div id="paste" class="alert alert-primary"></div>
    <div id="paste" class="bg-warning display-4 br-5">Register new Child</div>
      

	<div class="d-flex justify-content-center ">
		<ul class="nav nav-tabs bg-light" role="tablist">
			<li class="nav-item">
				<a href="#sect-1" id="sect1-tab" class="nav-link active" aria-selected="true" data-toggle="tab" role="tab">Section One</a>
			</li>
			<li class="nav-item">
				<a href="#sect-2" id="sect2-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab">Section Two</a>
			</li>
			<li class="nav-item">
				<a href="#sect-3" id="sect3-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab">Section Three</a>
			</li>
			<li class="nav-item">
				<a href="#sect-4" id="sect4-tab" class="nav-link" aria-selected="false" data-toggle="tab" role="tab">Section Four</a>
			</li>
		</ul>

	</div>

	<?php echo '</br>'.$msg; echo '<div class="tab-content '.$class.'">'; ?>
		<div class="tab-pane fade show active" row="10" id="sect-1" aria-labelledby="sect1-tab" role="tabpanel">
			<div class="row">
			 <div class="col-md-6 col-sm-6">
                                    	<form id="form1">
                                            <!-- <div class="form-group ">
                                            
    

                                            <input class="form-control" type="text" value="" name="user" placeholder="SESSION NUMBER">
                                        </div> -->
                                        <div class="form-group">
                                        	
	
<input class="form-control" type="text" value=""  name="user" placeholder="Child\'s Full Name, Surname First">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="date" value="" name="dob" placeholder="Date of Birth" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="sel" value="" type="text" name="pob" placeholder="Place of Birth">
                                        </div>
                                        <div class="form-group">
                                           
                                                   <input class="form-control" value="" type="text" name="nomber" placeholder="Phone Number">
                                                   
                                               </div><div class="form-group">
                                            
                                                    <input class="form-control" value="" type="text" name="roa" placeholder="Residential Address">
                                         
                                            </div>
                                    
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                    	
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="foccupation" placeholder="Father's Occupation" value="">
                                        </div>
                                        <div class="form-group">
                                             <input class="form-control" value="" type="text"  name="foa" placeholder="Father's Office Address">
                                        </div>
                                        <div class="form-group">
                                           <select name="religion" class="form-control">
                            <option disabled>Religion</option>
                            <option value="Christian">Christian</option>
                            <option value="Muslim">Muslim</option>
                        </select>
                                        </div>
                                        <div class="form-group">
                                           <select name="sex" class="form-control">
                            <option disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female" >Female</option>
                        </select>
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text" name="fnomber" placeholder=" Father's Phone Number">
                                        </div>
                                        
                                        <div class="form-group justify-content-center">
                                    <input type="button" class="btn btn-primary  text" name="new" onclick="section3()"  value="Next>>"/>
                                    </div>

                                        </form>
                                    </div>
                                   
                                </div>
		</div>
		<div class="tab-pane fade " id="sect-2" aria-labelledby="sect2-tab" role="tabpanel">
			<div class="row">
			<div class="col-md-6 col-sm-6">
                                    	<form id="form3" >
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="moccupation" name="moccupation" placeholder="Mother's Occupation">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="athlete"name="athlete" placeholder="Athletic Interest">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text" id="hobby" name="hobby" placeholder="Hobby">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text" id="siblings" name="siblings" placeholder="How many siblings">
                                        </div>
                                        <div class="form-group">
                        <input class="form-control" type="text"  id="moa"name="moa"  placeholder="Mother's Office Address">
                                        </div>
                                        
                                        <div class="form-group">
                        <input class="form-control" type="number" id="" name="mnomber" value="" placeholder=" Mother's Phone Number">
                                        </div>
                                    </br>
                                    </br>
                                    </br>
                                        <div class="form-group"><input type="button"  onclick="$('#sect1-tab').trigger('click')" class="btn btn-primary justify-content-center"  value="<<Prev"/>
                                         </div>
                                       



                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                    	 <div class="form-group">
                                            <select class="form-control" name="drama">
                                                <option class="hidden" disabled>Have you participated in any school or church drama ?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group" >
                                            <select class="form-control" name="singing">
                                                <option class="hidden" disabled>Singing?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    	<div class="form-group">
                                            <select class="form-control" name="excursion">
                                                <option class="hidden" disabled >Excursion?</option>
                                                
                                               <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    	<div class="form-group">
                                            <select class="form-control" name="recitation">
                                                <option class="hidden" disabled>Recitation?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>


                                   

                                        <div class="form-group">

                        <select name="religion" class="form-control" name='help'>
                            <option disabled>Does He/She lend a helping hand in family business after school ?</option>
                            <option value="yes">Yes</option>
                                                <option value="no">No</option>
                        </select>
                                                          </div>
                                        <div class="form-group" >
                                            <select class="form-control" >
                                                <option disabled>Does He/She helps with daily house chores?</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="hand">
                                                <option class="hidden" disabled>Does He/She helps take of baby?</option>
                                                
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                         
                                        <input type="button" class="btn btn-primary justify-content-center" name="test2" onclick="section2()" value="Next>>"/>
                                    </form>
                                    <span id="paste"></span>
                                    </div>
                                </div>
		</div>


		<div class="tab-pane fade " id="sect-3" aria-labelledby="sect3-tab" role="tabpanel">
			<div class="row">
			 <div class="col-md-12">
                                    	<form id="form2">
                                        <div class="form-group">
										 <input class="form-control" type="text" name="hospital" value="" placeholder=" Name hospital for emergency issues">                                        
									</div>
                                        <div class="form-group">
										<textarea class="form-control" type="text" name="health" value="" placeholder="Please indicate any health issues"></textarea>                                        </div>
                                        <div class="form-group">
										<textarea class="form-control" type="text" name="behaviour" value=""placeholder="Explain your child's Behaviour"></textarea>                                        </div>
										<div class="form-group">
										<input class="form-control" type="text" name="soo" value=""placeholder="State of origin">                                        </div>
										<div class="form-group">
										<input class="form-control" type="text" name="lga" value=""  placeholder="L.G.A">                                        </div>
                                        


                                   
                                       
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6"><input type="button" id="sect3-tab" onclick="$('#sect2-tab').trigger('click')" class="btn btn-primary justify-content-center"  value="<<Prev"/></div>
                                            <div class="col-md-6 col-sm-6"><input type="button" onclick="section4()" class="btn btn-primary justify-content-center"  value="Next>>"/></div>
                                        </div>
                                        <span id="paste"></span>
                                    </form>
                                    </div>
		</div>
	</div>
	<div class="tab-pane fade " id="sect-4" aria-labelledby="sect4-tab" role="tabpanel">
			<div class="row">
			 <div class="col-md-12">
                                    	<form id="form9" enctype="multipart/form-data" action="update3.php" method="POST">
                                        <div class="form-group">
                                        	<input type="hidden" name="id" value="">
                                        </div>
                                <div class="row"> 
                                <h3>All file upload should be an image</h3>
                                    <div class="col-md-6 col-sm-6">
										<div class="form-group">
                                            <label>Upload Passport</label>
										<input class="form-control" type="file" name="img" id="img"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Birth Certificate</label>
                                        <input class="form-control" type="file" name="bcert" id="img"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Previous Result/Certificate</label>
                                        <input class="form-control" type="file" name="prev_result" id="img"> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Previous School</label>
                                        <input class="form-control" type="text" name="prev_sch"> 
                                        </div>
                                        <div class="form-group">
                                            <label>Previous Class</label>
                                        <input class="form-control" type="text" name="prev_class" required> 
                                        </div>
                                        <div class="form-group">
                                            <label>Current Class</label>
                                        <input class="form-control" type="text" name="class" required> 
                                        </div>
                                    </div>
                                </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-6"><input type="button" id="sect3-tab" onclick="$('#sect3-tab').trigger('click')" class="btn btn-primary justify-content-center"  value="<<Prev"/></div>
                                            <div class="col-md-6 col-sm-6"><input type="submit" onclick="section5()" class="btn btn-primary justify-content-center"  value="Submit>>"/></div>
                                        </div>
                                   
                                       
                                        
                                        <span id="paste"></span>
                                    </form>
                                    </div>
		</div>
	</div>




	</div>


</div>

<script src="vendors/jquery/dist/jquery.min.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>
    
    <!-- Counter Animation JavaScript -->
    <script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendors/jquery.counterup/jquery.counterup.min.js"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
    
    <!-- Vector Maps JavaScript -->
    <script src="vendors/vectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="vendors/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/vectormap-data.js"></script>

    <!-- Owl JavaScript -->
    <script src="vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    
    <!-- Toastr JS -->
    <script src="vendors/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
    
    <!-- Apex JavaScript -->
    <script src="vendors/apexcharts/dist/apexcharts.min.js"></script>
    <script src="dist/js/irregular-data-series.js"></script>
     
    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
    <script src="dist/js/dashboard-data.js"></script>


        
<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript">
	function section2(){
		
		var datum = $("#form3").serialize();
	$.ajax({
		
		url:'update.php',
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
<script type="text/javascript">
	function section3(){
		
		var datum = $("#form1").serialize();
	$.ajax({
		
		url:'store.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);
            if (response == 'Section 1 was succesfully Inserted') {
			$('#sect2-tab').trigger('click');
}
		},
	});
	
}
</script>
<script type="text/javascript">
	function section4(){
		
		var datum = $("#form2").serialize();
	$.ajax({
		
		url:'update2.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);
			if (response == 'Section 3 was Saved') {
            $('#sect4-tab').trigger('click');
}
		},
	});
	
}
</script>
<!-- <script type="text/javascript">
	function section5(){
		
		var datum = $("#form9").serialize();
	$.ajax({
		
		url:'update3.php',
		type:'POST',
		data:datum,
		success:function(response){
			$('#paste').html(response);
			
		},
	});
	
}
</script> -->
