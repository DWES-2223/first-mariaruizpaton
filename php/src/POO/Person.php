<?php

abstract class Person implements JSerializable{
    const LIMITE_EDAD = 66;
    protected static $limite = self::LIMITE_EDAD;
    private $nom;
    private $cognoms;
    private $edat;

    /**
     * @param $nom
     * @param $cognoms
     * @param $edat
     */
    public function __construct($nom, $cognoms, $edat) {
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
        return $this->getEdat() > self::LIMITE_EDAD;
    }

    public function modificaLimite($nuevoLimite){
        self::$limite = $nuevoLimite;
    }

    abstract public static function toHtml(Person $p): string;

    public function __toString(): string {
        return "<p>".$this->getNom()." ".$this->getCognoms()."</p>";
    }
}
