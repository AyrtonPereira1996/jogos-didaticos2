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
    <title>Jogo do Primo ou não-Primo</title>
</head>

<body class="body-game">
    <div class="container mt-0">
        <div class="row text-center ">
            <div class="col-sm-12 ">
                <a href="main_menu.php"><i class="fas fa-arrow-alt-circle-left fa-3x mr-3" style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                <a href="prim_game.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                <a href="#" data-toggle="modal" data-target="#about-primo">
                    <i class="fas fa-question-circle fa-3x mr-3" style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
            </div>
        </div>
        <div class="row text-center ">
            <div class="col-sm-12">
                <h1 class="my-4 game-title">Jogo do Primo ou não Primo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-sm-auto text-center" style="width:43.75rem;">
                    <div class="card-body">
                        <?php
                        $numero = isset($_GET['numero']) ? $_GET['numero'] : "[O valor do número não foi informado";
                        $tot = 0;
                        echo ("<h4 class='card-title'>Parabéns, repara abaixo!</h4>
                                  <p class='card-text'>Para esta jogada, escolheste o <span class='legenda text-warning font-weight-bolder shadow-sm'> &nbsp;número&nbsp; " . $numero . "</span>. Um número é <span class='special-word3 font-weight-bolder shadow-sm'>primo</span> quando é divisivel por si mesmo e por 1, caso não seja <span class='special-word2 font-weight-bolder shadow-sm'> não é primo </span>. Repara aqui abaixo, os números que estiverem <span class='text-success legenda font-weight-bolder shadow-sm'> a verde são divisiveis </span> por <span class='legenda text-warning font-weight-bolder shadow-sm'>" . $numero . "</span> os que tiverem <span class='text-danger font-weight-bolder shadow-sm'> a vermelho não são </span>.</p>");
                        echo ("<div class='text-left'><span class='font-weight-bold legenda'>Resultado:</span><br/>");
                        echo ("<span class='font-weight-bolder legenda'>&rarr; Solução:</span> ");
                        for ($cont = 1; $cont <= $numero; $cont++) {
                            if ($numero % $cont == 0) { #se for divisivel, ou seja se o resto for zero
                                echo ("<span class='text-success legenda font-weight-bolder shadow-sm'> " . $cont . "</span>" . " "); #a verde quando for divisivel
                                $tot += 1;
                            } else {
                                echo ("<span class='text-danger legenda font-weight-bolder shadow-sm'>" . $cont . "</span>" . " "); #vermelho quando nao for divisivel
                            }
                        }
                        echo ("<br/>");

                        if ($tot == 2) {
                            $resultado = "<span class='special-word3 font-weight-bolder shadow-sm'> Primo </span>";
                        } else {
                            $resultado = "<span class='special-word2 font-weight-bolder shadow-sm'> Não é Primo </span>";
                        }
                        echo ("<span class='font-weight-bold legenda'>&rarr; O número é :</span> <span class='legenda'>" . $resultado . "</span><br/>");
                        echo ("<span class='font-weight-bold legenda'>&rarr; Porquê <span class='text-warning font-weight-bolder'> ? </span> :</span> <span class='legenda text-warning font-weight-bolder shadow-sm'> O número " . $numero . " é divisivel " . $tot . " vezes</span> <br/>");



                        echo ("</div>");


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
        <i class="fas fa-link" style="color:white; margin-top: 11.7rem;"><a target="_blank" href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="about-primo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><span class="special-word font-weight-bolder">Guia do jogo de Primo ou não Primo</span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                   <p>
                   <span class="text-warning
                            font-weight-bolder shadow-sm">Parabéns amigos e amigas!</span> A partir do número que foi introduzido ficaste a saber se o número que escolheste é <span class="special-word3 font-weight-bolder shadow-sm">primo</span> ou <span class="special-word2 font-weight-bolder shadow-sm">não primo</span>. Quando é que um número é <span class="special-word3 font-weight-bolder shadow-sm">primo</span> e <span class="special-word2 font-weight-bolder shadow-sm">não primo</span> afinal? O número é <span class="special-word3 font-weight-bolder shadow-sm">primo</span> quando apenas é  <span class="text-warning
                            font-weight-bolder">divisivel por dois números apenas</span>. Simples não é? Não é simples? Hummm, <a href="prim_game.php" class="legenda">entao joguem outra vez amigos!</a>

                   </p>
                </div>

            </div>

        </div>

    </div>
</body>

</html>