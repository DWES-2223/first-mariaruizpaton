<?php

abstract class Worker extends Person implements JSerializable{
    private $telefonos = [];

    public function getTelefonos(): array {
        return $this->telefonos;
    }


    public function anyadirTelefono(int $telefono) {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(){
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(){
        $this->telefonos = [];
    }

    public function debePagarImpuestos(): bool {
        return static::calcularSueldo() > 3333;
    }

    abstract function calcularSueldo(): float;

    public function __toString(): string {
        return parent::__toString();
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
