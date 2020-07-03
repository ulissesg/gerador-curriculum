$(document).ready(function () {
    $(document.getElementById("botao-formacao")).click(function () {
        var aux = $(document.getElementById("box-formacao")).clone().find("input:text").val("").end();
        aux.prepend("<hr>");
        aux.insertBefore(document.getElementById("mais-formacao"));
    });
    $(document.getElementById("botao-experiencia")).click(function () {
        var aux = $(document.getElementById("box-experiencia")).clone();
        aux.find("input:text").val("");
        aux.find("input[type=date]").val("");
        aux.find("textarea").val("");
        aux.prepend("<hr>");
        aux.insertBefore(document.getElementById("mais-experiencia"));
    });
    $(document.getElementById("botao-qualificacoes")).click(function () {
        var aux = $(document.getElementById("box-qualificacoes")).clone().find("input:text").val("").end();
        aux.prepend("<hr>");
        aux.insertBefore(document.getElementById("mais-qualificacoes"));
    });
    $(document.getElementById("botao-informacoes-adicionais")).click(function () {
        var aux = $(document.getElementById("box-informacoes-adicionais")).clone().find("input:text").val("").end();
        aux.prepend("<hr>");
        aux.insertBefore(document.getElementById("mais-informacoes-adicionais"));
    });
});