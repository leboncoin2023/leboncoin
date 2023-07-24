<?php

namespace App\Document;

use App\Repository\AuctionsRepository;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\Document]
class Auctions

{
#[MongoDB\Id]
protected string $id;

#[MongoDB\Field(type:'string')]
private ?string $title = null;

#[MongoDB\Field(type: 'string')]
private ?string $category = null;

#[MongoDB\Field(type: 'string')]
private ?string $description = null;


#[MongoDB\Field(type: 'string')]
private ?string $subcategory = null;

#[MongoDB\Field(type:'string')]
private ?string $startPrice = null;


#[MongoDB\Field(type:'string')]
private ?string $soldPrice = null;

#[MongoDB\Field(type:'string')]
private ?string $reservePrice = null;



//#[MongoDB\Field(type:'date')]
//private ?\DateTimeInterface $start_date = null;
//private ?string $start_date = null;

#[MongoDB\Field(type: 'date')]
private ?\DateTimeInterface $startDate = null;


////#[MongoDB\Field(type:'string')]
//private ?string $start_date = null;

#[MongoDB\Field(type:'string')]
private ?string $duration = null;

#[MongoDB\Field(type:'string')]
private ?string $deliveryMode = null;


#[MongoDB\Field(type:'string')]
private string $video;

#[MongoDB\Field(type:'string')]
private ?string $localisation = null;

/**
     * @MongoDB\ReferenceOne(targetDocument=User::class, mappedBy="auctions")
     */
    private $buyer;





#[MongoDB\Field(type:"collection")]
private $pictures = [];

#[MongoDB\Field(type:"string")]
private $offre = null;

/*
public function __construct()
{
    $this->id = '';
    $this->title = '';
    $this->category = '';
    $this->description = '';
    $this->subcategory = '';
    $this->start_price = '';
    $this->sold_price = '';
    $this->reserve_price = '';
    $this->start_date = '';
    $this->duration = '';
    $this->delivery_mode = '';
    $this->picture = '';
    $this->video = '';
    $this->localisation = '';
    $this->seller_id = '';
    $this->buyer_id = '';



}    
*/



//__________GET______________________________

    public function getId(): string
    {

        return $this->id;
    }
    
    public function getTitle(): ?string
    {

        return $this->title;
    }

    public function getCategory(): ?string
    {

        return $this->category;
    }
   
    public function getDescription(): ?string
    {

        return $this->description;
    }



    public function getSubCategory(): ?string
    {

        return $this->subcategory;
    }

    

    public function getStartPrice(): ?string
    {

        return $this->startPrice;
    }

    public function getSoldPrice(): ?string
    {

        return $this->soldPrice;
    }

    public function getReservePrice(): ?string
    {

        return $this->reservePrice;
    }

    public function getoffre(): ?string
    {

        return $this->offre;
    }
    
    /*
    public function getStartDate(): ?string
    {

        return $this->start_date;
    }*/

    /*
    public function getStartDate(): ?string
    {
        return $this->start_date instanceof \DateTimeInterface
            ? $this->start_date->format('Y-m-d H:i:s')
            : null;
    }*/

    public function getStartDate(): ?\DateTimeInterface
    {
    return $this->startDate;
    }


    


    
    public function getDuration(): ?string
    {

        return $this->duration;
    }

    
    /*
    public function getDelivery_mode(): ?string    
    {

        return $this->delivery_mode;
    } */

    public function getDeliveryMode(): ?string
    {
    return $this->deliveryMode;
    }




    /*
    public function getpicture(): ?string
    {

        return $this->picture;
    }*/
    public function getPictures(): array
    {
        return $this->pictures;
    }




    public function getVideo(): string
    {

        return $this->video;
    }


    /*
    public function getLocation(): ?string
    {

        return $this->localisation;
    }*/

    public function getLocalisation(): ?string
    {
    return $this->localisation;
    }

    public function getBuyer()
    {
        return $this->buyer;
    }

    



//_____________________SET_______________________________



    public function setTitle(?string $title)
    {

        $this->title = $title;
        return $this;
    }

    public function setCategory(?string $category)
    {

        $this->category = $category;

        return $this;
    }


    public function setDescription(?string $description)
    {

        $this->description = $description;

        return $this;
    }


    public function setSubCategory(?string $subcategory)
    {

        $this->subcategory = $subcategory;

        return $this;
    }

    

    public function setStartPrice(?string $startPrice)
    {

        $this->startPrice = $startPrice;

        return $this;
    }
    public function setSoldPrice(?string $soldPrice)
    {
    
        $this->soldPrice = $soldPrice;

        return $this;
    }
    public function setReservePrice(?string $reservePrice)
    {

        $this->reservePrice = $reservePrice;

        return $this;
    }

    
/*
    public function setStartDate(?string $start_date)
    {
        
        $this->start_date = $start_date;
        
        return $this;
    }*/

/*/
    public function setStartDate(?string $start_date): self
    {
        $this->start_date = $start_date !== null
            ? new \DateTime($start_date)
            : null;

        return $this;
    }*/

    /*
    public function setStartDate(?string $start_date): self
    {
    $this->start_date = $start_date;
    return $this;
    }*/


    public function setStartDate(?\DateTimeInterface $startDate): self
    {
    $this->startDate = $startDate;
    return $this;
    }


    public function setDuration(?string $duration)
    {
        
        $this->duration = $duration;
        
        return $this;
    }

    /*
    public function setDelivery_mode(?string $delivery_mode)
    {
        
        $this->delivery_mode = $delivery_mode;
        
        return $this;
    }*/


    public function setDeliveryMode(?string $deliveryMode)
    {
    $this->deliveryMode = $deliveryMode;
    }


    /*
    public function setPicture(?string $picture)
    {
        
        $this->picture = $picture;
        
        return $this;
    }*/
    public function setPictures(array $pictures): void
    {
        $this->pictures = $pictures;
    }


    public function setVideo(string $video)
    {
        
        $this->video = $video;
        
        return $this;
    }


    /*
    public function setLocalisation(?string $localisation)
    {
        
        $this->localisation = $localisation;
        
        return $this;
    }*/

    public function setLocalisation(?string $localisation)
    {
        $this->localisation = $localisation;
    }
    
    public function setBuyer($buyer)

    {
        $this->buyer = $buyer ;
    }


    


    public function setoffre(?string $offre)
    {
        
        $this->offre = $offre;
        
        return $this;
    }

    
} 