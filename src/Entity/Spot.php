<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraint as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\SpotRepository")
 * @Vich\Uploadable
 */
class Spot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;

    /**
     * @var File
     * @Vich\UploadableField(mapping="spot_pictures", fileNameProperty="picture")
     */
    private $pictureFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbLikes;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbTrees;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $user;

    /**
     * @ORM\JoinColumn(name="comment", referencedColumnName="id")
     * @ORM\ManyToOne(targetEntity="App\Entity\Comment")
     */
    private $comments;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     */
    private $category;
    /**
     * @var
     * @ORM\Column(type="integer")
     * Assert\Range(
     * min = 0,
     * max =2)
     * 0 = refused, 1 = waiting , 2 = accepted
     */
    private $status;


    public function __construct()
    {
        $this->date = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->status = 1;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getPictureFile(): ?File
    {
        return $this->pictureFile;
    }

    /**
     * @param File|null $picture
     */
    public function setPictureFile(?File $picture = null):void
    {
        $this->pictureFile = $picture;
        if (null != $picture) {
            $this->updatedAt = new \DateTime();
        }
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getNbLikes(): ?int
    {
        return $this->nbLikes;
    }

    public function setNbLikes(int $nbLikes): self
    {
        $this->nbLikes = $nbLikes;

        return $this;
    }

    public function getNbTrees(): ?int
    {
        return $this->nbTrees;
    }

    public function setNbTrees(int $nbTrees): self
    {
        $this->nbTrees = $nbTrees;

        return $this;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return null|string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Spot
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
