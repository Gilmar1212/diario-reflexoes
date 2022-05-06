const http = require("http");
const express = require("express");
const { create } = require("domain");
const app = express();
/*const server = http.createServer((req,res)=>{

});

server.listen('3001','localhost',()=>{
	console.log("Server carregado");
	console.log("Pressione ctrl + c para encerrar");
})*/
app.listen("3001",()=>{
	 console.log("Server iniciado");
	 console.log("****************");
	 console.log("Pressione ctrl + C para encerrar execução.");
	 console.log("****************");
	 console.log("Para acessar digite localhost/endereço do site, ou localhost apenas.");
});
app.use(express.static(__dirname+'/'));
app.get("/Inicio",(req,res)=>{
	res.sendFile(__dirname+"/Index.html");
});
app.get("/json",(req,res)=>{
	res.sendFile(__dirname+"/javascript/dados.json");
});
/*app.get("/",(req,res)=>{
	let createMsg = document.createElement("h1");
	createMsg.innerHTML = "Bem vindo ao meu servidor local, por favor acesse a alguma sessão para prosseguir.";
	res.send(createMsg);
});*/