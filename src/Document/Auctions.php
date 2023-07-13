<?php


namespace App\Document;

use App\Repository\AuctionsRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\Document]
class Auctions
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $name;

    #[MongoDB\Field(type: 'string')]
    private string  $lastname;


    public function getId(): string
    {

        return $this->id;
    }

    public function getname(): string
    {

        return $this->name;
    }

    public function getlastname(): string
    {
        return $this->lastname;
    }




    public function setname(string $name)
    {

        $this->name = $name;
        return $this;
    }

    public function setLastname(string $lastname)
    {

        $this->lastname = $lastname;

        return $this;
    }
}
