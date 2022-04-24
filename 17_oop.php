<?php

class User{
    public $name;
    public $age;
    public $email;

    //constructor
    public function __construct($name, $age, $email) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    function get_name(){
        return $this->name;
    }

    function set_name($name){
        $this->name = $name;
    }
}

//instantiate a new user object
$user1 = new User('Justin', 25,'email@email');
$user2 = new User('Darian',25,'email2@email');

echo $user1->email;

//inheritance
class Employee extends User{
    public function __construct($name,$age,$email,$title){
        //use this to re-use the parent classes constructor sets
        parent::__construct($name,$age,$email);
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Jimmy',33,'email@workEmail','HNIC');
var_dump($employee1);

?>