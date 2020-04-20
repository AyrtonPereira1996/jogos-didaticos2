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
        <title>Jogo da Divisão</title>
    </head>
    <body class="body-game">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12">
                    <a href="main_menu.php"><i class="fas
                            fa-arrow-alt-circle-left fa-3x mr-3"
                            style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                    <a href="divi_game.php"><i class="fas fa-redo fa-3x mr-3"
                            style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                    <a href="#" data-toggle="modal" data-target="#about-divi">
                        <i
                            class="fas fa-question-circle fa-3x mr-3"
                            style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="my-4 game-title display-3">Jogo da Divisão</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card m-sm-auto text-center" style="width:43.75rem;">
                    <div class="card-body">
                        <h4 class="card-title">Bem-vindo ao Jogo da Divisão!</h4>
                        <p class="card-text">Repara
                            abaixo e descobre quais os
                            componentes de uma operação de divisão. Escolhe os
                            números que serão o <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; Dividendo&nbsp; </span> e o <span class="special-word font-weight-bolder shadow-sm">&nbsp; Divisor &nbsp;</span>  da tua
                            Operação de Divisão para puderes achar o <span class="special-word3 font-weight-bolder shadow-sm">&nbsp; Quociente &nbsp;</span>
                            da Operação! </p>

                        <form action="divi_function.php" method="get">
                            <div class="form-row">
                                <div class="col">
                                    <span class="special-word2 legenda font-weight-bolder shadow-sm">Dividendo</span><br/>
                                    <span class='special-word2 legenda'> &darr;</span><br>
                                        <input required type="number" min="1" placeholder="Valor A"
                                            name="dividendo"
                                            class="form-control" />
                                    </div><br>
                                    <div class="col">
                                        <br><br>
                                        <h2>:</h2>

                                    </div>
                                    <div class="col">
                                        <span class="special-word legenda font-weight-bolder shadow-sm">Divisor</span><br
                                            /><span class="special-word legenda">&darr;</span><br>
                                        <input required type="number" min="1" placeholder="Valor B"
                                            name="divisor" class="form-control"
                                            />
                                    </div>

                                    <div class="col">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="special-word3 legenda font-weight-bolder shadow-sm">Quociente
                                        </span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="special-word3 legenda">&darr;</span>
                                        <h2>= <span
                                                class="special-word3">&nbsp;&nbsp;?
                                            </span></h2>


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

                <i class="fas fa-link" style="color:white; margin-top: 7.8rem;"><a
                        target="_blank"
                        href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
            </div>



        <div class="modal" tabindex="-1" role="dialog" id="about-divi">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="text-warning
                            font-weight-bolder">Guia do Jogo da Divisão</span></h5>
                        <button class="close" type="button"
                            data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-justify">
                            <p><span class="text-warning
                                font-weight-bolder shadow-sm">Olá amigos e amigas!</span> Sejam bem-vindos ao jogo da divisão. Tens
                                dúvidas em relação aos termos de uma operação de
                                divisão? Neste jogo tens um exemplo de uma simples
                                operação de divisão onde tens dois termos o
                                <span class="special-word2
                                font-weight-bolder shadow-sm">&nbsp; dividendo &nbsp;</span> e o <span class="special-word font-weight-bolder
                                shadow-sm">&nbsp; divisor &nbsp;</span>. Sendo assim é o <span class="special-word2
                                font-weight-bolder shadow-sm">&nbsp; dividendo &nbsp;</span> que será dividido em partes iguais e o <span class="special-word font-weight-bolder
                                shadow-sm">&nbsp; divisor &nbsp;</span> será o número que que indica quantas vezes será dividido, o resultado desta operação se chama <span class="special-word3 font-weight-bolder shadow-sm">&nbsp; quociente &nbsp;</span>da operação. Experimenta!</p>
                    </div>

                </div>

            </div>

        </div>


    </body>
</html>