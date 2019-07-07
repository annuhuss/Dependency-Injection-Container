<?php
/**
*=============================================================
* <container.php>
* Object Oriented Programming: Dependency Injection Container in PHP
*
* @author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 15th June 2019
* ============================================================
*/

interface Myclass 
{
	public function showClass();
}

class Foo implements Myclass
{
	public function showClass()
	{
	echo 'Class: '. __CLASS__ . '<br>';
	}
}

class Bar implements Myclass
{
	public function showClass()
	{
	echo 'Class: '. __CLASS__ . '<br>';
	}
}

class Baz implements Myclass
{
	public function showClass()
	{
	echo 'Class: '. __CLASS__ . '<br>';
	}
}

class Anonymous
{
	protected $myclass; 

	function __construct(Myclass $cls)
	{
		$this->myclass = $cls;
	}

	public function execute()
	{
		$this->myclass->showClass();
	}
}


class Container
{
	protected $data = [];

	public function __construct($data)
	{
		$this->data = $data;
	} 

	public function getInstance($key)
	{
		$myclass = new $this->data[$key];
		return new $this->data['anonymous']($myclass);
	}
}


$data = array(	'anonymous' => 'Anonymous',
		'foo' => 'Foo',
		'bar' => 'Bar',
		'baz' => 'Baz',
	);

$c = new Container($data);

$mycls = $c->getInstance('baz');
$mycls->execute();

$mycls = $c->getInstance('foo');
$mycls->execute();

$mycls = $c->getInstance('bar');
$mycls->execute();

?>