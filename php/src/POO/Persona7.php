<?php

namespace POO;

class Persona7 {
    private $nom;
    private $cognoms;
    private $edat;

    /**
     * @param $nom
     * @param $cognoms
     * @param $edat
     */
    public function __construct(string $nom, string $cognoms, int $edat) {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edat = $edat;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * @param mixed $cognoms
     */
    public function setCognoms($cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    /**
     * @return mixed
     */
    public function getEdat()
    {
        return $this->edat;
    }

    /**
     * @param mixed $edat
     */
    public function setEdat($edat): void
    {
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string {
        return $this->getNom() . ' ' . $this->getCognoms();
    }

    public function estaJubilado() : bool {
        return $this->getEdat() >= 65;
    }
}