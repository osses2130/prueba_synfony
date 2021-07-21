<?php

namespace App\Entity;

use App\Repository\RolesPermisosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RolesPermisosRepository::class)
 */
class RolesPermisos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Permisos::class, inversedBy="RolesPermisos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $permisos;

    /**
     * @ORM\ManyToOne(targetEntity=Roles::class, inversedBy="RolesPermisos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $roles;


    public function getId(): ?int
    {
        return $this->id;
    }

    
}
