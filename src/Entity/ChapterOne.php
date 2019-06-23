<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ChapterOneRepository")
 */
class ChapterOne
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
    private $title;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $imageBackground;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $music;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Picture", mappedBy="chapterOne", orphanRemoval=true)
     */
    private $pictures;

    public function __construct()
    {
        $this->pictures = new ArrayCollection();
    }

  

    public function getId(): ?int
    {
        return $this->id;
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

    public function getImageBackground(): ?string
    {
        return $this->imageBackground;
    }

    public function setImageBackground(string $imageBackground): self
    {
        $this->imageBackground = $imageBackground;

        return $this;
    }

    public function getMusic(): ?string
    {
        return $this->music;
    }

    public function setMusic(string $music): self
    {
        $this->music = $music;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Collection|Picture[]
     */
    public function getPictures(): Collection
    {
        return $this->pictures;
    }

    public function addPicture(Picture $picture): self
    {
        if (!$this->pictures->contains($picture)) {
            $this->pictures[] = $picture;
            $picture->setChapterOne($this);
        }

        return $this;
    }

    public function removePicture(Picture $picture): self
    {
        if ($this->pictures->contains($picture)) {
            $this->pictures->removeElement($picture);
            // set the owning side to null (unless already changed)
            if ($picture->getChapterOne() === $this) {
                $picture->setChapterOne(null);
            }
        }

        return $this;
    }



   
}
