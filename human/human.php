<?php
namespace rsg\homework_l2\human;

class Human{
    public $gender='male';
    public $firstName='Ivan';
    public $secondName='Ivanov';
    public $age=1;
    public function __construct($gender='male',$firstName='Ivan',$secondName='Ivanov',$age=1){
        $this->gender=$gender;
        $this->firstName=$firstName;
        $this->secondName=$secondName;
        $this->age=$age;
    }
}
?>