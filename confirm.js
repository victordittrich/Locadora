var senha = document.getElementById("senha");
var senha2 = document.getElementById("confsenha");

function test(){
    if(senha.value != senha2.value){
    alert("Senhas diferentes");
    senha.value = "";
    senha2.value = "";
}
}