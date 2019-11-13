<?php
include_once("Fighter.class.php");
Class UnholyFactory
{
	private $_ftab = array();
	public function absorb($fighter)
	{
		if ($fighter instanceof Fighter)
		{
			if (($key = array_search(get_class($fighter), $this->_ftab)))
			{
				echo "(Factory already absorbed a fighter of type ".$key.")".PHP_EOL;
			}
			else
			{
				echo "(Factory absorbed a fighter of type ".$fighter->getName().")".PHP_EOL;
				$this->_ftab[$fighter->getName()] = get_Class($fighter);
			}
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)".PHP_EOL;
	}
	public function fabricate($fighterName)
	{
		if (isset($this->_ftab[$fighterName]))
		{
			echo "(Factory fabricates a fighter of type ".$fighterName.")".PHP_EOL;
			return (new $this->_ftab[$fighterName]);
		}
		else
			echo "(Factory hasn't absorbed any fighter of type ".$fighterName.")".PHP_EOL;
	}
}
?>
