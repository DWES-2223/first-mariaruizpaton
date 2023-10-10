<?php

abstract class Worker extends Person {
    private $telefonos = [];

    public function getTelefonos(): array
    {
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

    public function debePagarImpuestos(): bool
    {
        return static::calcularSueldo() > 3333;
    }

    abstract function calcularSueldo(): float;
}
