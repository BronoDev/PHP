<?php

class Pai
{
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __set($attr, $value)
    {
        $this->$attr = $value;
    }

    private function executarMania()
    {
        echo 'Assobiar';
    }

    protected function responder()
    {
        echo 'Olá';
    }

    public function executarAcao()
    {
        $x = rand(1, 10);

        if ($x <= 5) {
            $this->executarMania();
        } else {
            $this->responder();
        }
    }
}

$pai = new Pai();
//echo $pai->getSobrenome();
echo $pai->executarAcao();
