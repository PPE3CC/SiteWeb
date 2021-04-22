$(document).ready(function(){
	
	$(".ajoutDuFilm").click(function(){
		// alert($(this).val());
        alert("L'emprunt du film à bien été effectué");
				
		$.ajax({
					type: "GET",
        			url:"ajoutdelemprunt.php?"+ $(this).val(),
        			dataType: "json",
					encode : true,
        			success: function(){}
		})
	})

})

// function myFunction() {
//     var input, filter, ul, li, a, i, txtValue;
//     input = document.getElementById("myInput");
//     filter = input.value.toUpperCase();
//     ul = document.getElementById("myUL");
//     li = ul.getElementsByTagName("li");
//     for (i = 0; i < li.length; i++) {
//         a = li[i].getElementsByTagName("a")[0];
//         txtValue = a.textContent || a.innerText;
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             li[i].style.display = "";
//         } else {
//             li[i].style.display = "none";
//         }
//     }
// }