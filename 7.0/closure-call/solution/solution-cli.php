<?php

class MyClass {
	private $myCount;
	
	public function __construct($myCount) {
        $this->myCount = $myCount;
    }

    public function getMyCount() {
        return $this->myCount;
    }
}

$myCountClosure = function($myCountPlus) {
	return $this->getMyCount() + $myCountPlus;
};

$myClassFive = new MyClass(5);
$myClassTen = new MyClass(10);

echo "5 + 3 = ".$myCountClosure->call($myClassFive, 3)."\n";
echo "10 + 2 = ".$myCountClosure->call($myClassTen, 2)."\n";