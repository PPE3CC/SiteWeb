$(document).ready(function(){
	
	$(".ajoutDuFilm").click(function(){
		// alert($(this).val());
        // alert("L'emprunt du film à bien été effectué");
				
		$.ajax({
					type: "GET",
        			url:"ajoutdelemprunt.php?"+ $(this).val(),
        			dataType: "json",
					encode : true,
        			success: function(){}
		})
	})
})