function validation()
{
	var a =  document.getElementById('uname').value;
	var b = document.getElementById('upass').value;
	if(a == "")
		{
			document.getElementById('not').innerHTML = "username field shouldn't empty!!";
			document.getElementById('uname').select;
			return false;
		}
}