<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Cv2Repository")
 */
class Cv2
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $skills;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $languages;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $workexp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $education;

    /**
     * @ORM\Column(type="blob")
     */
    private $photo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getLanguages(): ?string
    {
        return $this->languages;
    }

    public function setLanguages(string $languages): self
    {
        $this->languages = $languages;

        return $this;
    }

    public function getWorkexp(): ?string
    {
        return $this->workexp;
    }

    public function setWorkexp(string $workexp): self
    {
        $this->workexp = $workexp;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(string $education): self
    {
        $this->education = $education;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}
