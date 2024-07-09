<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(collection: 'animal_view')]
class AnimalView
{
    #[MongoDB\Id]
    protected ?string $id;

    #[MongoDB\Field(type: 'string')]
    protected ?string $animalName;

    #[MongoDB\Field(type: 'integer')]
    protected ?int $views = 0;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getAnimalName(): ?string
    {
        return $this->animalName;
    }

    public function setAnimalName(string $animalName): self
    {
        $this->animalName = $animalName;
        return $this;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function incrementViews(): self
    {
        $this->views++;
        return $this;
    }
}