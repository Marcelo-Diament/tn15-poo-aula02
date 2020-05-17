# Módulo POO | Aula 02
##### Repositório para Prática em Aula
-----
  
#### Tema Geral: Programação Orientada a Objetos (PHP)
#### Tema da Aula: Classes Abstratas e Interfaces
  
  
# Revisão
**Nessa aula revisitaremos os conceitos básicos vistos na [Aula 01 de POO](http://github.com/Marcelo-Diament/tn15-poo-aula01), como:**

  - Criação de **Classe**
  - Definição de **Propriedades** e **Métodos** dentro de uma Classe
  - Instância de um **Objeto** a partir de uma classe
  - Acesso às **Propriedades** e **Métodos** a partir do Objeto
  - Uso da palavra chave **_$this_**
  - Os métodos mágicos **___construct_** e **___destruct_** (e o uso do **_unset()_**)
  
  
# Novidades!

## Classes Abstratas

![Pintura de Pollock, pintor Abstrato](https://sc01.alicdn.com/kf/HTB1annAPpXXXXX5XXXXq6xXFXXXn.jpg)

A **Clase Abstrata** nos permite declarar e definir métodos e propriedades, mas... não podem ser instanciadas diretamente. Ou seja, para instanciarmos um objeto que herde essas caracteríscias e ações, precisamos utilizar os métodos **_get_** e **_set_** (que veremos mais adiante). Uma classe que estenda a classe abstrata deve, obrigatoriamente, implementar todos os métodos definidos na classe abstrata. Também é possível definir funções abstratas nas classes Abstratas. Nós as declaramos porém não precisamos defini-las necessariamente.

#### Vantagens
As principais vantagens do uso da Classe Abstrata são:
  
1. **Obrigamos que toda classe que a estende utilize os métodos declarados.** Ou seja, ao obrigarmos que a classe defina esses métodos declarados na classe Abstrata, garantimos a consistência da nossa abstração.
2. **Permitimos que cada classe defina esses métodos de uma maneira distinta (ou mesmo as sobrescreva)**. respeitando a mutação de cada Classe.
3. **Conseguimos proteger propriedades** que só podem ser acessados através de métodos (get e set).
  
_Exemplo: a classe abstrata Fruta define as propriedades cor e sabor. Sendo assim, as classes que a implementam (como Banana, Maçã e Pêra) devem ter seus sabores e cores definidos._
  
> A classe Abstrata permite a **Mutação** de cada classe que a estende e **obriga a implementação de seus métodos**.
  

## Interfaces

![Diferentes Veículos](https://cdn.thumbr.io/880ced330164c31c422f19ff13049631/KhPZbWboUluRxv8PG87L/https%3A%2F%2Fimage.flaticon.com/share_sprites/pack/0/168/168257-transportation-vehicles.jpg/600/thumb.jpg)

A **Interface** nos permite declarar métodos públicos (não propriedades) que deverão ser utilizados - obrigatoriamente - pelas classes que a implementam (como num contrato); no entanto só podemos declará-los (não podemos defini-los dentro da própria interface). As principais vantagens do uso da Interface são:
  
1. **Obrigamos que toda classe que a implemente utilize os métodos declarados.** Ou seja, ao obrigarmos que a classe defina esses métodos declarados na Interface, garantimos a consistência da nossa abstração.
2. **Permitimos que cada classe defina esses métodos de uma maneira distinta**. respeitando a especificidade de cada Classe.
3. **Uma classe pode implementar mais de uma interface** (enquanto só pode estender uma única classe).
  
_Exemplo: se temos uma interface VeículoMotorizado que tem como método 'abastecerCombustível', qualquer veículo que a implemente - seja um carro, um foguete ou uma moto, precisará definir como seu combustível será abastecido, cada um à sua maneira. Ainda no mesmo exemplo, podemos implementar outras interfaces para cada veículo exemplificado (o foguete poderia implementar a inteface Voo, a moto ManobrasRadicais e o carro RodizioMunicipal)._
  
> A Interface sela **Contratos** respeitando a **Especificidade** de cada abstração, podendo serem usadas **múltiplas interfaces numa só classe**.

# Práticas

## Calculadora de IMC Avançada

![Calculadora de IMC Avançada](https://raw.githubusercontent.com/Marcelo-Diament/tn15-poo-aula02/master/assets/img/imc.png)

Faremos uma calculadora de IMC que nos retorna um 'diagnóstico' do IMC de acordo com o peso, altura e sexo do usuário. Para isso teremos de criar uma Interface (IMC), uma classe Abstrata (Pessoa) e as classes Homem e Mulher. É claro que esse problema poderia ser resolvido de _n_ outras maneiras, o intuíto é aplicarmos esses conceitos para que entendam como funcionam.

## Calculadora de Polígonos

![Calculadora de Polígonos](https://raw.githubusercontent.com/Marcelo-Diament/tn15-poo-aula02/master/assets/img/poligonos.png)

Faremos uma calculadora de Perímetro e Área de polígonos (Círculo, Losango, Retângulo e Triângulo). É claro que forneceremos as fórmulas do cálculo em si - de novo, o intuíto é que absorvam esses conceitos e possam replicar em outros projetos. =)

## Extras
Ao longo das práticas, criamos situações em que terão de usar outros conceitos já ensinados no módulo de PHP, tais como **Arrays**, **Condicionais** e **Loops**. Também deixamos um layout mais bacana (que já será fornecido pronto para podermos focar no conteúdo da aula). E, por fim, deixamos dois scripts simples de **JavaScript**, como um spoiler para os alunos curiosos! hehehe

É isso galera! Qualquer dúvida, nos procurem no Slack da turma! Boa aula!
