<?php

namespace App\Document;

use App\Repository\AuctionsRepository;
use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use PhpParser\Node\Expr\Cast\Double;

#[MongoDB\Document]
class Auctions

{
#[MongoDB\Id]
private string $id;

#[MongoDB\Field(type:'string')]
private string $title;

#[MongoDB\Field(type: 'string')]
private string $category;

#[MongoDB\Field(type: 'text')]
private string $description;


#[MongoDB\Field(type: 'string')]
private string $subcategory;

#[MongoDB\Field(type:'Double')]
private Double $start_price;


#[MongoDB\Field(type:'Double')]
private Double $sold_price;

#[MongoDB\Field(type:'Double')]
private Double $reserve_price;


#[MongoDB\Field(type:'Datetime')]
private DateTime $start_date;

#[MongoDB\Field(type:'Datetime')]
private DateTime $duration;

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
   
    public function getSubCategory(): string
    {

        return $this->subcategory;
    }

    public function getDescription(): string
    {

        return $this->description;
    }

    public function getStartPrice(): Double
    {

        return $this->start_price;
    }

    public function getReserve_price(): Double
    {

        return $this->reserve_price;
    }

    public function getSoldPrice(): Double
    {

        return $this->sold_price;
    }
    
    public function getStartdate(): Datetime
    {

        return $this->start_date;
    }
    
    public function getDuration(): Datetime
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

    public function subCategory(string $subcategory)
    {

        $this->subcategory = $subcategory;

        return $this;
    }

    public function setDescription(string $description)
    {

        $this->description = $description;

        return $this;
    }

    public function setStartPrice(Double $start_price)
    {

        $this->start_price = $start_price;

        return $this;
    }

    public function setReservePrice(Double $reserve_price)
    {

        $this->reserve_price = $reserve_price;

        return $this;
    }

    public function setSoldPrice(Double $sold_price)
    {
    
        $this->sold_price = $sold_price;

        return $this;
    }

    public function setStartDate(DateTime $start_date)
    {
        
        $this->start_price = $start_date;
        
        return $this;
    }

    public function setDuration(DateTime $duration)
    {
        
        $this->start_price = $duration;
        
        return $this;
    }

    public function setDeliveryMode(string $delivery_mode)
    {
        
        $this->start_price = $delivery_mode;
        
        return $this;
    }

    public function setPicture(string $picture)
    {
        
        $this->start_price = $picture;
        
        return $this;
    }

    public function setVideo(string $video)
    {
        
        $this->start_price = $video;
        
        return $this;
    }

    public function setLocalisation(string $localisation)
    {
        
        $this->start_price = $localisation;
        
        return $this;
    }

    public function setSellerId(string $seller_id)
    {
        
        $this->start_price = $seller_id;
        
        return $this;
    }

    public function setBuyerId(string $buyer_id)
    {
        
        $this->start_price = $buyer_id;
        
        return $this;
    }

    }