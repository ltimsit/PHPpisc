<?php
class Lannister
{
    public function sleepWith($perso)
    {
        if (get_parent_class($perso) == "Lannister")
        {
                print("Not even if I'm drunk !\n");
        }
		else 
        {
                print("Let's do this.\n");
        }
    }
}
?>
