<?php session_start();
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagem.php';
?>

<?php
include 'header.php';
?>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="validaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="validaModalLabel">Campos incorretos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <?php
                echo $_SESSION['msg'];
            ?>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Fim do Modal -->

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
                    <div class="container login">
                        <h1 class="t1 text-center">Login</h1>
                        <form action= <?php echo htmlspecialchars("login.php")?> method="post">
                            <div class="form-group">
                                <input type="text" class="form-control caixa" id="inputEmail" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control caixa" id="inputSenha" name="pwd" placeholder="Senha">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-laranja">ENTRAR</button>
                            </div>
                            <div class="text-center">
                                <a class="btn btn-primary btn-cinza" href="cadastro.php">CRIAR UMA CONTA</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>