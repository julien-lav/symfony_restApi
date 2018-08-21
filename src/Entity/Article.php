<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\ArticleInterface;
use Symfony\Component\Serializer\Annotation\Groups;

// ???? this use are not surely usefull

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Groups("user")
     * @Groups("articles")
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @Groups("user")
     * @Groups("articles")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @Groups("articles")
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="articles", cascade={"all"}, fetch="EAGER")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
