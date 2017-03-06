<?php

	function location($module, $action, $get="")
	{
			$url = "Location:?module=". $module . "&action=" . $action;
			if($get!="")
			{
				$url .= "&" . $get;
			}

			header($url);
			exit;		
	}

	function protection($session, $module, $action, $level)
	{
		if(!isset($_SESSION[$session]))
		{
			//header("Location:?module=". $module . "&action=" . $action . "&notif=protection");
			//exit;
			location($module, $action, "notif=protection");
		}

		if(!isset($_SESSION["admin"]))
		{
			//header("Location:?module=". $module . "&action=" . $action . "&notif=protection");
			//exit;
			location($module, $action, "notif=protection");
		}

		if($_SESSION["admin"] < $level)
		{
			//header("Location:?module=". $module . "&action=" . $action . "&notif=admin");
			location($module, $action, "&notif=admin");
		}
	}

function erreur($e)
{
    if(ENV == "DEV")
    {
        die('Erreur technique :' .$e->getMessage());
    }
    else
    {
        die('Erreur technique !');
    }
}