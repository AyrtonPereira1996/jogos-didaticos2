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
    <title>Jogo de Multiplicação</title>
</head>

<body class="body-game">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <a href="main_menu.php"><i class="fas
                            fa-arrow-alt-circle-left fa-3x mr-3" style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>

                <a href="multi_game.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>

                <a href="#" data-toggle="modal" data-target="#about-divi">
                    <i class="fas fa-question-circle fa-3x mr-3" style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 class="my-4 game-title display-4">Jogo da Multiplicação de dois números</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card m-sm-auto text-center" style="width:43.75rem;">
                    <div class='card-body' style="font-size: 1.25rem;">
                        <?php
                        $num_multiplicando = isset($_GET['multiplicando']) ? $_GET['multiplicando'] : "O valor do multiplicando não foi informado";
                        $num_multiplicador = isset($_GET['multiplicando']) ? $_GET['multiplicando'] : "O valor do multiplicador não foi informado";
                        $num_produto = $num_multiplicando * $num_multiplicador;

                        echo (" <h4 class='card-title'>Parabéns repara abaixo na Operação de Multiplicação!</h4>
                            <p class='card-text'>Para o valor do <span class='special-word2
                            font-weight-bolder shadow-sm'>Multiplicando</span> desta operação escolheste o valor <span class='special-word2'> " . $num_multiplicando . "</span> e para o valor do <span class='special-word font-weight-bolder
                            shadow-sm'> Multiplicador </span> escolheste o valor <span class='special-word font-weight-bolder
                            shadow-sm'>" . $num_multiplicador . "</span>. Logo o <span class='special-word3
                            font-weight-bolder shadow-sm'>Produto</span> da Multiplicação é <span class='special-word3
                            font-weight-bolder shadow-sm'>" . $num_produto . "</span> ! </p>
                            ");

                        echo ("
                            <table class='table'>
                                    <tr>
                                        <th class='border-top-0'><span class='special-word2'>Multiplicando</span><br />&darr;</th>
                                        <th class='border-top-0'><span class='text-warning'>Sinal da Multiplicação</span><br />&darr;</th>
                                        <th class='border-top-0'><span class='special-word'>Multiplicador</span><br />&darr;</th>
                                        <th class='border-top-0'><span class='special-word3'>&nbsp;&nbsp;Produto</span><br />&nbsp;&nbsp;&nbsp;&darr;</th>
                                    </tr>
                                    <tr>
                                    <td class='border-top-0'><span class='special-word2'>" . $num_multiplicador . "</span></td>
                                    <td class='border-top-0 text-warning'style='font-size: 1.50rem;'> &times; </td>
                                    <td class='border-top-0'><span class='special-word'>" . $num_multiplicando . "</span></td>
                                    <td class='border-top-0'> = <span class='special-word3'>" . $num_produto . "</span></td>
                                    </tr>
               
                            </table>
                            <p><span class='font-weight-bolder'>Na forma vertical:</span><br> 
                            <span class='special-word2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $num_multiplicando . "&larr;Multiplicando&nbsp;</span><br/>
                            <span class='special-word' style='border-bottom: 1px solid #000;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='text-warning'>&times;</span>&nbsp;&nbsp;" . $num_multiplicador . "&larr;Multiplicador&nbsp;&nbsp;</span> <br/> 
                            <span class='special-word3'>&nbsp;&nbsp;&nbsp;&nbsp; " . $num_produto . "&larr;Produto&nbsp;&nbsp;&nbsp;</span></p>
                                       
                          ");



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

            <i class="fas fa-link" style="color:white; margin-top: 1.7rem;"><a
                    target="_blank"
                    href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
        </div>


    <div class="modal" tabindex="-1" role="dialog" id="about-divi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><span class="special-word2 font-weight-bolder">Guia
                                do Jogo da Multiplicação com
                                dois números</span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                <p><span class="text-warning
                            font-weight-bolder shadow-sm">Parabéns amigos e amigas!</span> A partir dos números que foram introduzidos foi possivel achar termos de uma operação simples de multiplicação. Repara bem, e não te esqueças o que é o termo <span class="special-word2
                            font-weight-bolder shadow-sm">multiplicando</span>, <span class="special-word font-weight-bolder
                            shadow-sm">multiplicador</span>, <span class="special-word3
                                font-weight-bolder shadow-sm">producto</span> de uma operação de multiplicação e representação na <span class="
                                font-weight-bolder shadow-sm"> forma vertical </span> e se te esqueceres é só <a href="multi_game.php" class="legenda"> jogar outra vez </a>. </p>
                </div>

            </div>

        </div>

    </div>


</body>

</html>