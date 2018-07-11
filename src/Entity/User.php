<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Spot" , mappedBy="user")
     */
    private $spots;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="user")
     */
    private $comments;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Opinion" , mappedBy="user")
     */
    private $opinions;


    public function __construct()
    {
        $this->spots = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->opinions = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSpot() : Collection
    {
        return $this->spots;
    }
    public function addSpot(Spot $spot)
    {
        $this->spots[]= $spot;
        $spot->setUser($this);
    }

    public function removeSpot(Spot $spot)
    {
        $this->spots->removeElement($spot);
    }

    public function getComment() : Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment)
    {
        $this->comments[]= $comment;
        $comment->setUser($this);
    }

    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    public function getOpinion() : Collection
    {
        return $this->opinions;
    }

    public function addOpinion(Opinion $opinion)
    {
        $this->opinions[]= $opinion;
        $opinion->setUser($this);
    }

    public function removeOpinion(Opinion $opinion)
    {
        $this->opinions->removeElement($opinion);
    }

}
