<?php
class Person{
	private $name;
	private $age;
	private $gender;
	
	public function __construct($n,$a,$g)//create constructor in php
	{
		$this->name = $n;
		$this->age = $a;
		$this->gender = $g;
		
	}
	
	
	public function setname($n)
	{
		$this->name = $n;
	}
	public function getname()
	{
		return $this->name;
	}
	
}
$p1 = new Person("luxshika",23,"female");//create object
$p2 = new Person("khowshara",21,"female");
$p3 = new Person(null,null,null);

echo print_r($p1);echo "<br>";
echo print_r($p2);echo "<br>";
//print($p1->name); can't access private property outside the class like java so we should create get and set methods
echo $p1->getname();
echo "<br>";
$p3->setname("thanu");

echo print_r($p3);

?>

