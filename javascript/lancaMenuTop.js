var btnVoltaAoTopo = document.querySelector(".retorna-topo");

var ativaEventoScroll =  () =>{
	window.addEventListener("scroll",function(){
	
	let tamanhoTopo = window.pageYOffset;
	let menu = document.querySelector("#menu");
	let locaMenu = Math.round(menu.getBoundingClientRect().top);
	if(tamanhoTopo > locaMenu){
		btnVoltaAoTopo.classList.add("retorna-topo-fadeIn");
	}
});	
}

ativaEventoScroll();

	var ativaEventoAoPassarOMouse = () =>{
	setInterval(function(){
	btnVoltaAoTopo.addEventListener("mouseenter",function(){
		btnVoltaAoTopo.classList.add("retorna-topo-fadeIn");
	});
	},6000);
	}
	
	var encerraEventoDoMouse = () =>{
		setInterval(function(){
		btnVoltaAoTopo.classList.remove("retorna-topo-fadeIn");
		btnVoltaAoTopo.style.transition="0.5s";
		
		},3000);
	}

	ativaEventoAoPassarOMouse();
	encerraEventoDoMouse(); 
