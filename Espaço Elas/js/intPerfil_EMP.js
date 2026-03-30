// Interatividade da página de PERFIL
var intAgenda = document.querySelector("#btn-agenda");
var intProcedimentos = document.querySelector("#btn-proced");
var body = document.querySelector("body");

intAgenda.addEventListener("click", function(){
    body.className = "body-agenda-int-emp";
});

intProcedimentos.addEventListener("click", function(){
    body.className = "body-procedimentos-int-emp";
});