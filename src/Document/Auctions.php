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

#[MongoDB\Field(type: 'date')]
private ?\DateTimeInterface $startDate = null;

#[MongoDB\Field(type: 'date')]
private ?\DateTimeInterface $endDate = null;

#[MongoDB\Field(type:'string')]
private ?string $duration = null;

#[MongoDB\Field(type:'string')]
private ?string $deliveryMode = null;

#[MongoDB\Field(type:'string')]
private string $video;

#[MongoDB\Field(type:'string')]
private ?string $localisation = null;

#[MongoDB\Field(type:'string')]
private ?string $seller_id = null;

#[MongoDB\Field(type:'string')]
private ?string $buyer_id = null;

#[MongoDB\Field(type:"collection")]
private $pictures = [];

#[MongoDB\Field(type:"collection")]
private $offre = [];

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

    public function getoffre(): ?array
    {

        return $this->offre;
    }

    public function getStartDate(): ?\DateTimeInterface
    {

    return $this->startDate;

    }

    public function getEndDate(): ?\DateTimeInterface
    {

    return $this->endDate;

    }

    public function getDuration(): ?string
    {

        return $this->duration;
    }

    public function getDeliveryMode(): ?string
    {
        
    return $this->deliveryMode;

    }

    public function getPictures(): array
    {
        return $this->pictures;
    }

    public function getVideo(): string
    {

        return $this->video;
    }

    public function getLocalisation(): ?string
    {

    return $this->localisation;
    
    }

    public function getSellerId(): ?string
    {

        return $this->seller_id;
    }

    public function getBuyerId(): ?string
    {

        return $this->buyer_id;
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

    public function setStartDate(?\DateTimeInterface $startDate): self
    {

        $this->startDate = $startDate;
        
        return $this;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {

        $this->endDate = $endDate;
        
        return $this;
    }

    public function setDuration(?string $duration)
    {
        
        $this->duration = $duration;
        
        return $this;
    }

    public function setDeliveryMode(?string $deliveryMode)
    {
    $this->deliveryMode = $deliveryMode;
    }

    public function setPictures(array $pictures): void
    {
        $this->pictures = $pictures;
    }

    public function setVideo(string $video)
    {
        
        $this->video = $video;
        
        return $this;
    }

    public function setLocalisation(?string $localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }
    
    public function setSellerId(?string $seller_id)
    {

        $this->seller_id = $seller_id;

        return $this;
    }

    public function setBuyerId(?string $buyer_id)
    {

        $this->buyer_id = $buyer_id;

        return $this;
    }

    public function setoffre(?array $offre)
    {
        $this->offre = $offre;
        return $this;
    }

    public function addOffre(?array $offre)
    {
        $this->offre[] = $offre;
        return $this;
    }

    public function getCurrentValue(): int {
        // recupération des offres de l'enchères
        $offres = $this->getoffre();

        // ajout de l'enchere de départ
        $offre[] = $this->getStartPrice();

        // recherche de la valeur max
        usort($offres, fn($a, $b) => $b['offre'] <=> $a['offre']);

        // récupération de l'offre la plus haute
        return isset($offres[0]['offre']) ? $offres[0]['offre'] : 0;
    } 

} 