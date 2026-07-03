<section class="hero is-success is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">Login Adm Portal do Ceará</h3>
                
                <?php 
                    if(isset($_SESSION['nao_autenticado'])):
                        
                    
                ?>
                
                    <div class="notification is-danger">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                <?php 
                   endif;
                   unset($_SESSION['nao_autenticado']);
                ?>
                <div class="box">
                    <form action="logar" method="POST">
                        <div class="field">
                            <div class="control">
                                <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                            </div>
                        </div>
                        <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>