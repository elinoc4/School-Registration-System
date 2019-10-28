<?php
session_start();

include"admin_header.php";



include"connect.php";
	$query= mysqli_query($con,"SELECT * FROM school ");


	
	
	?><div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">List of Student</h5>
                            <p class="mb-40">This is a comprehensive list of newly registered students</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table class="table tablesaw table-bordered table-hover  mb-0" data-tablesaw-mode="swipe" data-tablesaw-sortable data-tablesaw-sortable-switch data-tablesaw-minimap data-tablesaw-mode-switch>


			
				<thead>
                                                <tr>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Picture</th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Name</th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">Gender</th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr>Class</abbr></th>
                                                    <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4" width="9"><a class="btn btn-warning" href="crud.php?check=all">Edit List</a></th>
                                                </tr>
                                            </thead>
				
				<tbody>
					<?php while ($row = mysqli_fetch_assoc($query)) {
						
					
					 echo'<tr>
						<td style="width:70px;height:50px;padding:0px;margin:0px;border-radius:10%"><img src="img/'.$row["img"].'" style="width:70px;height:50px;padding:0px;margin:0px;border-radius:20%"></td>
						<td><a href="crud.php?id='.$row["id"].'" target="_blank">'.$row["user"].'</td></a>
						<td><a href="crud.php?id='.$row["id"].'" target="_blank">'.$row["sex"].'</td></a>
						<td><a href="crud.php?id='.$row["id"].'" target="_blank">'.$row["class"].'</td></a>
						
					</tr>';}?>

				</tbody>





			</table>

		</div>
	</div>
</div>
</section>
</div>



<?php
include"footer.php";
?>
<div id="dataModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">BIO DATA</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body" id="student_detail">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
			</div>
		</div>
	</div>

</div>
<!-- <script type="text/javascript">
	$(document).ready(function(){
		$('.view_data').click(function(){
			var student_id = $(this).attr("id");

			$.ajax({
				url:"school_sms.php",
				method:"post",
				data:{student_id:student_id},
				success:function(data){
					$('#student_detail').html(data);
					$('#dataModal').modal("show");
				}

			});
			
		});
		

	});
	

</script> -->



