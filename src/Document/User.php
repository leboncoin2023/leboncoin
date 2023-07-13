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
    private string $firstname;

    #[MongoDB\Field(type: 'string')]
    private string  $lastname;


//GET____________________________________
    public function getId(): string
    {

        return $this->id;
    }

    public function getname(): string
    {

        return $this->firstname;
    }

    public function getlastname(): string
    {

        return $this->lastname;
    }


//SET____________________________________
    public function setname(string $name)
    {

        $this->firstname = $name;
        return $this;
    }

    public function setLastname(string $lastname)
    {

        $this->lastname = $lastname;

        return $this;
    }





}