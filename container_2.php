<?php
/**
*=============================================================
* <container_2.php>
* Object Oriented Programming: Dependency Injection Container in PHP
* Avoid Hard Coding Dependencies
* @author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 15th June 2019
* ============================================================
*/

trait Trademarks
{
	public function logo($logo)
	{
		echo get_class($this) . '\'s '. ucfirst($logo) .'<br>';
	}
	
	public function hallmark($hmark)
	{
		echo get_class($this) . '\'s '. ucfirst($hmark) .'<br>';
	}
}

class Foo
{
	use Trademarks;
}

class Bar
{
	use Trademarks;
}

class Baz
{
	use Trademarks;
}

class Registration
{
	protected $data = []; 

	function __construct(array $data = [])
	{
		$this->data = $data;
	}
	
	public function register($key)
	{
		$this->data['instantiate'] = new $this->data[$key];
	}
	
	public function execute($key)
	{
		$value = $this->data[$key]; 
		$this->data['instantiate']->$value($value);
	}
}

class Container 
{
	protected $data = [];

	public function __construct(array $data = [])
	{
		$this->data = $data;
	} 

	public function getInstance($key)
	{		
		$array = $this->data;
		array_shift($array);
		return new $this->data[$key]($array);
	}
}


$register = 'register';

$data =	array(
		$register => 'Registration',	
		'foo' => 'Foo',
		'bar' => 'Bar',
		'baz' => 'Baz',
		'logo' => 'logo',
		'hmark' => 'hallmark',
		);

$c = new Container($data);

$r = $c->getInstance($register);

$keys = array_keys($data); // $ckeys = ['register', 'foo', 'bar', 'baz', 'logo', 'hmark'];

for($i = 1; $i < count($keys) - 2; )
{
	$r->register($keys[$i++]);

	for($j = 4; $j < count($keys); )
	{
		$r->execute($keys[$j++]);
	}
	echo '<br>';
}

?>