<?php

class User
{
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // Properties declared without any explicit visibility keyword are defined as public.
    // Methods declared without any explicit visibility keyword are defined as public.
    // Constants declared without any explicit visibility keyword are defined as public.
    // https://www.php.net/manual/en/language.oop5.visibility.php
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    private $name;
    public $email;
    public $password;


    public function __construct($name, $email, $password)
    {
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // function setName() {
    //   $this->name = $name;
    // }

    function getName()
    {
        return $this->name;
    }

    function login()
    {
        return "User $this->name is logged in.";
    }

    // Destructor is called when an object is destroyed or the end of the script.
    function __destruct()
    {
        echo "The user name is {$this->name}.";
        echo '<br>';
    }
}

$user1 = new User('Billy', 'billy@hotmail.com', 'password321');
echo $user1->getName();
echo '<br>';

echo $user1->login();
echo '<br>';


// Add a value to a property
// $user1->name = 'Billy';

var_dump($user1);
echo '<br>';
// echo $user1->name;

// Inheritance example
class employee extends User
{
    public function __construct($name, $email, $password, $title)
    {
        // parent is PHP for "super"
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$employee1 = new employee('Joe', 'joe@yahoo.co.uk', 'password123', 'Janitor');
echo $employee1->getTitle();
echo '<br>';
