$('#nomber').on('keyup',function(){
			
var d = $("#nomber").val();
			
			$.ajax(
		{

			url:'check.php',
			type:"POST",
		    data:{nomber:d},
		    success:function(response){
		   
	if (response =='') {
		   	$('#num').hide()
		   }else{
	$('#num').show().html(response);
	
	}

}


});
			return false;
});			



		$('#email').on('keyup',function(){
			
var les = $("#email").val();
			
			$.ajax(
		{

			url:'check.php',
			type:"POST",
		    data:{email:les},
		    success:function(response){
		   if (response =='') {
		   	$('#check').hide()
		   }else{
	$('#check').show().html(response);
	
	}

}


});
			return false;
});			

$("#cpword").keyup(function(){
	var pword = $("#pword").val();
	var cpword = $("#cpword").val();
	if (cpword !== pword) {
		var response = 'not match'
		$('#sel').show().html(response);
	}else{
		var response = 'matched'
		$('#sel').show().html(response);
	}
})
		