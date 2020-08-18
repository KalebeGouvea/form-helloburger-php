<?php session_start();
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagem.php';
header("Refresh:3; url=home.php");
?>

<?php
include 'header.php';
?>

    <div class="fundo">
        <div class="bloco">
            <div class="esquerda">
                <header>
                    <nav class="logo01">
                        <a class="logo" href="#">
                            <i class="fas fa-hamburger"></i>
                            <strong>Hello Burger</strong>
                        </a>
                    </nav>
                </header>

                <div class="conteudo">
                    <p class="msg1">Em casa?</p>
                    <p class="msg2">PEÇA DELIVERY!</p>
                    <img class="burger" src="img/burger.png" alt="Figura do hamburguer">
                </div>   

            </div>

            <div class="direita">
                <div class="vertical-center">
                    <div class="container">
                        <h1 class="msg3 text-center">Muito obrigado!</h1>
                        <h2 class="msg4 text-center">Você será redirecionado para a página principal em instantes.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>