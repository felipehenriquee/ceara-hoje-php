<div class="container-flex divMissao divDestaque" >
    <div class="tituloPerfilCidade container">
        <h1>As Notícias e os 
        <br>perfis das cidades</h1>

        <div class="container propagandaPerfilCidade">
            <?php 
                
                $linkDaPropaganda = "http://rodopublis.com.br/";
                $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2Fbrazil.png?alt=media&token=7a351c4a-e71f-4cae-9bdf-88a1d206c9ae";
                include("__confidencialsite__/componente/propagandas/selo.php") 
            ?>
            <?php 
                
                $linkDaPropaganda = "http://rodopublis.com.br/";
                $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2Fbrazil.png?alt=media&token=7a351c4a-e71f-4cae-9bdf-88a1d206c9ae";
                include("__confidencialsite__/componente/propagandas/selo.php") 
            ?>
            <?php 
                
                $linkDaPropaganda = "http://rodopublis.com.br/";
                $imagemDaPropaganda = "https://firebasestorage.googleapis.com/v0/b/o-portal-do-ceara.appspot.com/o/outros%2Fbrazil.png?alt=media&token=7a351c4a-e71f-4cae-9bdf-88a1d206c9ae";
                include("__confidencialsite__/componente/propagandas/selo.php") 
            ?>
        </div>
    </div>
    
    <div class="container mapaCidade">
        <div class="mapaCidadeCard">

            <div class="mapaCidadeToolbar">
                <span class="mapaCidadeToolbarTitulo">Filtrar por região</span>
                <div class="legendaRegioes" id="legendaRegioes">
                    <button type="button" class="regiaoBtn" data-regiao="norte">
                        <span class="regiaoCor" style="background-color:#26547C"></span>
                        Norte Cearense
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="noroeste">
                        <span class="regiaoCor" style="background-color:#D6D1B1"></span>
                        Noroeste Cearense
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="metropolitana">
                        <span class="regiaoCor" style="background-color:#EDD382"></span>
                        Região Metropolitana de Fortaleza
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="jaguaribe">
                        <span class="regiaoCor" style="background-color:#73937E"></span>
                        Região do Jaguaribe
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="centroSul">
                        <span class="regiaoCor" style="background-color:#ED9390"></span>
                        Centro-Sul
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="sul">
                        <span class="regiaoCor" style="background-color:#6A041D"></span>
                        Sul Cearense
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="sertoes">
                        <span class="regiaoCor" style="background-color:#7261A3"></span>
                        Sertões
                    </button>
                    <button type="button" class="regiaoBtn" data-regiao="destaque">
                        <span class="regiaoCor" style="background-color:#1B998B"></span>
                        Municípios em destaque
                    </button>
                </div>
            </div>

            <div class="mapaCidadeCorpo">
                <div class="mapSvg">
                    <?php include("mapaID.html") ?>
                </div>

                <div class="linksCidades">
                    <form>
                        <div class="form-group barraPesquisa">
                            <svg class="iconeBusca" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
                                <circle cx="10.5" cy="10.5" r="6.5" fill="none" stroke="currentColor" stroke-width="2"/>
                                <line x1="15.3" y1="15.3" x2="21" y2="21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <input id="pesquisa" type="text" name="pesquisa" class="form-control" placeholder="Procure por cidade" autocomplete="off">
                        </div>
                    </form>
                    <div class="resultado" id="resultado">
                        <?php

                            $resultadoPesquisa = $connect->prepare("select nome, id, nomecru from cidades where id>0 order by nome asc");
                            $resultadoPesquisa->execute();
                            $resultadoPesquisa->bind_result($nomeCidadePesquisa, $idCidadePesquisa, $nomeCruPesquisa);

                            echo "<ul class='tabelaNomeCidade'>";
                                while ($resultadoPesquisa->fetch()){
                                    echo "
                                        <li><a id='".$idCidadePesquisa."' onmouseover='mudarCor(this.id)' onmouseout='voltarCor(this.id)' href='municipios/$nomeCruPesquisa'>
                                            $nomeCidadePesquisa
                                        </a></li>
                                    ";
                                }
                            echo "</ul>";
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>