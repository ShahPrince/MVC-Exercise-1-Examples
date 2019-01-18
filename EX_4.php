<?php
class EX_4
{
	public $array;
	public function __construct($a)
	{
		if(!(gettype($a)=="array"))
			{
				throw new Exception();
			}	
				
		$this->array=$a;
	}
	public function do_sort()
	{	
		sort($this->array);
		print_r($this->array);
	}
}

$e=new EX_4(array(2,4,1,-5,3,-7));
$e->do_sort();
?>