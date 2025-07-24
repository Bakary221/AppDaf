<?php

namespace App\entity;

class Citoyen
{
    private int $id;
    private string $nom;
    private string $prenom;
    private string $dateNaissance;
    private string $lieuNaissance;
    private string $cin;
    private string $urlCopieCIN;

    public function __construct(int $id, string $nom, string $prenom, string $dateNaissance, string $lieuNaissance, string $cin, string $urlCopieCIN){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->lieuNaissance = $lieuNaissance;
        $this->cin = $cin;
        $this->urlCopieCIN = $urlCopieCIN;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getNom(): string{
        return $this->nom;
    }

    public function getPrenom(): string{
        return $this->prenom;
    }

    public function getDateNaissance(): string{
        return $this->dateNaissance;
    }

    public function getLieuNaissance(): string{
        return $this->lieuNaissance;
    }

    public function getCin(): string{
        return $this->cin;
    }

    public function getUrlCopieCIN(): string{
        return $this->urlCopieCIN;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function setNom(string $nom): void{
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void{
        $this->prenom = $prenom;
    }

    public function setDateNaissance(string $dateNaissance): void{
        $this->dateNaissance = $dateNaissance;
    }

    public function setLieuNaissance(string $lieuNaissance): void{
        $this->lieuNaissance = $lieuNaissance;
    }

    public function setCin(string $cin): void{
        $this->cin = $cin;
    }

    public function setUrlCopieCIN(string $urlCopieCIN): void{
        $this->urlCopieCIN = $urlCopieCIN;
    }

    public function toArray(): array{
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'dateNaissance' => $this->dateNaissance,
            'lieuNaissance' => $this->lieuNaissance,
            'cin' => $this->cin,
            'urlCopieCIN' => $this->urlCopieCIN
        ];
    }

    public static function toObject(array $data): static{
        return new static(
            $data['id'],
            $data['nom'],
            $data['prenom'],
            $data['dateNaissance'],
            $data['lieuNaissance'],
            $data['cin'],
            $data['urlCopieCIN']
        );
    }
}