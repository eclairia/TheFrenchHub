document.getElementById('listusers').onchange = function()
{
	if(document.getElementById('listusers').value == 0)
	{
		var url = "?module=commentaire&action=admin";

	}

	else
	{
		var url = "?module=commentaire&action=admin&user=" + document.getElementById("listusers").value;
	}
	
	window.location = url;
}