<?php

    // Chamando a classe abstrata Poligono com o require_once()
    require_once("./classes/Poligono.php");

    // Criando uma classe herdeira (que estende) a classe abstrata Poligono
    class Losango extends Poligono {

        // Criando método que retorna o diagonal 1
        public function getDiagonal1() {
            $medidas = $this->getMedidas();
            return $medidas[0];
        }

        // Criando método que retorna o diagonal 2
        public function getDiagonal2() {
            $medidas = $this->getMedidas();
            return $medidas[1];
        }

        // Criando método que calcula o perímetro do losango
        public function calcularPerimetro() {
            return 2 * $this->getDiagonal1() + 2 * $this->getDiagonal2();
        }

        // Criando método que calcula a área do losango
        public function calcularArea() {
            return $this->getDiagonal1() * $this->getDiagonal2() / 2;
        }

    }

?>