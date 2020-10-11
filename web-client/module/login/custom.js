/*Login Module JS*/
/*Login Ajax Start*/
function login()
{
	var datastring = $("#login_form").serialize();
	$.ajax({
	    type: "POST",
	    url: "module/login/ajax/signin_con.php",
	    data: datastring,
	    success: function(data)
	    {
	    	console.log(data);
		    if(data==true)
		    {
		        window.location='index.php';
		    }
		    else
		    {
		    	$(".error-message").css("display","block");
		    }
	    }
	});
}
/*Login Ajax End*/