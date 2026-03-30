// Interatividade da página de PERFIL
var intAgenda = document.querySelector("#btn-agenda");
var intProcedimentos = document.querySelector("#btn-proced");
var intGaleria = document.querySelector("#btn-galeria");
var intDesconto = document.querySelector("#btn-desconto");
var body = document.querySelector("body");

intAgenda.addEventListener("click", function(){
    body.className = "body-agenda-int";
});

intGaleria.addEventListener("click", function(){
    body.className = "body-galeria-int";
});

intProcedimentos.addEventListener("click", function(){
    body.className = "body-procedimentos-int";
});

intDesconto.addEventListener("click", function(){
    body.className = "body-combo-int";
});