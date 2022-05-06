 export default function campoVazio(){
    var ul = document.querySelector(".list");
    let error = document.createElement("li");
    
    error.innerHTML = "Não foi possivel enviar, campo vazio.";
    
    ul.appendChild(error);  
    error.classList.add("errorFadeIn");
        setInterval(()=>{
            error.classList.remove("errorFadeIn");
            error.classList.add("errorFadeOut");
        },2000)
}

