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
                            fa-arrow-alt-circle-left fa-3x mr-3" style="color:white;" id="icon-a" onmouseover="hoverIcona()" onmouseout="outIcona()"></i></a>
                <a href="divi_game.php"><i class="fas fa-redo fa-3x mr-3" style="color:white;" id="icon-b" onmouseover="hoverIconb()" onmouseout="outIconb()"></i></a>

                <a href="#" data-toggle="modal" data-target="#about-divi">
                    <i class="fas fa-question-circle fa-3x mr-3" style="color:white;" id="icon-c" onmouseover="hoverIconc()" onmouseout="outIconc()"></i></a></li>
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

                        <?php
                        $num_dividendo = isset($_GET["dividendo"]) ? $_GET["dividendo"] : "[O valor do dividendo não foi informado]";
                        $num_divisor = isset($_GET["divisor"]) ? $_GET["divisor"] : "[O valor do divisor não foi informado]";
                        $num_quociente = $num_dividendo / $num_divisor;
                        $num_resto = $num_dividendo % $num_divisor;


                        echo ("<h4 class='card-title'>Parabéns repara abaixo na Operação de Divisão!</h4>
                      <p class='card-text'>Para o valor do <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; Dividendo &nbsp;</span> desta operação escolheste o valor <span class='special-word2 font-weight-bolder shadow-sm'>&nbsp; " . $num_dividendo . "&nbsp; </span> e para o valor do <span class='special-word font-weight-bolder shadow-sm'>&nbsp; Divisor &nbsp;</span> escolheste o valor <span class='special-word font-weight-bolder shadow-sm'>&nbsp; " . $num_divisor . "&nbsp; </span>. Logo o teu <span class='special-word3 font-weight-bolder shadow-sm'>&nbsp; Quociente &nbsp;</span> ou teu Resultado é <span class='special-word3 font-weight-bolder shadow-sm'>&nbsp; " . $num_quociente . "&nbsp; </span> ! </p>");

                        echo ("
                        <table class='table'>
                                <tr>
                                    <th class='border-top-0'><span class='special-word2 legenda'>Dividendo</span><br /><span class='special-word2 legend'><span class='special-word2 legenda'>&darr;</span></span></th>
                                    <th class='border-top-0'><span class='text-warning legenda'>Sinal da divisão</span><br /><span class='text-warning legenda'>&darr;</span></th>
                                    <th class='border-top-0's><span class='special-word legenda'>Divisor</span><br /><span class='special-word legenda'>&darr;</span></th>
                                    <th class='border-top-0'><span class='special-word3 legenda'>&nbsp;&nbsp;Quociente </span><br />&nbsp;&nbsp;&nbsp;<span class='special-word3 legenda'>&darr;</span></th>
                                </tr>
                                <tr>
                                <td class='border-top-0'><span class='special-word2 legenda'>" . $num_dividendo . "</span></td>
                                <td class='border-top-0 text-warning legenda'> : </td>
                                <td class='border-top-0'><span class='special-word legenda'>" . $num_divisor . "</span></td>
                                <td class='border-top-0'> = <span class='special-word3 legenda'>" . $num_quociente . "</span></td>
                                </tr>
           
                        </table>
                        <p><span class='font-weight-bolder legenda'>Na forma vertical:</span><br> <span class='special-word2'>" . $num_dividendo . "&nbsp;</span>
                                    <span class='special-word' style='border-left: 1px solid #000; border-bottom: 1px solid #000; width:30px;'>&nbsp;" . $num_divisor . "&nbsp;&nbsp;</span> <br/> 
                                    <span class='text-warning'>&nbsp;&nbsp; " . $num_resto . "&nbsp;&nbsp;&nbsp;</span>
                                    <span class='special-word3'>" . $num_quociente . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> </p>
                       
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

        <i class="fas fa-link" style="color:white; margin-top: 2.7rem;"><a target="_blank" href="https://pixabay.com/users/stux-12364/"> Imagem de Stux</a></i>
    </div>


    <div class="modal" tabindex="-1" role="dialog" id="about-divi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"><span class="text-warning
                            font-weight-bolder">Guia do Jogo da Divisão</span></h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body text-justify">
                    <p><span class="text-warning
                            font-weight-bolder shadow-sm">Parabéns amigos e amigas!</span> A partir dos números que foram introduzidos foi possivel achar os termos de uma operação simples de divisão. Repara bem, e não te esqueças o que é o  <span class="special-word2
                                font-weight-bolder shadow-sm">&nbsp; dividendo &nbsp;</span>, <span class="special-word font-weight-bolder
                                shadow-sm">&nbsp; divisor &nbsp;</span>, <span class="special-word3 font-weight-bolder shadow-sm"> &nbsp; quociente &nbsp; </span> e o <span class="text-warning font-weight-bolder shadow-sm">&nbsp; resto &nbsp;</span> de uma operação de divisão e principlamente a representação dela na <span class="font-weight-bolder shadow-sm"> forma vertical</span>. <a href="divi_game.php" class="legenda">Joga outra vez!</a>
                    </p>
                </div>

            </div>

        </div>

    </div>


</body>

</html>