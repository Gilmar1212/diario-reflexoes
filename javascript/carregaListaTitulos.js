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
var urlCatch = window.location.href;
var urlSplit = urlCatch.split("/");
console.log();
var url= urlSplit[3]
ajax.open("POST","http://localhost/"+url+"/php/selectReflexoes.php",true);
ajax.send();

}
