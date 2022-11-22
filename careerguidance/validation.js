function validate()
{
var name= document.getElementById("name");
var pass = document.getElementById("password");
var conpassword=document.getElementById("conformpassword");
var number=document.getElementById("number");
var email=document.getElementById("email");
var male=document.getElementById("radio1").checked;
var female=document.getElementById("radio2").checked;
var course=document.getElementById("qualification").value;
if(name.value.trim()=="")
{

	document.getElementById("user");
	name.style.border="solid 2px red";
	user.style.visibility="visible";
	return false;
	
}
else if(name.value.length<3)
{
	alert("name is too short");
	return false;
}
else if((male==" ")&&(female==" "))
{
	
	document.getElementById("gen");
    // male.style.color="red";
	gen.style.visibility="visible";
	return false;
}
else if(number.value.trim()=="")
{
	document.getElementById("numlbl");
	number.style.border="solid 2px red";
	numlbl.style.visibility="visible";
	return false;
}
else if(email.value.trim()=="")
{
	document.getElementById("mail");
	email.style.border="solid 2px red";
	mail.style.visibility="visible";
	return false;
}
else if(pass.value.trim()=="")
{
	document.getElementById("passw");
	pass.style.border="solid 2px red";
	passw.style.visibility="visible";
	return false;
}
else if (pass.value.length<5)
{
	alert("password is too short");
	return false;
}
else if(conpassword.value.trim()=="")
{
	document.getElementById("conpass");
	conpassword.style.border="solid 2px red";
	conpass.style.visibility="visible";
	return false;
}
else if(conpassword.value!=pass.value)
{
	document.getElementById("cpassword");
	cpassword.style.visibility="visible";
	return false;
}
else if(conpassword==pass.value)
{
	return true;
}
else{
	return true;
}
}
function validation()
{
	var username=document.getElementById("username");
	var pass=document.getElementById("password");
	if(username.value=="")
	{
		document.getElementById("userlbl");
		username.style.border="solid 2px red";
		userlbl.style.visibility="visible";
		return false;
		}
		else if(username.value.length<3)
		{
			alert("email is too sort");
			return false;
		}
		else if(pass.value=="")
		{
			document.getElementById("passlbl");
			pass.style.border="solid 2px red";
			passlbl.style.visibility="visible";
			return false;
		}
		else if(pass.value.length<5)
		{
			alert("password is too short");
			return false;
		}
		else{
			return true;
		}
}
