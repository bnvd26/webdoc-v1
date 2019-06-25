<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
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
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponseA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponseB;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reponseC;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $extrait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getReponseA(): ?string
    {
        return $this->reponseA;
    }

    public function setReponseA(string $reponseA): self
    {
        $this->reponseA = $reponseA;

        return $this;
    }

    public function getReponseB(): ?string
    {
        return $this->reponseB;
    }

    public function setReponseB(string $reponseB): self
    {
        $this->reponseB = $reponseB;

        return $this;
    }

    public function getReponseC(): ?string
    {
        return $this->reponseC;
    }

    public function setReponseC(string $reponseC): self
    {
        $this->reponseC = $reponseC;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getExtrait(): ?string
    {
        return $this->extrait;
    }

    public function setExtrait(?string $extrait): self
    {
        $this->extrait = $extrait;

        return $this;
    }
}
