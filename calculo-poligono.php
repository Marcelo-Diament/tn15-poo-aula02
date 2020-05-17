<?php
require_once("./inc/head.php");
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
                                <th scope="col">Medida</th>
                                <th scope="col">Perímetro</th>
                                <th scope="col">Área</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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