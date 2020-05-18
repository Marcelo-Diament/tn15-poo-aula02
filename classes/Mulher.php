<?php

    // Chamando a classe abstrata Pessoa com o require_once()
    require_once("./classes/Pessoa.php");

    // Criando uma classe herdeira (que estende) a classe abstrata Pessoa
    class Mulher extends Pessoa {

        // Função que retorna o diagnóstico de acordo o peso 'ideal'
        public function pesoIdeal(){

            // Estamos atrelando o valor do IMC à variável $condicao
            $condicao = $this->calcularIMC();

            // Vamos usar o switch para contemplar os ranges de valores.
            // O switch vai comparar um valor frente aos casos. Então vamos ver se as condições que precisamos usar são true.
            switch ( true ) {
                case ($condicao < 14.5):
                    $condicao = "Desnutrição";
                break;
                case ($condicao < 18.5):
                    $condicao = "Subnutrição";
                break;
                case ($condicao < 24):
                    $condicao = "Peso Ideal";
                break;
                case ($condicao < 29):
                    $condicao = "Sobrepeso";
                break;
                case ($condicao < 34.9):
                    $condicao = "Obesidade";
                break;
                case ($condicao < 39):
                    $condicao = "Obesidade Severa";
                break;
                default:
                    $condicao = "Obesidade Mórbia";
            }

            // Após redefinirmos o valor de $condicao (com a condicional switch) vamos retornar o nosso 'diagnóstico' (não é nenhum parecer médico!)
            return $condicao;

        }

    }

?>