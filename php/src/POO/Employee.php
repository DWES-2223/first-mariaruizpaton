<?php

class Employee extends Worker implements JSerializable{


    public function __construct(
        private $nom,
        private $cognom,
        private $edat = 25,
        private $horasTrabajadas = 0,
        private $precioHora = 0){}

    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getPrecioHora(): int
    {
        return $this->precioHora;
    }

    public function setPrecioHora(int $precioHora): void
    {
        $this->precioHora = $precioHora;
    }

    public function calcularSueldo() : float {
        return $this->horasTrabajadas*$this->precioHora;
    }

    public function __toString(): string
    {
        return parent::__toString();
    }

    public static function toHtml(Person $p): string{
        if ($p instanceof Employee){
            
        }
        return ' ';
    }

    public function toJSON(): string {
        $mapa = array();
        foreach ($this as $clave => $valor) {
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string {
        return serialize($this);
    }
}