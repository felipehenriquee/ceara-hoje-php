<section class="container">
    <div>
        <div class="container">
            <div >
                <h3>Editar a cidade <?php echo $exibe['nome'] ?></h3>
                <?php 
                    if(isset($_SESSION['cadastro_sucesso'])):
                        
                    
                ?>
                
                    <div class="notification is-success">
                        <p>Edição feita com Sucesso</p>
                    </div>
                
                <?php 
                    endif;
                    unset($_SESSION['cadastro_sucesso']);

                   
                ?>
                
                <div class="container">
                    <form action="/updateCidade" method="POST" accept-charset="UTF-8">
                        <div class="form-group">
                            <label for="exampleInputNome1">Nome da Cidade</label>
                            <input name="nome" type="text" class="form-control" id="exampleInputNome1"  value="<?php echo $exibe['nome'] ?>">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Nome sem acentos</label>
                            <input name="nomea" type="text" class="form-control" id="exampleInputNome1"  value="<?php echo $exibe['nomecru'] ?>">
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Apelido da Cidade</label>
                            <input name="apelido" type="text" class="form-control" id="exampleInputNome1"  value="<?php echo $exibe['apelido'] ?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNome1">Mesorregião</label>
                            <input name="mesorregiao" type="text" class="form-control" id="exampleInputNome1"  value="<?php echo $exibe['mesorregiao'] ?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNome1">Microrregião</label>
                            <input name="microrregiao" type="text" class="form-control" id="exampleInputNome1"  value="<?php echo $exibe['microrregiao'] ?>">
                            
                        </div>

                        <div class="form-group">
                        
                                <textarea name="resumo" id="summernote"  ><?php echo $exibe['resumo'] ?></textarea>
                                </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputNome1">Municípios Limitrófes</label>
                            <textarea name="limite" type="text" class="form-control" id="exampleInputNome1" ><?php echo $exibe['limite'] ?></textarea>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputNome1">Área em Km</label>
                            <input name="area" type="number" step="any" class="form-control" id="exampleInputNome1" placeholder="Área em Km" value="<?php echo $exibe['area'] ?>">
                            
                        </div>
                        
                        <div class="form-group">
                            
                            <input name="pib" type="hidden" step="any" class="form-control" id="exampleInputNome1" placeholder="Área em Km" value="<?php echo $exibe['id'] ?>">
                            
                        </div>
                        

                        <div class="form-group">
                            <label for="exampleInputNome1">População</label>
                            <input name="populacao" type="number" class="form-control" id="exampleInputNome1"  placeholder="População" value="<?php echo $exibe['populacao'] ?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNome1">Aniversário da Cidade</label>
                            <input name="aniversario" type="date" class="form-control" id="exampleInputNome1" placeholder="Aniversário da Cidade" value="<?php echo $exibe['aniversario'] ?>">
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>