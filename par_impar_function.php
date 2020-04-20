<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="_css/bootstrap.css">
    <link rel="stylesheet" href="_css/style.css">
    <link rel="stylesheet" href="_fontawesome/css/all.css">
    <script src="_js/jquery.js"></script>
    <script src="_js/script.js"></script>
    <script src="_js/bootstrap.js"></script>
    <link rel="sortcut icon" href="_icons/icone.ico" type="image/x-icon" />
    <title>Jogos do Par ou impar</title>
</head>

<body class="body-game">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <a href="main_menu.php"><i class="fas fa-arrow-alt-circle-left fa-3x mr-3" style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                <a href="par_impar_game.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                <a href="#" data-toggle="modal" data-target="#about-par-impar">
                    <i class="fas fa-question-circle fa-3x mr-3" style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="my-4 game-title">Jogo do Par ou Impar</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-sm-auto text-center" style="width:43.75rem;">
                    <div class="card-body">
                        <?php
                        $numero = isset($_GET['numero']) ? $_GET['numero'] : "[O valor do número não foi informado!]";
                        $num_resto = $numero % 2;
                        $resultado;
                        if ($num_resto == 0) {
                            $resultado = "<span class='special-word font-weight-bolder shadow-sm'> &nbsp;Par&nbsp; </span>";
                        } else {
                            $resultado = "<span class='special-word2 font-weight-bolder shadow-sm'> &nbsp;Impar&nbsp; </span>";
                        }
                        echo ("<h4 class='card-title'>Parabéns, repara abaixo!</h4>
                                 <p class='card-text'>Para esta jogada, escolheste o número " . $numero . ". O que determina se um número é <span class='special-word font-weight-bolder shadow-sm'>&nbsp; par &nbsp;</span> ou <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; impar &nbsp;</span> é resto da divisão do número que escolheste que foi " . $numero . " <span class='text-warning font-weight-bolder shadow-sm'>&nbsp; &rarr; (número/2) &nbsp;</span>. Quando o resto da divisão for Zero (0) o teu número será <span class='special-word font-weight-bolder shadow-sm'> Par </span> e se o resto for diferente de Zero (0) então o teu número é <span class='special-word2 font-weight-bolder shadow-sm'> impar </span>. Repara abaixo o resultado:</p>");
                        echo ("<p class='text-left'><span class='font-weight-bold legenda' style='text-decoration:underline;'>Resultado:</span><br/><span class='font-weight-bold legenda'>&rarr; Número escolhido:</span> <span class=' shadow-sm'> &nbsp;" . $numero . "&nbsp; </span> <br/><span class='font-weight-bold legenda'>&rarr; Valor do Resto:</span> <span class=' shadow-sm'> &nbsp;" . $num_resto . "&nbsp; </span> <br/><span class='font-weight-bold legenda'>&rarr; O número é:</span> " . $resultado . "</p>");
                        ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="float-right mr-n5 d-none d-lg-block">
            <img style="margin-top: -25rem" src="_imgs/Avatars-03.png" alt="">
        </div>
    </div>
    <div class="ml-2 mt-n5">

        <i class="fas fa-link" style="color:white; margin-top: 8.9rem;"><a target="_blank" href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="about-par-impar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><span class="special-word3 font-weight-bolder">Guia do jogo do Par ou Impar</span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    <p>
                    <span class="text-warning
                            font-weight-bolder shadow-sm">Parabéns amigos e amigas!</span> A partir do número que foi introduzido ficaste a saber se o número que escolheste é <span class="special-word font-weight-bolder shadow-sm">par</span> ou <span class="special-word2 font-weight-bolder shadow-sm">impar</span>, uma dica para que realmente percebas é leres o resultado, assim acredito que perceberás melhor.  <span class="text-warning
                            font-weight-bolder shadow-sm">Eu sei que consegues!</span> <a href="par_impar_game.php" class="legenda">Queres jogar mais?</a>.

                    </p>
                </div>

            </div>

        </div>

    </div>


</body>

</html>