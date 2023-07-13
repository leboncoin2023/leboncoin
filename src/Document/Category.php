<?php


namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\Document]
class Category
{
    #[MongoDB\Id]
    private string $id;

    public function getId(): string
    {

        return $this->id;
    }
 
}
