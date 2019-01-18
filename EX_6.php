<!DOCTYPE html>
<html>
<head>
	<title>Calculater</title>
</head>
<body>
	<form method="POST">
		<input type="Submit" value="Addition" name="add" >
		<input type="Submit" value="Subtraction" name="sub" >
		<input type="Submit" value="Multiplication" name="multi" >
		<input type="Submit" value="Division" name="div" >

	</form>
</body>
</html>
<?php
class Calculator
{
	public $a,$b;
	public function __construct($a,$b)
	{
		$this->a=$a;
		$this->b=$b;
	}
	public function add()
	{
		return $this->a+$this->b;
	}

	public function subtract()
	{
		return $this->a-$this->b;
	}

	public function multiply()
	{
		return $this->a*$this->b;
	}

	public function divide()
	{
		return "<br />Division : ".$this->a/$this->b;				
			}	
	}
}

$c=new Calculator(20,10);

if(isset($_POST['add']))
{
	echo "<br />Addition : ".$c->add();
}
if(isset($_POST['sub']))
{
	echo "<br />Subtraction : ".$c->subtract();
}
if(isset($_POST['multi']))
{
	echo "<br />Multipliction : ".$c->multiply();
}
if(isset($_POST['div']))
{
	echo $c->divide();
}


?>