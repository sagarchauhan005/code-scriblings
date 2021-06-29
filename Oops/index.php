<?php
//Interface
interface height{
    public function getHeight();
}

class User implements height {
    public $name;
    public $age;
    protected $height = 5.5;
    public function __construct($name, $age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    protected function getAgeString(){
        return $this->name." is ".$this->age." years old.";
    }

    public function getHeight()
    {
        return $this->height;
    }
}

class Address extends User {
    public $gender;
    public $city;
    public function __construct($name, $age, $gender, $city)
    {
        parent::__construct($name, $age);
        $this->gender = $gender;
        $this->city = $city;
    }

    public function getCityString(){
        return ucfirst($this->gender)." lives in ".$this->city;
    }

    public function getAge(){
        return $this->getAgeString();
    }

    public function getHeight()
    {
        return ". His height is ".parent::getHeight();
    }
}

$data = new Address("Sagar Chauhan",28,"He",'Delhi');
echo $data->getAge()." ".$data->getCityString()." ".$data->getHeight();
