var principalSelector = document.querySelector("#conteudo-principal section:last-of-type ");
var principalMain = document.querySelector("#conteudo-principal");
var criaSection = document.createElement("section");
var criaH1 = document.createElement("h1");
var criaParagrafo = document.createElement("p");


function titleGet(){
    var storageGetTitle = localStorage.getItem('title');
    return storageGetTitle;
}
function  getReflex() {
    let storageGet = localStorage.getItem("reflex");
    return storageGet;
}
 function getFabObj (title,reflex){
     let construct = {};

     construct.title = title;
     construct.reflex = reflex;

     return construct;
 }
function adicionaFilhos(){
   
 principalMain.appendChild(criaSection);
 criaSection.appendChild(criaH1);
 criaSection.appendChild(criaParagrafo);
 criaSection.setAttribute("id",titleGet());

}
    function adicionaObjetoAoArray(arrayReflexao){

        let titulo = criaH1.innerHTML = titleGet();
        let reflex = criaParagrafo.innerHTML = getReflex();
        let fabObj= getFabObj(titulo, reflex );
        arrayReflexao.push(fabObj);
    }


    export default  function postaReflexao (arrayReflexao){   
       
        arrayReflexao = [];
            if(principalSelector){
                

                adicionaFilhos ();
                adicionaObjetoAoArray(arrayReflexao);

                criaH1.classList.add("addFormat");
                criaParagrafo.classList.add("addFormat"); 
            }
    }



