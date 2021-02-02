<?php

namespace App\Entity;

use App\Repository\GoutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GoutRepository::class)
 */
class Gout
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gout;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGout(): ?string
    {
        return $this->gout;
    }

    public function setGout(string $gout): self
    {
        $this->gout = $gout;

        return $this;
    }
}
