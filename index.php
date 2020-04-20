<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="sortcut icon" href="_icons/icone.ico" type="image/x-icon" />
        <link rel="stylesheet" href="_css/bootstrap.css">
        <link rel="stylesheet" href="_css/style.css">
        <link rel="stylesheet" href="_fontawesome/css/all.css">
        <script src="_js/jquery.js"></script>
        <script src="_js/bootstrap.js"></script>
        <script src="_js/script.js"></script>
        <style>
        .icon:hover{
            color: aquamarine;
        }

        .container a{
           font-size: 1.6em;
        }

        footer a.link-a{
            color:rgb(0, 139, 93);
            font-weight: bold;
        }

        footer a.link-b{
            color:crimson;
            font-weight: bold;
        }

        footer a:hover{
            border-bottom: solid 1px;
        }

        .container a.link-c{
            color: #008b8b;
        }

        .container a.link-c:hover{
            border-bottom: solid 1px;
        }

      
        </style>
        <title>Página inicial</title>
    </head>
    <body style="overflow-x: hidden;">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <ul class="navbar-nav ml-auto">
              
                <li class="icon"> <a href="#" data-toggle="modal" data-target="#about-us"> <i
                            class="fas fa-question-circle fa-3x mr-3 "
                            style="color:white;"></i></a></li>

            </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="my-4 display-3" style="text-shadow: -0.5px -0.5px
                        2.5px white; letter-spacing: 8px; font-family:
                        cagliostro;"><span class="special-word">J</span>ogo<span
                            class="special-word4">s</span> <span
                            class="special-word2">D</span>id<span
                            class="special-word3">á</span>tico<span
                            class="special-word4">s</span></h1>
                    <img src="_imgs/Avatars-02.png" alt="salut-avatar">
                    <a href="main_menu.php" class="special-word2 link-c text-decoration-none">&rarr;
                        Entra para Jogar
                        &larr;</a>

                </div>
            </div>
        </div><hr style="width: 600px;" class="mb-1">

        <div class="row p-0">
            <div class="col-12 text-center">
              
                    <footer>
                        <p style="font-size: 1.2em;" class="p-0">Desenvolvido com <i class="fas fa-heart"></i> por <a class="text-decoration-none link-a" target="_blank" href="https://web.facebook.com/ayrton96">Ayrton Pereira</a> | E-mail: <a class="text-decoration-none link-b" href="mailto:ayrton_pereira1996@hotmail.com"> ayrton_pereira1996@hotmail.com</a></p>
                    </footer>


           
            </div>
        </div>


        <div id="about-us" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><span class="special-word3
                            font-weight-bolder">Sobre a Plataforma de Jogos Didáticos</span></h5>
                        <button type="button" class="close"
                            data-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body text-justify">
                        <p><span class="text-warning
                            font-weight-bolder shadow-sm">Bem-vindo Amigo!</span> A plataforma de jogos didácticos consiste numa plataforma de jogos onde poderás explorar os jogos de maneira criativa com os teus professores, pais e até mesmo com os teus colegas e amigos.</p> <p>A tua plataforma pode ser utilizada como uma ferramenta direccionada para fins didácticos através de jogos simples que tem como objectivo ensinar-te algo no fim de cada jogo. Para que entendas bem, seria bom que explorasses com alguém mais velho. Tchau vemo-nos por ai! </p>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
