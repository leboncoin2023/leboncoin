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

    

//GET____________________________________
    public function getId(): string
    {

        return $this->id;
    }

    public function getname(): string
    {

        return $this->username;
    }

    


//SET____________________________________
    public function setname(string $name)
    {

        $this->username = $name;
        return $this;
    }

    




}