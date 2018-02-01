function validate()
{
	var result=true;
	var i=document.getElementsByTagName("input");
	if(i[0].value.length==0)
	{
		alert("please enter name");
		result=false;
		return(result);
	}
	if(i[1].value.length==0)
	{
		alert("please enter password");
		result=false;
		return(result);
	}
	if(i[2].value.length==0)
	{
		alert("please enter mobilenumber");
		result=false;
		return(result);
	}
	return(result);
}