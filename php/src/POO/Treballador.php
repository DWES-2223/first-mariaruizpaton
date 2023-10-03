<?php

namespace POO;

class Treballador {

    private $dni;
    private $telefon;

    /**
     * @param $dni
     * @param $telefon
     */
    public function __construct($dni, $telefon) {
        $this->dni = $dni;
        $this->telefon = $telefon;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni): void
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param mixed $telefon
     */
    public function setTelefon($telefon): void
    {
        $this->telefon = $telefon;
    }


}