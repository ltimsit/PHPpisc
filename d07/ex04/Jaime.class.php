<?php
include_once("Lannister.class.php");
class Jaime extends Lannister
{
    public function sleepWith($perso)
    {
            if (get_class($perso) == "Cersei")
                print("With pleasure, but only in a tower in Winterfell, then.\n");
			else
				parent::sleepWith($perso);
    }
}
?>
