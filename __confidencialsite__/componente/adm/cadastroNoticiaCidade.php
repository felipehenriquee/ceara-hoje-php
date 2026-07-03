


<section class="container">
    <div>
        <div class="container cadastroNoticia">
            <div >
                <h1>Cadastro de Notícia</h1>
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
                    
                    <form method="POST" action="processaNoticia"  enctype="multipart/form-data" id="form-noticia">
                            
                        <h2>Imagem da Notícia:</h2>
                        <div class="imagemInput">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Escolha uma imagem</label>
                                <input name="imagem" type="file" class="form-control-file" id="foto" required>
                                <img id="imagem"/>
                                
                            </div>

                            <div class="form-group" style="display:none">
                                    <label for="exampleInputEmail1">Link da imagem</label>
                                    <input id="teste" name="link-image" type="text" class="form-control" >        
                            </div>

                            <div class="form-group">
                                    <label for="exampleInputEmail1">Legenda</label>
                                    <input type="text" name="legenda" class="form-control" placeholder="Legenda Foto">
                                    
                            </div>
                        </div>



                        <h2>Dados da Notícia:</h2>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <input id="tituloNoticia" type="text" name="titulo" class="form-control" placeholder="Título da Notícia" required>
                                
                        </div>
                        <select name="inicial" class="form-control" required style="margin-bottom:20px">
                            <label for="exampleInputPassword1">Página Inicial</label>
                            <option  value="" selected disabled hidden>Página Inicial</option>
                            <option value=0>Não</option>
                            <option value=1>Sim</option>
                            
                        </select>

                        
                        <label for="exampleInputPassword1">Cidade</label>
                        <select name="cidade" class="form-control" required style="margin-bottom:20px">
                            <label for="exampleInputPassword1">Tipo da noticia</label>
                            <option value="" selected disabled hidden>Cidade</option>
                            <?php 
                                while($exibeTodasCidades = mysqli_fetch_assoc($resultTodasCidades)){
                                    
                                     echo "<option value='".$exibeTodasCidades['id']."' >".$exibeTodasCidades['nome']."</option>";
                                    
                                }
                                
                            ?>
                            
                            
                        </select>



                        <div class="form-group">
                                <label for="exampleInputEmail1">Resumo</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="resumo"></textarea>
                                
                        </div>
                    
                        <div class="form-group">
                                <label for="exampleInputEmail1">Autor</label>
                                <input type="text" name="autor" class="form-control"  placeholder="Autor" required>
                                
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Conteúdo</label>
                                <textarea name="conteudo" id="summernote"></textarea>
                                </textarea>
                        </div>

                        
                        <button type="button" onclick="uploadImage()" class="btn btn-primary botao-up">Enviar</button>
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