


<section class="container">
    <div>
        <div class="container cadastroNoticia">
            <div >
                <h1>Cadastro de Evento</h1>
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
                    
                    <form method="POST" action="processaEvento"  enctype="multipart/form-data" id="form-noticia">
                            
                        <h2>Imagem do Evento:</h2>
                        <div class="imagemInput">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Escolha uma imagem</label>
                                <input name="imagem" type="file" class="form-control-file" id="foto">
                                <img id="imagem"/>
                                
                            </div>

                            <div class="form-group" style="display:none">
                                    <label for="exampleInputEmail1">Link da imagem</label>
                                    <input id="teste" name="link-image" type="text" class="form-control" >        
                            </div>

                            
                        </div>



                        <h2>Dados do Evento:</h2>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Título do evento</label>
                                <input id="tituloEvento" type="text" name="titulo" class="form-control" required placeholder="Título do Evento" required>
                                
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Quem está organizando o evento?</label>
                            <input type="text" name="organizador" class="form-control" placeholder="Quem está organizando o evento?">
                                    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Onde acontecerá o evento?</label>
                            <textarea type="text" name="localizacao" class="form-control" placeholder="Endereço do evento"></textarea>
                                    
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resumo</label>
                            <textarea type="text" name="resumo" class="form-control" placeholder="Conte um resumo sobre o evento"></textarea>
                                    
                        </div>
                        <label for="exampleInputPassword1">Em qual cidade acontecerá o evento?</label>
                        <select name="cidade" class="form-control" required style="margin-bottom:20px">
                            
                            <option value="" selected disabled hidden>Cidade</option>
                            <option value="31">Acaraú</option>
                            <option value="47">Acopiara</option>
                            <option value="8">Aquiraz</option>
                            <option value="14">Aracati</option>
                            <option value="23">Barbalha</option>
                            <option value="58">Baturité</option>
                            <option value="30">Camocim</option>
                            <option value="28">Canindé</option>
                            <option value="3">Caucaia</option>
                            <option value="9">Crato</option>
                            <option value="6">Eusébio</option> 
                            <option value="1">Fortaleza</option>
                            <option value="51">Guaraciaba do Norte</option>
                            <option value="171">Guaramiranga</option>
                            <option value="10" >Horizonte</option>
                            <option value="33">Icó</option>
                            <option value="11">Iguatu</option> 
                            <option value="12" >Itapipoca</option>
                            <option value="53">Ipu</option>
                            <option value="70">Ipueiras</option>
                            <option value="64">Jijoca de Jericoacoara</option>
                            <option value="4" >Juazeiro do Norte</option>
                            <option value="19">Limoeiro do Norte</option>
                            <option value="2">Maracanaú</option>
                            <option value="13">Maranguape</option> 
                            <option value="54">Missão Velha</option>
                            <option value="16">Pacajus</option>
                            <option value="40">Paracuru</option>
                            <option value="17">Quixadá</option>
                            <option value="21">Quixeramobim</option>
                            <option value="20">Russas</option>
                            <option value="38">São Benedito</option>
                            <option value="7">São Gonçalo</option> 
                            <option value="59">Senador Pompeu</option>
                            <option value="5">Sobral</option>
                            <option value="35">Tauá</option>
                            <option value="15">Tianguá</option>
                            <option value="42">Ubajara</option>
                            <option value="45">Viçosa</option>  
                        </select>
                        <div class="form-group">
                            <label for="exampleInputNome1">Quando acontecerá o evento?</label>
                            <input name="dataEvento" type="date" class="form-control" id="exampleInputNome1" placeholder="QUando acontecerá o evento">
                            
                        </div>

                        <div class="form-group">
                                <label for="exampleInputEmail1">Qual o preço da entrada para o evento?</label>
                                <input type="text" name="preco" class="form-control"  placeholder="Preço da entrada">
                                
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Conteúdo</label>
                                <textarea name="conteudo" id="summernote" required></textarea>
                                </textarea>
                        </div>

                        
                        <button type="button" onclick="uploadImageEvento()" class="btn btn-primary botao-up">Enviar</button>
                        <div class="caixa-confirma-aparece desativado" id="caixa-confirma">
                            <div class="container quadro-escolha" style="width:320px">
                                <img id='img-processando' class='img-processando ativo' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/processando.gif?alt=media&token=c025e6f2-b548-4309-9779-0083b785db58"/>
                                <img id='img-concluido' class='img-concluido desativado' src="https://firebasestorage.googleapis.com/v0/b/jornal-porto-do-pecem.appspot.com/o/source.gif?alt=media&token=092cd258-d37c-4b4d-a22a-ab0ff15ee0d6"/>
                                <button id="btn-confirma" type="submit" class="btn btn-primary botao-enviar desativado">Confirmar</button>
                            </div>
                            
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>