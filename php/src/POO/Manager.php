<?php

class Manager extends Worker {

    public function __construct(
        private $nom,
        protected $cognom,
        protected $edat=25,
        protected $salari){}

    function calcularSueldo(): float
    {
        return $this->salari + ($this->salari * $this->edat)/100;
    }

    public function __toString(): string
    {
        return parent::__toString();
    }

    public static function toHtml(Person $p): string
    {
        return ' ';
    }
}
