<?php
class MyTriangle
{
	private $length;
	private $breeth;
	public function __construct($l=5,$b=10)
	{
		$this->length=$l;
		$this->breeth=$b;
	}	
	public function __destruct()
	{
		echo "<br />Destruct called...";
	}
	public function getRadius()
	{
		return $this;
	}
	public function setRadius($l,$b)
	{
		$this->length=$l;
		$this->breeth=$b;	
	}
	public function getArea()
	{
		return ($this->length*$this->breeth)/2;		
	}
}

$m=new MyTriangle();
echo $m->getArea();
$m->setRadius(5,15);
$m->getRadius();
echo $m->getArea();

?>