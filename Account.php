<?php
class Account{
	private $customer;
	private $accountNo;
	private $balance;
    static $annualInterestRate = 0.2 ;//static variable is the class level variable
	
	public function __construct($c,$a,$b)//create constructor in php
	{
		$this->customer = $c;
		$this->accountNo = $a;
		$this->balance = $b;
	}
	
	public function setInitialBalance($balance)
	{
		$this->balance = $balance;
	}
	public function deposit($amount){
		$this->balance = $this->balance+$amount;
	}
	public function withdrawl($amount)
	{
		$this->balance = $this->balance-$amount;
	}
	public function getbalance()
	{
		return $this->balance;
	}
	public function calculateMonthlyInterest()
	{
		$MonthlyInterest = ((self::$annualInterestRate)*$this->balance)/12;
		$this->balance = $this->balance+$MonthlyInterest;
	
	}
	public static function modifyInterestRate($rate)
	{
		self::$annualInterestRate = $rate;
	}
	
}

$c1 = new Account(null,null,null);
$c2 = new Account("gnanam",1234,30000);
$c1->setInitialBalance(20000);
$c1->deposit(10000);
$c1->withdrawl(5000);
echo $c1->getbalance();
echo "<br>";
echo $c1->calculateMonthlyInterest();
echo $c1->getbalance();
$c1->modifyInterestRate(0.4);
echo "<br>";
print($c1::$annualInterestRate);
echo "<br>";
print($c2::$annualInterestRate);
?>