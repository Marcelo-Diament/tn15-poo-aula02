<?php

    // Chamando a classe abstrata Poligono com o require_once()
    require_once("./classes/Poligono.php");

    class Triangulo extends Poligono {

        // Criando método que retorna o lado 1
        public function getLado1() {
            $medidas = $this->getMedidas();
            return $medidas[0];
        }

        // Criando método que retorna o lado 2
        public function getLado2() {
            $medidas = $this->getMedidas();
            return $medidas[1];
        }

        // Criando método que retorna o lado 3
        public function getLado3() {
            $medidas = $this->getMedidas();
            return $medidas[2];
        }

        // Criando método que calcula o perímetro do triângulo
        public function calcularPerimetro() {
            return $this->getLado1() + $this->getLado2() + $this->getLado3();
        }

        // Criando método que calcula a área do triângulo
        public function calcularArea() {
            $meioPerimetro = $this->calcularPerimetro() / 2;
            return round( sqrt( $meioPerimetro * ( $meioPerimetro - $this->getLado1() ) * ( $meioPerimetro - $this->getLado2() ) * ( $meioPerimetro - $this->getLado3() ) ), 2);
        }
    }

?>