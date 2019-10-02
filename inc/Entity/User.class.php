<?php

class User {

    //Attributes
    private $id;
    private $first_name="";
    private $last_name="";
    private $username="";
    private $email="";
    private $phone="";
    private $gender="";
    private $age;
    private $password="";

    //Getters
    function getId()
    {
        return $this->id; 
    }
    function getFirstName()
    {
        return $this->first_name; 
    }
    function getUserName()
    {
        return $this->username; 
    }
    function getLastName()
    {
        return $this->last_name; 
    }
    function getGender()
    {
        return $this->gender; 
    }
    function getEmail()
    {
        return $this->email; 
    }
    function getPassword()
    {
        return $this->password; 
    }
    function getPhone()
    {
        return $this->phone; 
    }
    function getAge()
    {
        return $this->age; 
    }


    //Verify the password
    function verifyPassword(string $passwordToVerify) {
        //Return a boolean based on verifying if the password given is correct for the current user
        return password_verify($passwordToVerify,$this->getPassword());

    }
}



?>