var anterior = 0;
var anteriorHover = 0;
var duploClique = 0;

var atual = 1;
    var gifAtivo = 0;

    function abreGif(){
        document.getElementById("gifLogo").src = ""
        document.getElementById("gifLogo").src = "https://firebasestorage.googleapis.com/v0/b/bird-16da9.appspot.com/o/portal%2FLOGO.png?alt=media&token=ef547b01-be0c-4ea4-8153-7327dbefa0f6"
        
        
        document.getElementById("textoCapa").classList.remove("fechaTudo");
        fechaGif();
            

        
    }

    function fechaGif(){
        
        setTimeout( function() {
            gifAtivo = 0;
            
            document.getElementById("item"+atual).classList.remove("active");
            atual = 1;
            document.getElementById("item"+atual).classList.add("active");
            
            document.getElementById("textoCapa").classList.add("fechaTudo");
            
            
            abreProximoSlide();
        }, 6000 );

        
    }
    

    function abreProximoSlide(){
        setTimeout( function() {
            document.getElementById("item"+atual).classList.remove("active");
            atual++;
            // console.log(atual+" "+gifAtivo);
            if (atual>3){
                atual = 1;
                gifAtivo = 1;
                abreGif();
               
            }
            // console.log("depois do if "+atual+" "+gifAtivo);
            document.getElementById("item"+atual).classList.add("active");
            if(gifAtivo == 0){
                
                abreProximoSlide();
            }
            
        }, 2000 );
    }
    
    abreProximoSlide();
    // mudar cor do mapa


var corBaseAtual = {};

function mudarCor(recebido){
    var elemento = document.getElementById(recebido);
    elemento.classList.remove(corBaseAtual[recebido] || "st18");
    elemento.classList.add("st16");

    anteriorHover = recebido;
}

function voltarCor(recebido){
    var elemento = document.getElementById(recebido);
    elemento.classList.remove("st16");
    elemento.classList.add(corBaseAtual[recebido] || "st18");
}

// destaque de mesorregiões no mapa

var REGIOES = {
    norte:         { grupo: "Norte", excluir: "metropolitana", cor: "st1" },
    noroeste:      { grupo: "noroeste", cor: "st11" },
    metropolitana: { grupo: "metropolitana", cor: "st18" },
    jaguaribe:     { grupo: "jaguaribe", cor: "st14" },
    centroSul:     { grupo: "centro-sul", cor: "st12" },
    sul:           { grupo: "sul", cor: "st13" },
    sertoes:       { grupo: "sertoes", cor: "st15" },
    destaque:      { grupo: "Destaques", cor: "st20" }
};
var CLASSES_PINTURA = ["st1", "st11", "st12", "st13", "st14", "st15", "st16", "st18", "st20", "st-inativo"];
var regiaoAtiva = null;

function elementosDoGrupo(grupoId){
    var grupo = document.getElementById(grupoId);
    return grupo ? Array.prototype.slice.call(grupo.querySelectorAll("polygon, path, polyline")) : [];
}

function todosOsMunicipios(){
    var todos = [];
    Object.keys(REGIOES).forEach(function(chave){
        todos = todos.concat(elementosDoGrupo(REGIOES[chave].grupo));
    });
    var vistos = {};
    return todos.filter(function(elemento){
        if (vistos[elemento.id]) {
            return false;
        }
        vistos[elemento.id] = true;
        return true;
    });
}

function definirCorBase(elemento, classe){
    CLASSES_PINTURA.forEach(function(c){ elemento.classList.remove(c); });
    elemento.classList.add(classe);
    corBaseAtual[elemento.id] = classe;
}

function limparFiltroRegiao(){
    todosOsMunicipios().forEach(function(elemento){
        definirCorBase(elemento, "st18");
    });
    document.querySelectorAll(".regiaoBtn").forEach(function(botao){
        botao.classList.remove("ativo");
    });
    regiaoAtiva = null;
}

function aplicarFiltroRegiao(chave, botao){
    var config = REGIOES[chave];
    if (!config) {
        return;
    }

    if (regiaoAtiva === chave){
        limparFiltroRegiao();
        return;
    }

    todosOsMunicipios().forEach(function(elemento){
        definirCorBase(elemento, "st-inativo");
    });

    var destacados = elementosDoGrupo(config.grupo);
    if (config.excluir){
        var idsExcluidos = elementosDoGrupo(config.excluir).map(function(elemento){ return elemento.id; });
        destacados = destacados.filter(function(elemento){ return idsExcluidos.indexOf(elemento.id) === -1; });
    }
    destacados.forEach(function(elemento){
        definirCorBase(elemento, config.cor);
    });

    document.querySelectorAll(".regiaoBtn").forEach(function(botao){
        botao.classList.remove("ativo");
    });
    if (botao){
        botao.classList.add("ativo");
    }
    regiaoAtiva = chave;
}

window.addEventListener("load", function(){
    document.querySelectorAll(".regiaoBtn").forEach(function(botao){
        botao.addEventListener("click", function(){
            aplicarFiltroRegiao(botao.dataset.regiao, botao);
        });
    });
});









