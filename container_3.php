<?php
/**
*=============================================================
* <container_3.php>
* Object Oriented Programming: Dependency Injection Container in PHP
* Using shared instances
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
	
	public function register($key, $subkey)
	{
		$this->data['instantiate'] = new $this->data[$key][$subkey];
	}
	
	public function execute($key, $subkey)
	{
		$value = $this->data[$key][$subkey]; 
		$this->data['instantiate']->$value($value);
	}
}

class Container 
{
	protected $data = [];
	static protected $instance;

	public function __construct(array $data = [])
	{
		$this->data = $data;
	} 

	public function getInstance($key)
	{	
		if (!isset(self::$instance))
		{	$array = $this->data;
			array_shift($array);
			self::$instance = new $this->data[$key]($array);
		}
		return self::$instance;
	}
}


[$register, $companies, $trademarks] = ['register', 'company', 'trademark'];
		 
$data =	array(
		$register => 'Registration',	
		$companies => array(
				'foo' => 'Foo',
				'bar' => 'Bar',
				'baz' => 'Baz',
				),
		$trademarks => array(
				'logo' => 'logo',
				'hmark' => 'hallmark',
				),
	);


$c = new Container($data);

$r = $c->getInstance($register);

$ckeys = array_keys($data[$companies]); // $ckeys = ['foo', 'bar', 'baz'];
$mkeys = array_keys($data[$trademarks]); // $mkeys = ['logo', 'hmark'];


for($i = 0; $i < count($ckeys); $i++)
{	
	$r->register($companies, $ckeys[$i]);

	for($j = 0; $j < count($mkeys); $j++)
	{	
		$r->execute($trademarks, $mkeys[$j]);
	}
	echo '<br>';
}

?>

