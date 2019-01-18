<?php
class Factorial
{
	public $num;
	public function __construct($n)
	{	
		if(!(gettype($n)=="integer"))
			{
				throw new Exception();
			}
			else
			{
				$this->num=$n;					
			}	
	}
	public function result()
	{
			for($i=1,$j=1;$i<=$this->num;$i++)
			{
				$j=$j*$i;
			}
		echo "<br />Factorial of ".$this->num." is ".$j;

	}
}
	$f=new Factorial(7);
	$f->result();
?>