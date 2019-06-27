<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ChapterOneRepository")
 * @Vich\Uploadable
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
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="chapterOne_image", fileNameProperty="filename")
     */

    private $imageFile;

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

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $content1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content4;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $content5;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $content6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content15;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content16;



 

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

    /**
     * @return null|string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param null|string 
     * @return chapterOne
     */
    public function setFilename(?string $filename): chapterOne
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;

        
    }

    /**
     * @param null|File 
     * @return chapterOne
     */
    public function setImageFile(?File $imageFile = null): chapterOne
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) 
        {
            $this->updated = new \DateTime('now');
        }
        return $this;
    
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getContent1(): ?string
    {
        return $this->content1;
    }

    public function setContent1(?string $content1): self
    {
        $this->content1 = $content1;

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->content2;
    }

    public function setContent2(?string $content2): self
    {
        $this->content2 = $content2;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->content3;
    }

    public function setContent3(?string $content3): self
    {
        $this->content3 = $content3;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->content4;
    }

    public function setContent4(?string $content4): self
    {
        $this->content4 = $content4;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->content5;
    }

    public function setContent5(?string $content5): self
    {
        $this->content5 = $content5;

        return $this;
    }

    public function getContent6(): ?string
    {
        return $this->content6;
    }

    public function setContent6(?string $content6): self
    {
        $this->content6 = $content6;

        return $this;
    }

    public function getContent7(): ?string
    {
        return $this->content7;
    }

    public function setContent7(?string $content7): self
    {
        $this->content7 = $content7;

        return $this;
    }

    public function getContent8(): ?string
    {
        return $this->content8;
    }

    public function setContent8(?string $content8): self
    {
        $this->content8 = $content8;

        return $this;
    }

    public function getContent9(): ?string
    {
        return $this->content9;
    }

    public function setContent9(?string $content9): self
    {
        $this->content9 = $content9;

        return $this;
    }

    public function getContent10(): ?string
    {
        return $this->content10;
    }

    public function setContent10(?string $content10): self
    {
        $this->content10 = $content10;

        return $this;
    }

    public function getContent11(): ?string
    {
        return $this->content11;
    }

    public function setContent11(?string $content11): self
    {
        $this->content11 = $content11;

        return $this;
    }

    public function getContent12(): ?string
    {
        return $this->content12;
    }

    public function setContent12(?string $content12): self
    {
        $this->content12 = $content12;

        return $this;
    }

    public function getContent13(): ?string
    {
        return $this->content13;
    }

    public function setContent13(?string $content13): self
    {
        $this->content13 = $content13;

        return $this;
    }

    public function getContent14(): ?string
    {
        return $this->content14;
    }

    public function setContent14(?string $content14): self
    {
        $this->content14 = $content14;

        return $this;
    }

    public function getContent15(): ?string
    {
        return $this->content15;
    }

    public function setContent15(?string $content15): self
    {
        $this->content15 = $content15;

        return $this;
    }

    public function getContent16(): ?string
    {
        return $this->content16;
    }

    public function setContent16(?string $content16): self
    {
        $this->content16 = $content16;

        return $this;
    }






   
}
