$(document).ready(function () {
    $(document.getElementById("botao-formacao")).click(function () {
        var aux = $(document.getElementById("box-formacao")).clone()
        aux.prepend("<hr>");
        aux.prependTo(document.getElementById("mais-formacao"));
    });
    $(document.getElementById("botao-experiencia")).click(function () {
        var aux = $(document.getElementById("box-experiencia")).clone()
        aux.prepend("<hr>");
        aux.prependTo(document.getElementById("mais-experiencia"));
    });
    $(document.getElementById("botao-qualificacoes")).click(function () {
        var aux = $(document.getElementById("box-qualificacoes")).clone()
        aux.prepend("<hr>");
        aux.prependTo(document.getElementById("mais-qualificacoes"));
    });
    $(document.getElementById("botao-informacoes-adicionais")).click(function () {
        var aux = $(document.getElementById("box-informacoes-adicionais")).clone()
        aux.prepend("<hr>");
        aux.prependTo(document.getElementById("mais-informacoes-adicionais"));
    });
});