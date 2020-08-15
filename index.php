<?php session_start();
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagem.php';
?>

<?php
include 'header.php';
?>
    <!-- Modal -->
    <div class="modal fade" id="validaModal" tabindex="-1" aria-labelledby="validaModalLabel" aria-hidden="true">
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
                <h1 class="t1">Registre-se</h1>

                <form action= <?php echo htmlspecialchars("processa.php")?> method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">NOME</label>
                            <input type="text" class="form-control caixa" id="inputNome" name="nome" placeholder="Digite o seu nome" value="<?php echo empty($_SESSION['nome']) ? '' : $_SESSION['nome'];?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSobrenome">SOBRENOME</label>
                            <input type="text" class="form-control caixa" id="inputSobrenome" name="snome" placeholder="Digite o seu sobrenome" value="<?php echo empty($_SESSION['snome']) ? '' : $_SESSION['snome'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail">EMAIL</label>
                        <input type="text" class="form-control caixa" id="inputEmail" name="email" placeholder="Digite o seu e-mail" value="<?php echo empty($_SESSION['email']) ? '' : $_SESSION['email'];?>">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSenha">SENHA</label>
                            <input type="password" class="form-control caixa" id="inputSenha" name="pwd" placeholder="Digite uma senha" value="<?php echo empty($_SESSION['pwd']) ? '' : $_SESSION['pwd'];?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTelefone">TELEFONE</label>
                            <input type="tel" class="form-control caixa" id="inputTelefone" name="fone" placeholder="(99) 99999-9999" maxlength="15" data-mask="(99) 99999-9999" value="<?php echo empty($_SESSION['fone']) ? '' : $_SESSION['fone'];?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputData">DATA DE NASCIMENTO</label>
                            <input type="tel" class="form-control caixa" id="inputData" name="bday" placeholder="dd/mm/aaaa" data-mask="99/99/9999" value="<?php echo empty($_SESSION['bday']) ? '' : $_SESSION['bday'];?>">
                        </div>
                        <div class="form-group col-md-6">
                            <legend class="col-form-label pt-0">SEXO</legend>

                            <div class="radio-group">
                                <label class="radio">
                                    <input type="radio" value="masculino" name="sex" <?php echo (isset($_SESSION['sex']) && $_SESSION['sex']=='masculino') ? 'checked' : null;?>>Masculino
                                    <span></span>
                                </label>
                                <label class="radio">
                                    <input type="radio" value="feminino" name="sex" <?php echo (isset($_SESSION['sex']) && $_SESSION['sex']=='feminino') ? 'checked' : null;?>>Feminino
                                    <span></span>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEndereco">ENDEREÇO</label>
                        <input type="text" class="form-control caixa" id="inputEndereco" name="end" placeholder="Digite o seu endereço" value="<?php echo empty($_SESSION['end']) ? '' : $_SESSION['end'];?>">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEstado">ESTADO</label>
                            <select id="inputEstado" name="estado" class="form-control caixa" value="<?php echo empty($_SESSION['estado']) ? '' : $_SESSION['estado'];?>"></select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCidade">CIDADE</label>
                            <select id="inputCidade" name="cidade" class="form-control caixa" value="<?php echo empty($_SESSION['cidade']) ? '' : $_SESSION['cidade'];?>"></select>
                        </div>
                    </div>
                    <script language="JavaScript" type="text/javascript" charset="utf-8">
                        new dgCidadesEstados({
                          cidade: document.getElementById('inputCidade'),
                          estado: document.getElementById('inputEstado'),
                          estadoVal: 'Selecione um estado',
                          cidadeVal: 'Selecione uma cidade'
                        })
                      </script>

                    <div class="form-group">
                        <label class="checkofertas">Aceito receber ofertas por e-mail
                            <input type="hidden" value="Nao" name="ofertas" <?php echo (isset($_SESSION['ofertas']) && $_SESSION['ofertas']=='Nao') ? 'checked' : null;?>>
                            <input type="checkbox" value="Sim" name="ofertas" <?php echo (isset($_SESSION['ofertas']) && $_SESSION['ofertas']=='Sim') ? 'checked' : null;?>>
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-laranja">CONFIRMAR</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php
include 'footer.php';
?>