<?php


namespace App\Document;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;



#[MongoDB\Document]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $username  ;

    #[MongoDB\Field(type: 'string')]
    private string $email ;

    #[MongoDB\Field(type: 'string')]
    private string $password ;

    #[MongoDB\Field(type: 'boolean')]
    private $isVerified ;

    //#[MongoDB\Field(type: 'array')]
    #[MongoDB\Field(type: "collection")]
    private array $roles = [] ;

    #[MongoDB\Field(type: 'string')]
    private string $phone;
   // @ODM\Document\(collection="User")
   //   private $auctions;

  /**
     * @MongoDB\ReferenceMany(targetDocument="Auctions::class", inversedBy="buyer")
     */
    private $auctions;

    // ...
    

//GET____________________________________
    public function getId(): string
    {

        return $this->id;
    }

    public function getUsername(): string
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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getRoles(): array
    {
       $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

       return array_unique($roles);
    }

        
    

        public function getAuctions(): Collection
       {
        return $this->auctions;
        }

        

    

    



//SET____________________________________
    public function setUsername(string $username)
    {

        $this->username = $username;
        return $this;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }



    // a faire verifier le is verified

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

}

