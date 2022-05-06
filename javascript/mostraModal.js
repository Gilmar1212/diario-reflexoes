const modal = document.querySelector(".modal");
const btnEditor = document.querySelector("#editor");
 function mostraModal(){
        btnEditor.addEventListener('click',()=>{
                modal.classList.toggle("modal-fadeIn");
        });
 }
mostraModal();