<?php

class Empleado extends Persona8 {

    private $telefonos = [];
    private $sueldo;

    /**
     * @param array $telefonos
     * @param $sueldo
     */
    public function __construct($nom, $cognom, $edat, $sueldo){
        parent::__construct($nom, $cognom, $edat);
        $this->sueldo = $sueldo;
    }

    /**
     * @return mixed
     */
    public function getSueldo()
    {
        return $this->sueldo;
    }

    /**
     * @param mixed $sueldo
     */
    public function setSueldo($sueldo): void
    {
        $this->sueldo = $sueldo;
    }

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

    public function debePagarImpuestos() : bool {
        return $this->getSueldo() > 3333;
    }

    public static function toHtml(Persona8 $emp) : string {
        return ' ';
    }

    public function __toString(): string {
        $padre = parent::__toString().'<ul>';
        return $padre . ", Sueldo: " . $this->getSueldo() . ", Telefonos: " . $this->listarTelefonos();
    }
}
