<body>
    <?php
    $DEBUG = true;
    if ($DEBUG) :
    ?>
        <div class="container-fluid bg-warning text-black p-3" id="debugModeContainer">
            <div class="row">
                <h3 class="col-12 mt-3"><i class="fa fa-bug mr-3"></i> DEBUG MODE ON</h3>
                <?php if ((isset($_SESSION) && $_SESSION) || (isset($_REQUEST) && $_REQUEST)  || (isset($usuario) && $usuario)  || (isset($poligono) && $poligono)) : ?>
                    <p class="col-12 mb-3" type="button" data-toggle="collapse" data-target="#debugDetails" aria-expanded="false" aria-controls="debugDetails"><b>Confira as superglobais existentes</b> <i class="fa fa-chevron-down ml-1"></i></p>
                    <div class="collapse col-12 row" id="debugDetails">
                        <div class="col-12 d-flex justify-content-start align-items-start flex-row flex-nowrap">
                            <?php
                            if (isset($_GET) && $_GET) :
                                echo "<div class='col-12 col-md-4'><h5>GET</h5><pre>";
                                var_dump($_GET);
                                echo "</pre></div>";
                            endif;
                            if (isset($_POST) && $_POST) :
                                echo "<div class='col-12 col-md-4'><h5>POST</h5><pre>";
                                var_dump($_POST);
                                echo "</pre></div>";
                            endif;
                            if (isset($_SESSION) && $_SESSION) :
                                echo "<div class='col-12 col-md-4'><h5>SESSION</h5><pre>";
                                var_dump($_SESSION);
                                echo "</pre></div>";
                            endif;
                            if (isset($usuario) && $usuario) :
                                echo "<div class='col-12 col-md-4'><h5>POST</h5><pre>";
                                var_dump($usuario);
                                echo "</pre></div>";
                            endif;
                            if (isset($poligono) && $poligono) :
                                echo "<div class='col-12 col-md-4'><h5>SESSION</h5><pre>";
                                var_dump($poligono);
                                echo "</pre></div>";
                            endif;
                            ?>
                        </div>
                    </div>
                <?php else : ?>
                    <p class="col-12 mb-3"><b>Por enquanto não há em superglobais</b></p>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="./index.php">POO | AULA II</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuContent" aria-controls="menuContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./calculo-imc.php">IMC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./calculo-poligono.php">Polígonos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>