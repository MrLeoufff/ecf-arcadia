<?php

namespace App\Entity;

use App\Repository\AnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $name = null;

    #[ORM\Column(length: 150)]
    private ?string $race = null;

    #[ORM\Column]
    private array $image = [];

    #[ORM\ManyToOne(targetEntity: Habitat::class, inversedBy: 'animals')]
    #[ORM\JoinColumn(name: 'habitat_id', nullable: false)]
    private ?Habitat $habitat = null;

    /**
     * @var Collection<int, self>
     */
    #[ORM\OneToMany(targetEntity: self::class, mappedBy: 'habitat_id')]
    private Collection $animals;

    /**
     * @var Collection<int, VeterinaryReport>
     */
    #[ORM\OneToMany(targetEntity: VeterinaryReport::class, mappedBy: 'animal_id')]
    private Collection $veterinaryReports;

    /**
     * @var Collection<int, AnimalFeeding>
     */
    #[ORM\OneToMany(targetEntity: AnimalFeeding::class, mappedBy: 'animal_id')]
    private Collection $animalFeedings;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
        $this->veterinaryReports = new ArrayCollection();
        $this->animalFeedings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getImage(): array
    {
        return $this->image;
    }

    public function setImage(array $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getHabitatId(): ?self
    {
        return $this->habitat;
    }

    public function setHabitatId(?self $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

    /**
     * @return Collection<int, self>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(self $animal): static
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setHabitatId($this);
        }

        return $this;
    }

    public function removeAnimal(self $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getHabitatId() === $this) {
                $animal->setHabitatId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, VeterinaryReport>
     */
    public function getVeterinaryReports(): Collection
    {
        return $this->veterinaryReports;
    }

    public function addVeterinaryReport(VeterinaryReport $veterinaryReport): static
    {
        if (!$this->veterinaryReports->contains($veterinaryReport)) {
            $this->veterinaryReports->add($veterinaryReport);
            $veterinaryReport->setAnimalId($this);
        }

        return $this;
    }

    public function removeVeterinaryReport(VeterinaryReport $veterinaryReport): static
    {
        if ($this->veterinaryReports->removeElement($veterinaryReport)) {
            // set the owning side to null (unless already changed)
            if ($veterinaryReport->getAnimalId() === $this) {
                $veterinaryReport->setAnimalId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AnimalFeeding>
     */
    public function getAnimalFeedings(): Collection
    {
        return $this->animalFeedings;
    }

    public function addAnimalFeeding(AnimalFeeding $animalFeeding): static
    {
        if (!$this->animalFeedings->contains($animalFeeding)) {
            $this->animalFeedings->add($animalFeeding);
            $animalFeeding->setAnimalId($this);
        }

        return $this;
    }

    public function removeAnimalFeeding(AnimalFeeding $animalFeeding): static
    {
        if ($this->animalFeedings->removeElement($animalFeeding)) {
            // set the owning side to null (unless already changed)
            if ($animalFeeding->getAnimalId() === $this) {
                $animalFeeding->setAnimalId(null);
            }
        }

        return $this;
    }

    public function setHabitat(Habitat $param)
    {
    }

    public function getHabitat()
    {
    }
}
