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
                        <a href="main_menu.php"><i class="fas fa-arrow-alt-circle-left fa-3x mr-3"
                            style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                            <a href="par_impar_game.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                            <a href="#" data-toggle="modal" data-target="#about-par-impar">
                                    <i
                                        class="fas fa-question-circle fa-3x mr-3"
                                        style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
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
                                  <h4 class="card-title">Bem-vindo ao Jogo do Par ou Impar!</h4>
                                  <p class="card-text">Estás prestes a descobrir o que são <span class="special-word font-weight-bolder shadow-sm">&nbsp; números pares &nbsp;</span> e <span class="special-word2 font-weight-bolder shadow-sm">&nbsp; números impares &nbsp;</span>! Repara abaixo e escolhe um valor para saberes se o número que escolheste é <span class="special-word2 font-weight-bolder shadow-sm">&nbsp; impar &nbsp;</span> ou <span class="special-word font-weight-bolder shadow-sm">&nbsp; par &nbsp;</span>.</p>

                                  <form action="par_impar_function.php" method="get">
                                      <div class="form-row">
                                    <div class="col text-left">
                                    <label for="txtnumero"><span class="font-weight-bold legenda">Escolhe um número : </span></label>
                                        <input required type="number" min="0" placeholder="Introduz um número a tua escolha..." name="numero" id="txtnumero" class="form-control">
                                    </div>
                                </div>
                                    <div class="form-row my-3">
                                        <button class="btn btn-warning m-auto
                                        w-25" type="submit"><span style="font-size: 1rem;"><i class="fas fa-dice-two"> Jogar </i></span> </button>
                                    </div>

                                  </form>
                            </div>
                               
                            </div>
                        </div>
                    </div>
                   
                    <div class="float-right mr-n5 d-none d-lg-block">
                            <img style="margin-top: -15rem" src="_imgs/Avatars-05.png"
                                alt="">
                        </div>
        </div>
          
        <div class="ml-2 mt-n5">

                <i class="fas fa-link" style="color:white; margin-top: 11.9rem;"><a
                        target="_blank"
                        href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
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
                        <p><span class="text-warning
                            font-weight-bolder shadow-sm">Olá amigos e amigas!</span> Sejam bem-vindos ao jogo do <span class="special-word font-weight-bolder shadow-sm">&nbsp; número  Par &nbsp;</span> ou <span class="special-word2 font-weight-bolder shadow-sm">&nbsp; número Impar &nbsp;</span>. Tens
                            dúvidas em relação aos <span class="text-warning
                            font-weight-bolder">números</span> que são <span class="special-word font-weight-bolder shadow-sm">&nbsp; Pares &nbsp;</span> e os  que são <span class="special-word2 font-weight-bolder shadow-sm">Impares</span>? Neste jogo poderás escolher um valor do teu imaginário e antes de clicar para jogar tenta adivinhar, se é um <span class="special-word font-weight-bolder shadow-sm">número Par</span> ou um <span class="special-word2 font-weight-bolder shadow-sm">número Impar</span>. Exprimenta!</p>
                </div>

            </div>

        </div>

    </div>
</div>

    </body>
</html>