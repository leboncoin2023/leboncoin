<?php


namespace App\Document;

use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $username;

    #[MongoDB\Field(type: 'string')]
    private string $email;

    #[MongoDB\Field(type: 'string')]
    private string $password;

    

//GET____________________________________
    public function getId(): string
    {

        return $this->id;
    }

    public function getUserName(): string
    {

        return $this->username;
    }

    public function getEmail(): string
    {

        return $this->email;
    }

    public function getPassword(): string
    {

        return $this->password;
    }

    


//SET____________________________________
    public function setUserName(string $name)
    {

        $this->username = $name;
        return $this;
    }

    public function setEmail(string $email)
    {

        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password)
    {

        $this->password = $password;
        return $this;
    }

}