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
                        <a href="multip_game.php"><i class="fas fa-arrow-alt-circle-left fa-3x mr-3"
                            style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                            <a href="multi_tab.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>
                            <a href="#" data-toggle="modal" data-target="#about-tab">
                                    <i
                                        class="fas fa-question-circle fa-3x mr-3"
                                        style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
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
                                  <h4 class="card-title">Bem-vindo ao Jogo da Tabuada!</h4>
                                  <p class="card-text">Irás descobrir os elementos da multiplicação dentro da tabuada, repara abaixo podes escolher um valor para o <span class="special-word2 font-weight-bolder shadow-sm">&nbsp; Multiplicando </span> da operação. O <span class="special-word2 font-weight-bolder shadow-sm"> Multiplicando </span> irá se multiplicar com o <span class="special-word font-weight-bolder shadow-sm">Multiplicador</span>. Vê : </p>
                                  <form action="multi_tab_function.php" method="get">

                                    <div class="form-row">
                                        <div class="col text-left">
                                            <p><span class="special-word2 font-weight-bolder shadow-sm">&nbsp; Multiplicando &nbsp;</span><span class="special-word4 font-weight-bolder shadow-sm">&nbsp; &times; &nbsp;</span><span class="special-word font-weight-bolder shadow-sm">&nbsp; Multiplicador &nbsp;</span> = <span class="special-word3 font-weight-bolder shadow-sm">&nbsp; Producto &nbsp;</span></p>
                                            <label for="id-multiplicando" ><span class="font-weight-bold legenda">Valor do <span class="special-word2 font-weight-bolder shadow-sm">&nbsp;Multiplicando</span>: </span></label>
                                            <input required class="form-control" type="number" name="multiplicando" id="id-multiplicando"  min="0" placeholder="Introduz um número a tua escolha...">
                                        </div>
                                    </div>

                                    <div class="form-row my-3">
                                        <div class="col">
                                            <button class="btn btn-warning m-auto
                                            w-25" type="submit"><span style="font-size: 1rem;"><i class="fas fa-dice-two"> Jogar </i></span> </button>
                                            </div>
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

                        <i class="fas fa-link" style="color:white; margin-top: 7.9rem;"><a
                                target="_blank"
                                href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
                    </div>
                          
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
                            font-weight-bolder shadow-sm">&nbsp; Olá amigos e amigas! &nbsp;</span> Sejam bem-vindos ao jogo da tabuada. Tens dúvidas em relação aos termos presentes nos valores que compõem a tabuada? Neste jogo poderás escolher um valor para o <span class="special-word2
                            font-weight-bolder shadow-sm"> factor multiplicando &nbsp;</span> e com base nesse número irá retornar a tabuada onde o <span class="special-word font-weight-bolder shadow-sm"> &nbsp;multiplicando &nbsp;</span>vai de <span class="special-word font-weight-bolder"> 0 </span> a <span class="special-word font-weight-bolder"> 10 </span>. Experimenta! 
                    </p>
                </div>

            </div>

        </div>

    </div>


    </body>
</html>