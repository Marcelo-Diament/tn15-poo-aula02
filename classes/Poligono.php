<?php

    // Criando uma classe abstrata Poligono que definirá métodos e propriedades que deverão ser implementadas pelas suas classes herdeiras
    abstract class Poligono {

        // Criando as propriedades $forma e $medidas
        public $forma;
        public $medidas;

        // Declarando nosso método construtor, que deverá receber os valores de $forma e $medidas
        public function __construct($forma, $medidas) {

            // Atrelar os valores recebidos como parâmetro do construct (declarados no momento em que instanciamos o objeto a partir da classe herdeira) às propriedades do objeto instanciado
            $this->forma = $forma;
            $this->medidas = $medidas;
        }

        // Declarando um método 'getter', que retorna as medidas (propriedades) do objeto
        public function getMedidas() {
            return $this->medidas;
        }

    }

?>