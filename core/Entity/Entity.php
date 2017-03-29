<?php
namespace Core\Entity;

class Entity
{
	public function __get($key)
	{
		$method = 'get'.ucfirst($key);
		$this->$key = $this->$method(); // $method dans ce cas = getUrl
		return $this->$key;
	}
	

}