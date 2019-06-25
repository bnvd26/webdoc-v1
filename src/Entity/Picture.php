<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PictureRepository")
 */
class Picture
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
    private $filename;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ChapterOne", inversedBy="pictures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chapterOne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getChapterOne(): ?ChapterOne
    {
        return $this->chapterOne;
    }

    public function setChapterOne(?ChapterOne $chapterOne): self
    {
        $this->chapterOne = $chapterOne;

        return $this;
    }
}
