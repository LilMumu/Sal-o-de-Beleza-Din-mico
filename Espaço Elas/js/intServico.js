// Interatividade da página de SERVIÇOS
var intCapilar = document.querySelector("#cabelo");
var intManicure_pedicure = document.querySelector("#manicure_pedicure");
var intPromocoes_servicos = document.querySelector("#promocoes-servicos");
var intDesign_sobrancelha = document.querySelector("#sobrancelha");
var body = document.querySelector("body");

intCapilar.addEventListener("click", function(){
    body.className = "body-capilar-int";
});

intManicure_pedicure.addEventListener("click", function(){
    body.className = "body-manicure_pedicure-int";
});

intDesign_sobrancelha.addEventListener("click", function(){
    body.className = "body-design_sobrancelha-int";
});

intPromocoes_servicos.addEventListener("click", function(){
    body.className = "body-promocoes_servicos-int";
});