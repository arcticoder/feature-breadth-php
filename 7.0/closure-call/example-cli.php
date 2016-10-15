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

// Convert this intermediate closure to the shorthand use of Closure::call()
$myCountClosure = $myCountClosure->bindTo($myClassFive); 
echo "5 + 3 = ".call_user_func_array($myCountClosure, [3])."\n";

$myCountClosure = $myCountClosure->bindTo($myClassTen); 
echo "10 + 2 = ".call_user_func_array($myCountClosure, [2])."\n";