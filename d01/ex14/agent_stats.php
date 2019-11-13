#!/usr/bin/php
<?php
while ($tab[] = fgetcsv(STDIN, 0, ';'))
{}
foreach ($tab[0] as $key=>$elem)
{
	if ($elem == "User")
		$UserKey = $key;
	if ($elem == "Note")
		$NoteKey = $key;
	if ($elem == "Noteur")
		$NoteurKey = $key;
	if ($elem == "Feedback")
		$FeedbackKey = $key;
}
if ($argv[1] == "Moyenne")
{
	foreach ($tab as $elem)
	{
		if ($elem[$NoteurKey] != "moulinette" && is_numeric($elem[$NoteKey]))
		{
			$div++;
			$cpt += $elem[$NoteKey];
		}
	}
	echo $cpt / $div;
}
if ($argv[1] == "moyenne_user" || $argv[1] == "ecart_moulinette")
{
	$tabU = array();
	foreach ($tab as $elem)
	{
		if (is_numeric($elem[$NoteKey]) )
		{
			if($elem[$NoteurKey] != "moulinette")
			{
				$tabU[$elem[$UserKey]]['NoteU'] += $elem[$NoteKey];
				$tabU[$elem[$UserKey]]['Div'] += 1;
			}
			else
				$tabU[$elem[$UserKey]]['Mouli'] = $elem[$NoteKey];
		}
	}
	ksort($tabU);
	foreach ($tabU as $key=>$user)
	{
		$moy = $user['NoteU']/$user['Div'];
		$ecart = $moy-$user['Mouli'];
		if ($user['Div'] && $argv[1] == "moyenne_user")
			echo $key.": ".$moy."\n";
		else if ($user['Div'] && $argv[1] == "ecart_moulinette")
			echo $key.": ".$ecart."\n";
	}
}
?>
