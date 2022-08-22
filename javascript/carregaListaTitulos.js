var btn= document.querySelector("#btn-list");
var list =document.querySelector("#listAdd");
var conteudo = document.querySelector("#conteudo-principal");
var load =document.querySelector("#load");


export default function result(){
  var ajax = new XMLHttpRequest();

  


ajax.onreadystatechange =()=>{  
    if(ajax.readyState ==4 && ajax.status ==200){
        
            
                    if(ajax.status==200){
                   
                     
                     
                     
                      
                      var final = conteudo.innerHTML=ajax.responseText;
                     
                  
                    
                    }
    }
    
}

ajax.open("POST","http://localhost/projeto-diario-de-reflexoes/php/selectReflexoes.php",true);
ajax.send();




}
