/*Login Module JS*/
/*Login Ajax Start*/
function login()
{
	var datastring = $("#login_form").serialize();
	$.ajax({
	    type: "POST",
	    url: "module/main_admin_login/ajax/conform_login.php",
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