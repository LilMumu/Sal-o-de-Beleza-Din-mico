// Interatividade da página de PERFIL
var intAgenda = document.querySelector("#btn-agenda");
var intProcedimentos = document.querySelector("#btn-proced");
var intGaleria = document.querySelector("#btn-galeria");
var intConfig = document.querySelector("#btn-config");
var body = document.querySelector("body");

intAgenda.addEventListener("click", function(){
    body.className = "body-agenda-int-adm";
});

intGaleria.addEventListener("click", function(){
    body.className = "body-galeria-int-adm";
});

intProcedimentos.addEventListener("click", function(){
    body.className = "body-procedimentos-int-adm";
});

intConfig.addEventListener("click", function(){
    body.className = "body-config-int-adm";
});