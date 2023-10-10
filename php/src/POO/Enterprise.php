<?php

class Enterprise implements JSerializable {

    private $nom;
    private $direccion;
    private $workers = [];

    public function __construct($nom, $direccion){
        $this->nom = $nom;
        $this->direccion = $direccion;
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
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    public function addWorker (Worker $wor) {
        $this->workers[] = $wor;
    }

    public function listWorkersHtml() : string{
        return ' ';
    }

    public function getCosteNominas() : float {
        $coste = 0;
        foreach ($this->workers as $worker){
            $coste += $worker->calcularSueldo();
        }
        return $coste;
    }

    public function toJSON(): string {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            if (is_array($valor)){
                foreach ($valor as $item) {
                    $mapa[$clave] = $item;
                }
            }
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}
