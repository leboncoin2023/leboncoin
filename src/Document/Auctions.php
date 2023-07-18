<?php

namespace App\Document;

use App\Repository\AuctionsRepository;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


#[MongoDB\Document]
class Auctions

{
#[MongoDB\Id]
private string $id;

#[MongoDB\Field(type:'string')]
private string $title;

#[MongoDB\Field(type: 'string')]
private string $category;

#[MongoDB\Field(type: 'string')]
private string $description;


#[MongoDB\Field(type: 'string')]
private string $subcategory;

#[MongoDB\Field(type:'string')]
private string $start_price;


#[MongoDB\Field(type:'string')]
private string $sold_price;

#[MongoDB\Field(type:'string')]
private string $reserve_price;


#[MongoDB\Field(type:'string')]
private string $start_date;

#[MongoDB\Field(type:'string')]
private string $duration;

#[MongoDB\Field(type:'string')]
private string $delivery_mode;


#[MongoDB\Field(type:'string')]
private string $picture;

#[MongoDB\Field(type:'string')]
private string $video;

#[MongoDB\Field(type:'string')]
private string $localisation;

#[MongoDB\Field(type:'string')]
private string $seller_id;

#[MongoDB\Field(type:'string')]
private string $buyer_id;







//__________GET______________________________

    public function getId(): string
    {

        return $this->id;
    }

    public function getTitle(): string
    {

        return $this->title;
    }

    public function getCategory(): string
    {

        return $this->category;
    }
   
    public function getDescription(): string
    {

        return $this->description;
    }



    public function getSubCategory(): string
    {

        return $this->subcategory;
    }

    

    public function getStartPrice(): string
    {

        return $this->start_price;
    }

    public function getSoldPrice(): string
    {

        return $this->sold_price;
    }

    public function getReserve_price(): string
    {

        return $this->reserve_price;
    }

    
    
    public function getStartdate(): string
    {

        return $this->start_date;
    }
    
    public function getDuration(): string
    {

        return $this->duration;
    }

    public function getDelivery_mode(): string
    {

        return $this->delivery_mode;
    }

    public function getpicture(): string
    {

        return $this->picture;
    }

    public function getVideo(): string
    {

        return $this->video;
    }

    public function getLocation(): string
    {

        return $this->localisation;
    }

    public function getSellerId(): string
    {

        return $this->seller_id;
    }

    public function getBuyerId(): string
    {

        return $this->buyer_id;
    }



//_____________________SET_______________________________



    public function setTitle(string $title)
    {

        $this->title = $title;
        return $this;
    }

    public function setCategory(string $category)
    {

        $this->category = $category;

        return $this;
    }


    public function setDescription(string $description)
    {

        $this->description = $description;

        return $this;
    }


    public function subCategory(string $subcategory)
    {

        $this->subcategory = $subcategory;

        return $this;
    }

    

    public function setStartPrice(string $start_price)
    {

        $this->start_price = $start_price;

        return $this;
    }
    public function setSoldPrice(string $sold_price)
    {
    
        $this->sold_price = $sold_price;

        return $this;
    }
    public function setReservePrice(string $reserve_price)
    {

        $this->reserve_price = $reserve_price;

        return $this;
    }

    

    public function setStartDate(string $start_date)
    {
        
        $this->start_date = $start_date;
        
        return $this;
    }

    public function setDuration(string $duration)
    {
        
        $this->duration = $duration;
        
        return $this;
    }

    public function setDeliveryMode(string $delivery_mode)
    {
        
        $this->delivery_mode = $delivery_mode;
        
        return $this;
    }

    public function setPicture(string $picture)
    {
        
        $this->picture = $picture;
        
        return $this;
    }

    public function setVideo(string $video)
    {
        
        $this->video = $video;
        
        return $this;
    }

    public function setLocalisation(string $localisation)
    {
        
        $this->localisation = $localisation;
        
        return $this;
    }

    public function setSellerId(string $seller_id)
    {
        
        $this->seller_id = $seller_id;
        
        return $this;
    }

    public function setBuyerId(string $buyer_id)
    {
        
        $this->buyer_id = $buyer_id;
        
        return $this;
    }

    }