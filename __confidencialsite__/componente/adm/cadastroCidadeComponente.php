<section class="container">
    <div>
        <div class="container">
            <div >
                <h3>Cadastro de Cidade</h3>
                <?php 
                    if(isset($_SESSION['cadastro_sucesso'])):
                        
                    
                ?>
                
                    <div class="notification is-success">
                        <p>Cadastro feito com Sucesso</p>
                    </div>
                
                <?php 
                    endif;
                    unset($_SESSION['cadastro_sucesso']);

                   
                ?>
                
                <div class="container">
                    <form action="cadastrarCidade" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Escolha uma imagem</label>
                            <input name="imagem" type="file" class="form-control-file" id="foto" required>
                            <img id="imagem"/>
                                
                        </div>

                        <div class="form-group" >
                                
                                <input id="teste" name="link-image" type="hidden" class="form-control" >        
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputNome1">Nome da Cidade</label>
                            <input name="nome" type="text" class="form-control" id="nomeCidade" placeholder="Nome da Cidade">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">Apelido</label>
                            <input name="apelido" type="text" class="form-control" id="nomeCidade" placeholder="Nome da Cidade">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">Mesorregiao</label>
                            <input name="mesorregiao" type="text" class="form-control" id="nomeCidade" placeholder="Nome da Cidade">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Microrregiao</label>
                            <input name="microrregiao" type="text" class="form-control" id="nomeCidade" placeholder="Nome da Cidade">
                            
                        </div>
                        

                        <div class="form-group">
                        
                                <textarea name="resumo" id="summernote"></textarea>
                                </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Municípios Limitrófes</label>
                            <textarea name="limite" type="text" class="form-control" id="exampleInputNome1" placeholder="Municípios limitrófes"></textarea>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">Área em Km</label>
                            <input name="area" type="number" step="any" class="form-control" id="exampleInputNome1" placeholder="Área em Km">
                            
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputNome1">Colocação PIB</label>
                            <input name="pib" type="number" class="form-control" id="exampleInputNome1" placeholder="Colocação PIB">
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">População</label>
                            <input name="populacao" type="number" class="form-control" id="exampleInputNome1"  placeholder="População">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNome1">Aniversário da Cidade</label>
                            <input name="aniversario" type="date" class="form-control" id="exampleInputNome1" placeholder="Aniversário da Cidade">
                            
                        </div>
                        <button type="button" onclick="uploadImageCidade()" class="btn btn-primary botao-up">Upload</button>
                        <div class="caixa-confirma-aparece desativado" id="caixa-confirma">
                            <div class="container quadro-escolha" style="width:320px">
                                <img id='img-processando' class='img-processando ativo' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/processando.gif?alt=media&token=c025e6f2-b548-4309-9779-0083b785db58"/>
                                <img id='img-concluido' class='img-concluido desativado' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/source.gif?alt=media&token=092cd258-d37c-4b4d-a22a-ab0ff15ee0d6"/>
                                <button id="btn-confirma" type="submit" class="btn btn-primary botao-enviar  desativado">Confirmar</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>