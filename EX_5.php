<?php
class EX_5
{
	public $date1,$date2;
	
	public function FunctionName()
	{
		$diff = $this->date1->diff($this->date2);
		
		echo "Difference : ".$diff->y." years, ".$diff->m." months,".$diff->d." days ";
	}
}	
	$e=new EX_5();
	$e->date1= new DateTime("1981-11-03");
	$e->date2 = new DateTime("2013-09-04");
	$e->FunctionName();
?>
