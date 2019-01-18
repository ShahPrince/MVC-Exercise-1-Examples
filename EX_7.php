<?php
class MyCircle
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
		return M_PI*$this->radius*$this->radius;		
	}
}

$m=new MyCircle();
echo $m->getArea();
echo "<br />";
$m->setRadius(5);
$m->getRadius();
echo $m->getArea();

?>