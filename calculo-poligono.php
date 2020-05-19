<?php
require_once("./inc/head.php");
require_once("./classes/Circulo.php");
require_once("./classes/Losango.php");
require_once("./classes/Retangulo.php");
require_once("./classes/Triangulo.php");
require_once("./inc/header.php");
?>
<main class="container">
    <section class="row py-5">

        <?php if (!isset($_POST) || !$_POST) : ?>

            <article class="col-12 col-lg-6 mx-auto bg-light rounded p-3">
                <header class="col-12 my-3 row">
                    <h2 class="col-12">Calculadora Geométrica</h2>
                    <p class="col-12">Preencha o formulário e descubra o perímetro e a área</p>
                </header>
                <form class="col-12" action="" method="post" id="calcularPoligonoForm">
                    <div class="form-group-row mb-3">
                        <label for="poligono">Polígono</label>
                        <select class="custom-select" name="poligono" id="poligono" required>
                            <option disabled selected value="">Polígono</option>
                            <option value="Círculo">Círculo</option>
                            <option value="Losango">Losango</option>
                            <option value="Retângulo">Retângulo</option>
                            <option value="Triângulo">Triângulo</option>
                        </select>
                    </div>
                </form>
            </article>

        <?php else : ?>

            <?php
            
                switch ( $_POST["poligono"] ) {
                    case "Círculo" :
                        $poligono = new Circulo($_POST["poligono"], [$_POST["raio"]]);
                        $medidaNome = "Raio";
                    break;
                    case "Losango" :
                        $poligono = new Losango($_POST["poligono"],[$_POST["diagonal1"], $_POST["diagonal2"]]);
                        $medidaNome = "Diagonais";
                    break;
                    case "Retângulo" :
                        $poligono = new Retangulo($_POST["poligono"], [$_POST["lado1"], $_POST["lado2"]]);
                        $medidaNome = "Lados";
                    break;
                    case "Triângulo" :
                        $poligono = new Triangulo($_POST["poligono"], [$_POST["lado1"], $_POST["lado2"], $_POST["lado3"]]);
                        $medidaNome = "Lados";
                    break;
                    default:
                        echo "Ops! Não encontramos esse polígno! Mal aí!";
                    break;
                }

            ?>

            <article class="col-12 col-lg-6 mx-auto bg-light rounded p-3">
                <header class="col-12 my-3 row">
                    <h2 class="col-12">Cálculo de Polígono</h2>
                    <p class="col-12">Veja a seguir os resultados do seu cálculo</p>
                </header>
                <div class="col-12">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Polígono</th>
                                <th scope="col"><?= $medidaNome ?></th>
                                <th scope="col">Perímetro</th>
                                <th scope="col">Área</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $poligono->forma ?></td>
                                <td>
                                    <?php

                                        $medidas = $poligono->getMedidas();
                                        $i = 0; // Necessário usar o $i pois podemos receber valores iguais, o que impede o array_search de retornar como esperado de forma ágil (poderíamos usar um loop for também)
                                        foreach($medidas as $medida) :
                                            echo array_key_last($medidas) === $i
                                                ? $medida
                                                : $medida . ", ";
                                            $i++;
                                        endforeach;
                                    ?>
                                </td>
                                <td><?= $poligono->calcularPerimetro() ?></td>
                                <td><?= $poligono->calcularArea() ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="./calculo-poligono.php" class="btn btn-dark d-block w-25 ml-auto mt-5">Recalcular</a>
                </div>
            </article>
        <?php endif; ?>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>