<?php

namespace App\entity;

class Journal
{
    private string $id;
    private string $date;
    private string $localisation;
    private string $adresseIp;
    private string $statut;

    public function __construct(string $id, string $date, string $localisation, string $adresseIp, string $statut){
        $this->id = $id;
        $this->date = $date;
        $this->localisation = $localisation;
        $this->adresseIp = $adresseIp;
        $this->statut = $statut;
    }

    public function getId(): string{
        return $this->id;
    }

    public function getDate(): string{
        return $this->date;
    }

    public function getLocalisation(): string{
        return $this->localisation;
    }

    public function getAdresseIp(): string{
        return $this->adresseIp;
    }

    public function getStatut(): string{
        return $this->statut;
    }

    public function setId(string $id): void{
        $this->id = $id;
    }

    public function setDate(string $date): void{
        $this->date = $date;
    }

    public function setLocalisation(string $localisation): void{
        $this->localisation = $localisation;
    }

    public function setAdresseIp(string $adresseIp): void{
        $this->adresseIp = $adresseIp;
    }

    public function setStatut(string $statut): void{
        $this->statut = $statut;
    }

    public function toArray(): array{
        return [
            'id' => $this->id,
            'date' => $this->date,
            'localisation' => $this->localisation,
            'adresseIp' => $this->adresseIp,
            'statut' => $this->statut
        ];
    }

    public function toJson(): string{
        return json_encode($this->toArray());
    }

    public function toObject($data): static{
        return new static(
            $data['id'],
            $data['date'],
            $data['localisation'],
            $data['adresseIp'],
            $data['statut']
        );
    }
}