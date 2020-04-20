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
        <script src="_js/bootstrap.js"></script>
        <link rel="sortcut icon" href="_icons/icone.ico" type="image/x-icon" />
        <title>Jogos da Multiplicação</title>
    </head>
    <body style="overflow: hidden;">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a href="main_menu.php"><i class="fas
                                fa-arrow-alt-circle-left fa-3x mr-3 icon"
                                style="color:white;"></i></a>
                    </li>
                    <li> <a href="#" data-toggle="modal"
                            data-target="#about-multi">
                            <i
                                class="fas fa-question-circle fa-3x mr-3 icon"
                                style="color:white;"></i></a></li>
                </ul>
            </div>
        </nav>


        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1>BEM VINDO AO JOGO DA MULTIPLICAÇÃO!</h1>
                    <h2>ESCOLHE O JOGO RELACIONADO COM A
                        MULTIPLICAÇÃO</h2><hr style="width: 50rem;">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 mb-3">
                    <div class="card border-0 bg-warning" id="content-b"
                        style="height:
                        10rem;">
                        <div class="card-body text-wrap">
                            <h4 class="card-title font-weight-bold">Jogo da
                                Multiplicação de dois números</h4>
                            <a href="multi_game.php" style="font-size:
                                29px;
                                font-size: 1.8rem; text-decoration:
                                underline;"><i
                                    class="far fa-play-circle"></i>
                                &rarr;Entra
                                e joga!&larr;</a>
                        </div>

                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card border-0" id="content-d" style="height:
                        10rem;">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Jogo da
                                Tabuada</h4>
                            <a href="multi_tab.php" style="font-size: 29px;
                                font-size: 1.8rem; text-decoration:
                                underline;"><i
                                    class="far fa-play-circle"></i>
                                &rarr;Entra
                                e joga!&larr;</a>
                        </div>

                    </div>
                </div>
                <div class="m-auto"><img src="_imgs/Avatars-04.png" alt=""></div>

            </div>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="about-multi">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5><span class="special-word2 font-weight-bolder">Guia dos Jogos da Multiplicação</span></h5>
                        <button type="button" class="close"
                            data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-justify">
                        <p>
                            <span class="text-warning
                            font-weight-bolder shadow-sm">Bem-Vindo amigos!</span> Acabaste de entrar no menu de jogos
                            relacionados com a multiplicação. Repara abaixo,
                            poderás escolher entre as opções disponíveis o <span class="special-word font-weight-bolder shadow-sm legenda">&nbsp; jogo &nbsp;</span>
                                que pretendes jogar.

                    
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>