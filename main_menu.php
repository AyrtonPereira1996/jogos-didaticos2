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
        <title>Menu Principal</title>
    </head>
    <body style="overflow-x: hidden;">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a href="index.php"><i class="fas fa-home fa-3x mr-3
                                icon"
                                style="color:white;"></i></a>
                    </li>
                    <li> <a href="#" data-toggle="modal"
                            data-target="#about-page">
                            <i
                                class="fas fa-question-circle fa-3x mr-3"
                                style="color:white;"></i></a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="display-1"><span style="color:chartreuse;">M</span><span
                            style="color:chocolate;">e</span><span
                            style="color:#8a2be2;">n</span><span
                            style="color:aquamarine;">u</span></h1>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-sm-6 mb-3">
                    <div class="card border-0" id="content-a" style="height:12rem;">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Jogos da
                                Multiplicação</h4>
                            <a href="multip_game.php" style="font-size: 29px;
                                font-size: 1.8rem; text-decoration: underline;"><i
                                    class="far fa-play-circle"></i> &rarr;Entra
                                e
                                joga!&larr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card border-0 bg-warning" id="content-b"
                        style="height:
                        12rem;">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Jogo
                                da Divisão</h4>
                            <a href="divi_game.php" style="font-size: 29px;
                                font-size: 1.8rem; text-decoration: underline;"><i
                                    class="far fa-play-circle"></i> &rarr;Entra
                                e
                                joga!&larr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card border-0" id="content-c" style="height:
                        12rem;">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Jogo do Par
                                ou Impar</h4>
                            <a href="par_impar_game.php" style="font-size:
                                29px; font-size: 1.8rem; text-decoration:
                                underline;"><i class="far fa-play-circle"></i>
                                &rarr;Entra e joga!&larr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <div class="card border-0" id="content-d" style="height:
                        12rem;">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Jogo do
                                Primo ou não primo</h4>
                            <a href="prim_game.php" style="font-size: 29px;
                                font-size: 1.8rem; text-decoration: underline;"><i
                                    class="far fa-play-circle"></i> &rarr;Entra
                                e joga!&larr;</a>
                        </div>
                    </div>
                </div>

            </div>


        </div>

        <div class="modal" id="about-page" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="special-word2
                            font-weight-bolder">Menu da Plataforma de Jogos</span></h5>
                        <button type="button" class="close"
                            data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>

                    <div class="modal-body text-justify">
                        <p><span class="text-warning
                            font-weight-bolder shadow-sm">Boa, a diversão vai começar!</span> Entraste no <span class="special-word2
                            font-weight-bolder shadow-sm">menu da plataforma</span>, repara abaixo, cada quadrado representa um <span class="special-word
                            font-weight-bolder shadow-sm">jogo</span> na qual poderás explorar. Atreve-te a explorar, Amigo!!</p>
                    </div>
                </div>
            </div>

        </div>
  

    </body>
</html>