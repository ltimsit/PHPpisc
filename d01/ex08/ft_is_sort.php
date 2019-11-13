<?php
function ft_is_sort($arg)
{
	$sorted = $arg;
	sort($sorted);
	foreach ($arg as $key=>$value)
	{
		if ($value != $sorted[$key])
			return FALSE;
	}
	return TRUE;
}
?>
