import campoVazio from './trataErrorCampo.js';
import postaReflexao from'./getReflex.js';

var textArea = document.querySelector("#areaTexto");
var listaReflexoes = document.querySelector(".list");
var postar = document.querySelector("#postar");


function fabricaObjeto(reflex,title){
	let reflexao = {};
	reflexao.reflex = reflex;
    reflexao.title = title;

	return reflexao;
}	
function aplicaTituloNaLista(){

    let reflex = textArea.value;
     if(!reflex == " "){
                var getStorageTitle = localStorage.getItem('title');
                let criaLi = document.createElement("li");
                listaReflexoes.appendChild(criaLi);
                criaLi.innerHTML = getStorageTitle;

            }else{
                campoVazio();
         }
}

function pressionaEnterParaEnviar(){
    textArea.addEventListener('keydown',(e)=>{
        let teclaPressionada = e.keyCode;   
    if(teclaPressionada == 13){
        postaReflexao();
        aplicaTituloNaLista();
    }
   
    });
}

var require = fetch('http://localhost/Projeto%20di%c3%a1rio%20de%20reflex%c3%b5es/Javascript/dados.json').then((res)=>{
if(!res.ok){
    throw new Error("Não foi possivel se conectar ao local especificado, erro de numero:  " + res.status);
}
return res.json();
}).then((setJson)=>{
  function encapsula(){
    for(var i = 0; i < setJson.length;i++){
       postar.addEventListener('click',(e)=>{
           e.preventDefault();
            let reflex = textArea.value;
            let title = document.querySelector("#titulo").value;
            var fabObj = fabricaObjeto(reflex,title);
            setJson.push(fabObj);
        for(var j = 0 ;j < setJson.length ;j++){
                var setStorageTitle = localStorage.setItem('title',setJson[j].title);
                var setStorage = localStorage.setItem('reflex',setJson[j].reflex)
            }
            var getStorageTitle = localStorage.getItem('title');
            var getStorage = localStorage.getItem('reflex');
            aplicaTituloNaLista();
         postaReflexao();
       })
    }    
   }
   encapsula();
   pressionaEnterParaEnviar();
}).catch((error)=>{
    console.error(error.message);
})



