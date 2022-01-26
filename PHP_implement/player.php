<?php

class Player
{
    var $name;
    var $age;
    var $job;
    var $salary;
    
    public function __construct($name, $age, $job, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->salary = $salary;
    }
}

$p1 = new Player('1','2','3','4');
print_r($p1);
?>