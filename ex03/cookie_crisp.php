<?php
for ($_get as $key=>$value)
{
	if ($key == "action")
	{
		if ($value == "del")
		{
			$cmd = 0;
		}
		else if ($value == "get")
			$cmd = 1;
		else
			$cmd = 2;
	}
}
?>
