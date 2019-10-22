<?php
class NightsWatch
{
    public function recruit($perso)
    {
        $tab = class_implements($perso);
        foreach ($tab as $elem)
        {
            if ($elem == "IFighter")
                $perso->fight();
        }
     }
    public function fight()
    {
    }
}
?>