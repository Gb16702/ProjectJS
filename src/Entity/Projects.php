<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\HasLifecycleCallbacks]
#[ORM\Entity(repositoryClass: ProjectsRepository::class)]
#[Vich\Uploadable]
class Projects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable:true)]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\OneToMany(mappedBy: 'projects', targetEntity: ImagesProjects::class, orphanRemoval: true, cascade: ['persist'])]
    private Collection $imagesProjects;


    public function __construct()
    {
        $this->imagesProjects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, ImagesProjects>
     */
    public function getImagesProjects(): Collection
    {
        return $this->imagesProjects;
    }

    public function addImagesProject(ImagesProjects $imagesProject): self
    {
        if (!$this->imagesProjects->contains($imagesProject)) {
            $this->imagesProjects->add($imagesProject);
            $imagesProject->setProjects($this);

        }

        return $this;
    }

    public function removeImagesProject(ImagesProjects $imagesProject): self
    {
        if ($this->imagesProjects->removeElement($imagesProject)) {
            // set the owning side to null (unless already changed)
            if ($imagesProject->getProjects() === $this) {
                $imagesProject->setProjects(null);
            }
        }

        return $this;
    }
}
