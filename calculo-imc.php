<?php
require_once("./inc/head.php");
require_once("./classes/Mulher.php");
require_once("./classes/Homem.php");
require_once("./inc/header.php");
?>
<main class="container">
    <section class="row py-5">

        <?php if (!isset($_POST) || !$_POST) : ?>

            <article class="col-12 col-lg-6 mx-auto bg-light rounded p-3">
                <header class="col-12 my-3 row">
                    <h2 class="col-12">Calculadora de IMC</h2>
                    <p class="col-12">Preencha o formulário e descubra seu IMC</p>
                </header>
                <form class="col-12" action="" method="post">
                    <div class="form-group-row mb-3">
                        <label for="peso">Peso</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="peso" name="peso" min="1" max="250" autofocus required>
                            <div class="input-group-append">
                                <div class="input-group-text">kg</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="altura">Altura</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="altura" name="altura" min="1" max="250" required>
                            <div class="input-group-append">
                                <div class="input-group-text">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-row mb-3">
                        <label for="sexo">Sexo</label>
                        <select class="custom-select" name="sexo" id="sexo" required>
                            <option disabled selected value="">Sexo</option>
                            <option value="feminino">Feminino</option>
                            <option value="masculino">Masculino</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark d-block mt-4 ml-auto">Calcular</button>
                </form>
            </article>

        <?php else : ?>

            <!-- Se recebermos algum valor no $_POST... -->
            <?php

                /* 
                 * IF TERNÁRIO:
                 * O if ternário consiste em 3 partes:
                 * 1) Condição
                 * 2) Caso a condição seja verdadeira
                 * 3) Caso a condição seja falsa
                 * Obs.: não podemos definir apenas os passos 1 e 2, é necessário ter o 3o também
                 * Podemos pensar numa pergunta: condição ? caso true : caso false
                 */
                $_POST["sexo"] === "feminino"
                    ? $usuario = new Mulher($_POST["peso"], $_POST["altura"])
                    : $usuario = new Homem($_POST["peso"], $_POST["altura"]);
                
                // Como ficaria no if tradicional:
                // if ($_POST["sexo"] === "feminino") {
                //     $usuario = new Mulher($_POST["peso"], $_POST["altura"]);
                // } else {
                //     $usuario = new Homem($_POST["peso"], $_POST["altura"]);
                // }
                
            ?>

            <article class="col-12 col-lg-6 mx-auto bg-light rounded p-3">
                <header class="col-12 my-3 row">
                    <h2 class="col-12">Cálculo de IMC</h2>
                    <p class="col-12">Veja a seguir os resultados do seu cálculo</p>
                </header>
                <div class="col-12">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Peso</th>
                                <th scope="col">Altura</th>
                                <th scope="col">IMC</th>
                                <th scope="col">Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $usuario->peso ?></td>
                                <td><?= $usuario->altura ?></td>
                                <td><?= $usuario->imc ?></td>
                                <th scope="row"><?= $usuario->pesoIdeal() ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <a href="./calculo-imc.php" class="btn btn-dark d-block w-25 ml-auto mt-5">Recalcular</a>
                </div>
            </article>
        <?php endif; ?>
    </section>
</main>
<?php require_once("./inc/footer.php"); ?>