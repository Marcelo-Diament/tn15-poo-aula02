<?php

    // Chamando a interface IMC com o require_once()
    require_once("./classes/IMC.php");

    // Criando uma classe abstrata Pessoa que implementa a interface IMC
    abstract class Pessoa implements IMC {

        // Definindo as propriedeades Peso e Altura
        public $peso;
        public $altura;

        // Definindo o método construtor
        public function __construct($peso, $altura) {
            
            // Estamos atrelando o valor do parâmetro $peso (recebido no momento em que instanciamos um objeto a partir dessa classe ou de uma classe filha) à propriedade peso. Para fazermos isso, usamos o $this, de modo que a propriedade seja atrelada ao objeto instanciado.
            $this->peso = $peso;
            $this->altura = $altura;

            // Estamos criando uma nova propriedade para o objeto a ser instanciado, chamada imc. O valor dela é definido pelo método calcularIMC().
            $this->imc = $this->calcularIMC();
        }

        // Definindo o método que foi declarado na interface IMC (defini-lo é obrigatório). A palavra final define que será um método imutável (não pode ser herdado nem sobrescrito). Obs.: não existem propriedades final, apenas métodos.
        final public function calcularIMC() {
            return round($this->peso / ($this->altura * $this->altura) * 10000, 2);
        }


    }

?>