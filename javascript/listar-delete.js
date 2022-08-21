var btn= document.querySelector("#btn-list-delete");
var list =document.querySelector("#listAdd-delete");
var titulo = document.querySelector(".list");
var load =document.querySelector("#load");
var btndelete = document.querySelectorAll('.btn-delete');
var ajax = new XMLHttpRequest();
btn.addEventListener("click",()=>{
ajax.onreadystatechange =()=>{  
    if(ajax.readyState ==4 && ajax.status ==200){
        
            
                    if(ajax.status==200){
                   
                       
                       load.classList.add("loadAnime");
                            load.classList.add("fadeIn");
                        setTimeout(()=>{

                           load.classList.remove("fadeIn");
                          load.classList.add("fadeOut");
                          titulo.classList.toggle("fadeIn");
                           
                     
                     
                      
                      var final = titulo.innerHTML=ajax.responseText;
                     
                   },1000);
                    
                    }
    }
    
}
ajax.open("POST","http://localhost/projeto-diario-de-reflexoes/php/deleteReflexao.php",true);
ajax.send();



});
