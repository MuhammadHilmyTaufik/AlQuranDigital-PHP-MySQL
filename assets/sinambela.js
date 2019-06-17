$(document).ready(function(){
	$("#followers").click(function(){
		$.ajax({
			url:'add.php',
			data:'a=a',
			timeout:false,
			type:'POST',
			dataType:'JSON',
			success:function(hasil){
				$("button").removeAttr("disabled");
				if(hasil.result){
					$("#result_submit").html('<div class="alert alert-success" role="alert">'+hasil.content+'</div>');
					$("#update").html(''+hasil.followers+'');
					$("#point").html(''+hasil.poin+'');
				}else
					$("#result_submit").html('<div class="alert alert-warning" role="alert">'+hasil.content+'</div>');
			},error:function(a,b,c){
				$("button").removeAttr("disabled");
				$("#result_submit").html("<div class='alert alert-warning'>"+c+"</div>");
			},beforeSend:function(){
				$("button").prop("disabled", true);
				$("#result_submit").html("<div class='alert alert-success'>Loading..</div>");
			}
		});
		return false;
	});
	$("form#likes").submit(function(){
		var pdata = $(this).serialize();
		$.ajax({
			url:'addl.php',
			data:pdata,
			timeout:false,
			type:'POST',
			dataType:'JSON',
			success:function(hasil){
				$("input").removeAttr("disabled");
				$("button").removeAttr("disabled");
				if(hasil.result){
					$("#result_submit").html('<div class="alert alert-success" role="alert">'+hasil.content+'</div>');
					$("#point").html(''+hasil.poin+'');
				}else
					$("#result_submit").html('<div class="alert alert-warning" role="alert">'+hasil.content+'</div>');
			},error:function(a,b,c){
				$("input").removeAttr("disabled");
				$("button").removeAttr("disabled");
				$("#result_submit").html("<div class='alert alert-warning'>"+c+"</div>");
			},beforeSend:function(){
				$("button").prop("disabled", true);
				$("input").prop("disabled", true);
				$("#result_submit").html("<div class='alert alert-success'>Loading..</div>");
			}
		});
		return false;
	});
});