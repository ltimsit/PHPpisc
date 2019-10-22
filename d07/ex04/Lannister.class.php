<?php
class Lannister
{
    public function sleepWith($perso)
    {
        if (get_class($this) == "Jaime")
        {
            if (get_class($perso) == "Cersei")
                print("With pleasure, but only in a tower in Winterfell, then.\n");
            else if (get_class($perso) == "Sansa")
                print("Let's do this.\n");
            else
                print("Not even if I'm drunk !\n");
        }
        if (get_class($this) == "Tyrion")
        {
            if (get_class($perso) == "Sansa")
                print("Let's do this.\n");
            else
                print("Not even if I'm drunk !\n");
        }
    }
}
?>