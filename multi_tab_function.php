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
    <title>Jogos de Tabuada</title>
</head>

<body class="body-game">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <a href="multip_game.php"><i class="fas fa-arrow-alt-circle-left fa-3x mr-3" style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                <a href="multi_tab.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                <a href="#" data-toggle="modal" data-target="#about-tab">
                    <i class="fas fa-question-circle fa-3x mr-3" style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="my-4 game-title display-4">Jogo da Tabuada</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card m-sm-auto text-center" style="width:43.75rem;">
                    <div class="card-body">
                        <?php
                        $num_multiplicando = isset($_GET['multiplicando']) ? $_GET['multiplicando'] : "O valor do multiplicador não foi informado";

                        echo ("<h4 class='card-title'>Parabéns, repara abaixo!</h4>
                                  <p class='card-text'>Abaixo está a tabuada do fator <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; Multiplicando &nbsp;</span> que escolheste que foi <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; " . $num_multiplicando . " &nbsp;</span>, o fator <span class='special-word font-weight-bolder shadow-sm'>&nbsp; Multiplicador &nbsp;</span> neste jogo vai até <span class='special-word'>&nbsp; 10 &nbsp;</span> depois de multiplicares o  <span class='special-word3'> &nbsp; Produto &nbsp;</span> surge... Vê : </p>
                                ");
                        for ($cont = 0; $cont <= 10; $cont++) {
                            $resultado = $num_multiplicando * $cont;
                            echo ("<div class='text-left' style='font-size: 1.15rem;'><span class='special-word2 font-weight-bolder shadow-sm'> &nbsp; " . $num_multiplicando . '&nbsp;  </span> &times; <span class="special-word font-weight-bolder shadow-sm">&nbsp; ' . $cont . '&nbsp; </span> = <span class="special-word3 font-weight-bolder shadow-sm">&nbsp; ' . $resultado . '&nbsp; &larr;Produto da Multiplicação</span> <br/></div>');
                        }




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

        <i class="fas fa-link" style="color:white; margin-top: 1.7rem;"><a target="_blank" href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
    </div>


    <div>
        <div class="modal" tabindex="-1" role="dialog" id="about-tab">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title"><span class="special-word2
                        font-weight-bolder">Guia do Jogo da Tabuada</span></h5>
                        <button class="close" type="button" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-justify">
                    <p>
                            <span class="text-warning
                            font-weight-bolder shadow-sm">&nbsp; Parabéns amigos e amigas! &nbsp;</span> A partir do valor do <span class='special-word2 font-weight-bolder shadow-sm'> multiplicando </span> que introduziste, foi possivel mostrar os termos que fazem parte da tabuada. E assim ficares a saber que a tabuada é algo que parte de operações de multiplicação simples. <a href="multi_tab.php" class="legenda">Queres jogar outra vez?</a>
                    </p>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>

</html>