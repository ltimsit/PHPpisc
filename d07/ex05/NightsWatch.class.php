<?php
class NightsWatch
{
	private $_ftab = array();
    public function recruit($perso)
    {
		$this->_ftab[] = $perso;
	}
	public function fight()
	{
		foreach ($this->_ftab as $elem)
		{
			if ($elem instanceof IFighter)
				$elem->fight();
		}
    }
}
?>
