<?php

// classes sempre com letras maiusculas
class Pessoa {

	public $nome;//atributo

	public function falar(){// método
		return "o meu nome é ".$this->nome;

	}

}

$douglas = new Pessoa();
$douglas->nome = "Douglas Cananéa";
echo $douglas->falar();

?>