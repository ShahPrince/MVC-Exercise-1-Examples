<?php
class MySquare
{
	private $radius;

	public function __construct($r=1)
	{
		$this->radius=$r;
	}	
	public function __destruct()
	{
		echo "<br />Destruct called...";
	}
	public function getRadius()
	{
		return $this->radius;
	}
	public function setRadius($r1)
	{
		$this->radius=$r1;	
	}
	public function getArea()
	{
		return $this->radius*$this->radius;		
	}
}

$m=new MySquare();
echo $m->getArea();
$m->setRadius(5);
$m->getRadius();
echo $m->getArea();

?>