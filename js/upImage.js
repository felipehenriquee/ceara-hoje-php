// A configuração e inicialização do Firebase ficam em
// componente/geral/firebaseConfig.php, incluído antes deste script.

function uploadImage(){
    const titulo = document.getElementById('tituloNoticia');
    document.getElementById('caixa-confirma').classList.remove("desativado");
    document.getElementById('caixa-confirma').classList.add("ativo");
   
    const ref = firebase.storage().ref()
    const file = document.querySelector('#foto').files[0]
    const name = titulo.value+" - O Portal do Ceará "+new Date();
    const metadata = {
        contentType:file.type
    }

    const task = ref.child("noticias/"+name).put(file, metadata)
    task.then(snapshot => snapshot.ref.getDownloadURL()).then(url =>{
        const imageelement = document.querySelector("#imagem")
        const testeelement = document.querySelector("#teste")

        document.getElementById('img-processando').classList.remove("ativo");
        document.getElementById('img-processando').classList.add("desativado");

        document.getElementById('img-concluido').classList.remove("desativado");
        document.getElementById('img-concluido').classList.add("ativo");

        document.getElementById('btn-confirma').classList.remove("desativado");
        document.getElementById('btn-confirma').classList.add("ativado");
    
        
        imageelement.src = url
        testeelement.value = url
        
        
    })
}

function uploadImageCidade(){
    const titulo = document.getElementById('nomeCidade');
    document.getElementById('caixa-confirma').classList.remove("desativado");
    document.getElementById('caixa-confirma').classList.add("ativo");
    
   
    const ref = firebase.storage().ref()
    const file = document.querySelector('#foto').files[0]
    const name = titulo.value+" - O Portal do Ceará "+new Date();
    const metadata = {
        contentType:file.type
    }

    const task = ref.child("capasCidades/"+name).put(file, metadata)
    task.then(snapshot => snapshot.ref.getDownloadURL()).then(url =>{
        const imageelement = document.querySelector("#imagem")
        const testeelement = document.querySelector("#teste")

        document.getElementById('img-processando').classList.remove("ativo");
        document.getElementById('img-processando').classList.add("desativado");

        document.getElementById('img-concluido').classList.remove("desativado");
        document.getElementById('img-concluido').classList.add("ativo");

        document.getElementById('btn-confirma').classList.remove("desativado");
        document.getElementById('btn-confirma').classList.add("ativado");

        imageelement.src = url
        testeelement.value = url
        
        
    })
}

function uploadImageEvento(){
    const titulo = document.getElementById('tituloEvento');
    document.getElementById('caixa-confirma').classList.remove("desativado");
    document.getElementById('caixa-confirma').classList.add("ativo");
    
   
    const ref = firebase.storage().ref()
    const file = document.querySelector('#foto').files[0]
    const name = titulo.value+" - O Portal do Ceará "+new Date();
    const metadata = {
        contentType:file.type
    }

    const task = ref.child("eventos/"+name).put(file, metadata)
    task.then(snapshot => snapshot.ref.getDownloadURL()).then(url =>{
        const imageelement = document.querySelector("#imagem")
        const testeelement = document.querySelector("#teste")

        document.getElementById('img-processando').classList.remove("ativo");
        document.getElementById('img-processando').classList.add("desativado");

        document.getElementById('img-concluido').classList.remove("desativado");
        document.getElementById('img-concluido').classList.add("ativo");

        document.getElementById('btn-confirma').classList.remove("desativado");
        document.getElementById('btn-confirma').classList.add("ativado");

        imageelement.src = url
        testeelement.value = url
        
        
    })
}