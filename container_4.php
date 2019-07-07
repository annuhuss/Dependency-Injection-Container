<?php
/**
*=============================================================
* <container_4.php>
* Object Oriented Programming: Dependency Injection Container in PHP
* Using PHP magic functions __set() and __get()
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

trait Settings
{
	protected $data = [];

	public function __construct(array $data = [])
	{	
		$this->data = $data;
	}

	public function execute($key, $subkey)
	{
		$value = $this->data[$key][$subkey]; 
		$this->$value($value);
	}
}

class Foo
{
	use Trademarks;
	use Settings;
}

class Bar
{
	use Trademarks;
	use Settings;
}

class Baz
{
	use Trademarks;
	use Settings;
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
		$array = $this->data;
		array_shift($array);
		return new $this->data[$key][$subkey]($array);
	}
}

class Container 
{
	protected $data = [];
	static protected $instance;

	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	} 
	
	public function __get($key)
	{
		return $this->data[$key];
	}

	public function getInstance($key)
	{	
		if (!isset(self::$instance))
		{	
			$array = $this->data['data'];
			array_shift($array);
			self::$instance = new $this->data['data'][$key]($array);
		}
		return self::$instance;
	}
}


[$register, $companies, $trademarks] = ['register', 'company', 'trademark'];
		 
$data =	array(	$register => 'Registration',
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


$c = new Container();

$c->data = $data;

$r = $c->getInstance($register);

$ckeys = array_keys($data[$companies]); // $ckeys = ['foo', 'bar', 'baz'];
$mkeys = array_keys($data[$trademarks]); // $mkeys = ['logo', 'hmark'];


for($i = 0; $i < count($ckeys); $i++)
{	
	$cls =  $r->register($companies, $ckeys[$i]);
	
	for($j = 0; $j < count($mkeys); $j++)
	{	
		$cls->execute($trademarks, $mkeys[$j]);
	}
	echo '<br>';
}

?>

