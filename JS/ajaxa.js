$(document).ready(function(){
$("#creationCompte").submit(function (e){
e.preventDefault();
    var formdata = {
    "nomClient" : $("#nomClient").val() ,
	"prenomClient" : $("#prenomClient").val(), 
	"emailClient" : $("#emailClient").val(),
    "dateAbonnementClient" : $("#dateAbonnementClient").val(),
    "login" : $("#login").val(),
    "password" :$("#password").val()
    };

	$.ajax({
   					type: "POST",
        			url:"createCompte.php",
        			dataType: "json",
					encode          : true,
        			data: formdata, // on envoie via post
        			success: function(data) {
        				console.log(data);
			if ( ! data.success)
			{
				var $msg="erreur-></br><ul style=\"list-style-type :decimal;padding:0 5%;\">";
				if (data.errors.message) {
					$x=data.errors.message;
					$msg+="<li>";
					$msg+=$x;
					$msg+="</li>";
				}
				if (data.errors.requete) {
					$x=data.errors.requete;
					$msg+="<li>";
					$msg+=$x;
					$msg+="</li>";
				}
				$msg+="</ul>";
			}
			else
			{
				$msg="";
				if(data.message){$msg+="</br>";$x=data.message;$msg+=$x;}
			}
			$("#ModalRetour").find("p").html($msg); 
			$("#ModalRetour").modal();
	
   					},
   					error: function(jqXHR, textStatus)
			{
	
     			if (jqXHR.status === 0){alert("Not connect.n Verify Network.");}
    			else if (jqXHR.status == 404){alert("Requested page not found. [404]");}
				else if (jqXHR.status == 500){alert("Internal Server Error [500].");}
				else if (textStatus === "parsererror"){alert("Requested JSON parse failed.");}
				else if (textStatus === "timeout"){alert("Time out error.");}
				else if (textStatus === "abort"){alert("Ajax request aborted.");}
				else{alert("Uncaught Error.n" + jqXHR.responseText);}
			}
   				});
	})
});