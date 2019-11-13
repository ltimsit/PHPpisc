<?php
Class Fighter
{
	private $_name;
	
	public function __construct(string $name)
	{
		if ($name)
		{
			$this->_name = $name;
		}
	}
	public function getName()
	{
		return $this->_name;
	}
}
