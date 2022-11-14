<?php
/* --- Object Oriented Programming --- */

/* 
    From PHP5 onwards you can write PHP in either procedural or orject oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

// Create a new class
class User {
    // Properties are attributes that belong to a class

    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        // echo 'constructor ran';
    }

    // Method is a function that belongs to a class
    // $this - refers to the current object
    function set_name($name) {
        $this->name = $name;
    }

    // Can use methods to get properties of the class
    function get_name() {
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('Brad', 'brad@gamil.com', '34344');
$user2 = new User('John', 'john@gmail.com', 'asddr');

// $user1->set_name('Brad');
// $user2->set_name('John');

echo $user1->name;
echo $user2->email;

// echo $user1->get_name();
// echo $user2->get_name();

// $user1->name = 'Brad';
// var_dump($user2);
// echo $user1->name;

// Inheritence - classes can inherit other classes
// aka absorb and extend the inherited class
class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '12345', 'Manager');

echo $employee1->get_title();